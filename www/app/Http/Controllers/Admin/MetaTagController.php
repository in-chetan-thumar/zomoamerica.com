<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class MetaTagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $table = resolve('meta-repo')->renderHtmlTable($this->getParamsForFilter($request));
        return view('admin.meta.meta_list',compact('table'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
                $data = [];
        try {
            $data['error'] = false;
            $data['view'] = view('admin.meta.offcanvas')->render();
            return response()->json($data);

        } catch (\Exception $e) {
            $data['error'] = true;
            $data['message'] = $e->getMessage();
        }
        return response()->json($data);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
         $data = $params = [];
        DB::beginTransaction();
        try {

            // Create user
            $params['meta_title'] = $request->meta_title;
            $params['meta_description'] = $request->meta_description;
            $params['meta_keyword'] = $request->meta_keyword;
            $params['meta_route'] = $request->meta_route;
            $user = resolve('meta-repo')->create($params);

            if (!empty($user)) {
                $data['error'] = false;
                $data['message'] = 'MetaDetail created successfully.';
                $data['view'] = resolve('meta-repo')->renderHtmlTable($this->getParamsForFilter($request));
                DB::commit();
                return response()->json($data);
            }
            $data['error'] = true;
            $data['message'] = 'MetaDetail is not created successfully..!';
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
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $data = [];
        try {
            $id=$request->id;
            $user = resolve('meta-repo')->findByID($id);

            $data['error'] = false;
            $data['view'] = view('admin.meta.offcanvas', compact('user'))->render();
            return response()->json($data);

        } catch (\Exception $e) {
            $data['error'] = true;
            $data['message'] = $e->getMessage();
        }
        return response()->json($data);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $data = $params = [];
        DB::beginTransaction();
        try {
            // Update user
            $params = [];
            $id=$request->id;
            $params['meta_title'] = $request->meta_title;
            $params['meta_description'] = $request->meta_description;
            $params['meta_keyword'] = $request->meta_keyword;
            $params['meta_route'] = $request->meta_route;

            $user = resolve('meta-repo')->update($params, $id);

            if (!empty($user)) {

                $data['error'] = false;
                $data['message'] = 'MetaDetail is updated successfully.';
                $data['view'] = resolve('meta-repo')->renderHtmlTable($this->getParamsForFilter($request));

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
     */
    public function destroy(Request $request)
    {
           try {
            $id= $request->id;
            $user = resolve('meta-repo')->findById($id);
            if (!empty($user)) {

                $user->delete();
                toastr()->success($user->name . ' deleted successfully..!');
                return redirect()->route('backend.metaDetail');
            } else {
                toastr()->error('MetaDetail not found.!');
            }
        } catch (\Exception $e) {
            toastr()->error($e->getMessage());
            return redirect()->back();
        }
    }
     public function getParamsForFilter(Request $request)
    {
        $previousUrl = parse_url(url()->previous());
        $params = [];

          if (request()->routeIs('backend.product.flavors') || !isset($previousUrl['query'])) {
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
