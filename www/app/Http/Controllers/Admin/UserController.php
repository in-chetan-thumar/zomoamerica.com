<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\UserRequest;
use App\Models\Role;
use Carbon\Carbon;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $table = resolve('user-repo')->renderHtmlTable($this->getParamsForFilter($request));

        $roles = resolve('role-repo')->activeItemDropDown();
        return view('admin.user.user_list', compact('table', 'roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $data = [];
        try {
            $roles = resolve('role-repo')->activeItemDropDown();
            $data['error'] = false;
            $data['view'] = view('admin.user.offcanvas', compact('roles'))->render();
            return response()->json($data);

        } catch (\Exception $e) {
            $data['error'] = true;
            $data['message'] = $e->getMessage();
        }
        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $data = $params = [];
        DB::beginTransaction();
        try {
            // Create user
            $password = app('common-helper')->randomPasswordGenerator();
            $params['role'] = $request->role;
            $params['name'] = $request->name;
            $params['email'] = $request->email;
            $params['password'] = Hash::make($password);

            $user = resolve('user-repo')->create($params);

            if (!empty($user)) {

                // Send Mail Username and Password
                $params = [];
                $params['user'] = $user->name;
                $params['email'] = $request->email;
                $params['password'] = $password;
                $params['role_name'] = $user->getRoleNames()->first();

//                Mail::send(new UserCreateNotification($params));

                $data['error'] = false;
                $data['message'] = 'User create successfully.';
                $data['view'] = resolve('user-repo')->renderHtmlTable($this->getParamsForFilter($request));

                DB::commit();
                return response()->json($data);

            }

            $data['error'] = true;
            $data['message'] = 'User not created successfully..!';
            return response()->json($data);

        } catch (\Exception $e) {
            DB::rollBack();
            $data['error'] = true;
            $data['message'] = $e->getMessage();
            return response()->json($data);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [];
        try {
            $user = resolve('user-repo')->findByID($id);
            $roles = resolve('role-repo')->activeItemDropDown();

            $data['error'] = false;
            $data['view'] = view('admin.user.offcanvas', compact('roles', 'user'))->render();
            return response()->json($data);

        } catch (\Exception $e) {
            $data['error'] = true;
            $data['message'] = $e->getMessage();
        }
        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $params = [];
        DB::beginTransaction();
        try {

            // Update user
            $params = [];
            $params['role'] = $request->role;
            $params['name'] = $request->name;
            $params['email'] = $request->email;

            $user = resolve('user-repo')->update($params, $id);

            if (!empty($user)) {

                $data['error'] = false;
                $data['message'] = 'User update successfully.';
                $data['view'] = resolve('user-repo')->renderHtmlTable($this->getParamsForFilter($request));

                DB::commit();
                return response()->json($data);
            }
        } catch (\Exception $e) {
            DB::rollBack();
            $data['error'] = true;
            $data['message'] = $e->getMessage();
            return response()->json($data);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $user = resolve('user-repo')->findById($id);
            if (!empty($user)) {

                $user->delete();
                toastr()->success($user->name . ' deleted successfully..!');
                return redirect()->route('usermanagements.index');
            } else {
                toastr()->error('User not found.!');
            }
        } catch (\Exception $e) {
            toastr()->error($e->getMessage());
            return redirect()->back();
        }
    }

    public function changeStatus($id)
    {
        try {
            $user = resolve('user-repo')->changeStatus($id);
            toastr()->success('Status changed successfully..!');
            return redirect()->route('usermanagements.index');
        } catch (\Exception $e) {
            toastr()->error($e->getMessage());
            return redirect()->back();
        }
    }

    // Change Password

    public function changePassword(ChangePasswordRequest $request)
    {
        try {
            $params = [];
            $params['password'] = Hash::make($request->password);
            $user = resolve('user-repo')->changePassword($params, auth()->user()->id);
            if ($user) {
                toastr()->success('Password changed successfully..!');
            } else {
                toastr()->error('Password not changed successfully..!');

            }
        } catch (\Exception $e) {
            toastr()->error($e->getMessage());
        }
        return redirect()->back();
    }

    public function getParamsForFilter(Request $request)
    {
        $previousUrl = parse_url(url()->previous());
        $params = [];

          if (request()->routeIs('usermanagements.index') || !isset($previousUrl['query'])) {
            $params['query_str'] = $request->query_str ?? '';
            $params['role'] = $request->role;
            $params['page'] =  $request->page ?? 0;
            $params['type'] =  $request->type ?? null;
            $params['start_date'] =  $request->start_date ?? null;
            $params['end_date'] =  $request->end_date ?? null;
            $params['path'] = \Illuminate\Support\Facades\Request::fullUrl();

        }else{
            parse_str($previousUrl['query'], $params);
            $params['path'] =  url()->previous();
        }

        if (!empty($params['start_date']) && !empty($params['end_date'])) {
            $params['start_date'] = Carbon::parse($params['start_date'])->format('Y-m-d 00:00:00');
            $params['end_date'] = Carbon::parse($params['end_date'])->format('Y-m-d 23:59:00');
        } else {
            $params['start_date'] = Carbon::now()->subDays(7)->format('Y-m-d 00:00:00');
            $params['end_date'] = Carbon::now()->format('Y-m-d 23:59:00');
        }

        return $params;
    }
}
