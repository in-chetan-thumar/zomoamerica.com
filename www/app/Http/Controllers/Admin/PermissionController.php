<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\PermissionRequest;
use App\Http\Requests\UserRequest;
use App\Mail\UserCreateNotification;

use Carbon\Carbon;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;


class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $table = resolve('permission-repo')->renderHtmlTable($this->getParamsForFilter($request));
        return view('admin.permission.list', compact('table'));
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
            $data['error'] = false;
            $data['view'] = view('admin.permission.offcanvas')->render();
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
    public function store(PermissionRequest $request)
    {
        $data = $params = [];
        DB::beginTransaction();
        try {
            $params['title'] = $request->title;
            $params['name'] = $request->name;
            $params['permission_label'] = $request->permission_label;
            $params['guard_name'] = 'web';

            $permission = resolve('permission-repo')->create($params);

            if (!empty($permission)) {

                $data['error'] = false;
                $data['message'] = 'Permission create successfully.';
                $data['view'] = resolve('permission-repo')->renderHtmlTable($this->getParamsForFilter($request));

                DB::commit();
                return response()->json($data);

            }

            $data['error'] = true;
            $data['message'] = 'Permission not created successfully..!';
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
            $permission = resolve('permission-repo')->findByID($id);
            $data['error'] = false;
            $data['view'] = view('admin.permission.offcanvas', compact('permission'))->render();
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
    public function update(PermissionRequest $request, $id)
    {
        $data = $params = [];
        DB::beginTransaction();
        try {

            $params = [];
            $params['title'] = $request->title;
            $params['name'] = $request->name;
            $params['permission_label'] = $request->permission_label;
            $params['guard_name'] = 'web';

            $permission = resolve('permission-repo')->update($params, $id);

            if (!empty($permission)) {

                $data['error'] = false;
                $data['message'] = 'Permission update successfully.';
                $data['view'] = resolve('permission-repo')->renderHtmlTable($this->getParamsForFilter($request));

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
            $permission = resolve('permission-repo')->findById($id);
            if (!empty($permission)) {

                $permission->delete();
                toastr()->success('Permission deleted successfully..!');
                return redirect()->route('permission.index');
            } else {
                toastr()->error('Permission not found.!');
            }
        } catch (\Exception $e) {
            toastr()->error($e->getMessage());
            return redirect()->back();
        }
    }

    public function changeStatus($id)
    {
        try {
            $permission = resolve('permission-repo')->changeStatus($id);
            toastr()->success('Status changed successfully..!');
            return redirect()->route('permission.index');
        } catch (\Exception $e) {
            toastr()->error($e->getMessage());
            return redirect()->back();
        }
    }



    public function getParamsForFilter(Request $request)
    {
        $previousUrl = parse_url(url()->previous());
        $params = [];

          if (request()->routeIs('permission.index') || !isset($previousUrl['query'])) {
            $params['query_str'] = $request->query_str ?? '';
            $params['page'] =  $request->page ?? 0;
            $params['type'] =  $request->type ?? null;
            $params['path'] = \Illuminate\Support\Facades\Request::fullUrl();

        }else{
            parse_str($previousUrl['query'], $params);
            $params['path'] =  url()->previous();
        }
        return $params;
    }
}
