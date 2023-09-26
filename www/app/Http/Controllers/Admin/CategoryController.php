<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Category;
use Carbon\Carbon;
use DB;
class CategoryController extends Controller
{
    //
    public function index(Request $request){
        $table = resolve('category-repo')->renderHtmlTable($this->getParamsForFilter($request));
        return view('admin.category.category_list',compact('table'));
    }

    public function create(Request $request){
        $data = [];
        try {
            $data['error'] = false;
            $status  = resolve('category-repo')->getStatus();
            if(isset($request->id))
            {
                $id = $request->id;
                $user = resolve('category-repo')->findByID($id);
                $data['view'] = view('admin.category.offcanvas',compact('status','user'))->render();
            }else{
                $data['view'] = view('admin.category.offcanvas',compact('status'))->render();
            }
            return response()->json($data);

        } catch (\Exception $e) {
            $data['error'] = true;
            $data['message'] = $e->getMessage();
        }
        return response()->json($data);
    }

    public function store(Category $request)
    {
        $data = $params = [];
        DB::beginTransaction();
        try {

            // Create user
            $params['name'] = $request->name;
            $params['slug'] = $request->slug;
            $params['is_active'] = $request->is_active;
            $id  = isset($request->id) ? $request->id:'';
            if(isset($request->id))
            {
                $user = resolve('category-repo')->update($params, $id);
                $updated = "true";
            }else{
                $user = resolve('category-repo')->create($params);
            }
            if (!empty($updated)) {
                $data['error'] = false;
                $data['message'] = 'Category updated successfully.';
                $data['view'] = resolve('category-repo')->renderHtmlTable($this->getParamsForFilter($request));
                DB::commit();
                return response()->json($data);
            }
            if (!empty($user)) {
                $data['error'] = false;
                $data['message'] = 'Category create successfully.';
                $data['view'] = resolve('category-repo')->renderHtmlTable($this->getParamsForFilter($request));
                DB::commit();
                return response()->json($data);
            }

            $data['error'] = true;
            $data['message'] = 'Category not created successfully..!';
            return response()->json($data);

        } catch (\Exception $e) {
            DB::rollBack();
            $data['error'] = true;
            $data['message'] = $e->getMessage();
            return response()->json($data);
        }
    }
    public function getParamsForFilter(Request $request)
    {
        $previousUrl = parse_url(url()->previous());
        $params = [];
          if (request()->routeIs('backend.product.contact') || !isset($previousUrl['query'])) {
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

        // if (!empty($params['start_date']) && !empty($params['end_date'])) {
        //     $params['start_date'] = Carbon::parse($params['start_date'])->format('Y-m-d 00:00:00');
        //     $params['end_date'] = Carbon::parse($params['end_date'])->format('Y-m-d 23:59:00');
        // } else {
        //     $params['start_date'] = Carbon::now()->subDays(7)->format('Y-m-d 00:00:00');
        //     $params['end_date'] = Carbon::now()->format('Y-m-d 23:59:00');
        // }

        return $params;
    }

    public function delete(Request $request)
    {
        try {
            $id = $request->id;
            $user = resolve('category-repo')->findById($id);
            if (!empty($user)) {
                $user->delete();
                toastr()->success($user->name . ' deleted successfully..!');
                return redirect()->route('backend.product.flavors.category');
            } else {
                toastr()->error('Category not found.!');
            }
        } catch (\Exception $e) {
            toastr()->error($e->getMessage());
            return redirect()->back();
        }
    }


}
