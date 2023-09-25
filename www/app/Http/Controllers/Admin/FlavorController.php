<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\flavors;
use App\Models\FlavorImage;
use App\Models\Flavor;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
class FlavorController extends Controller
{
  //
    public $model;
    public function __construct()
    {
        $this->model = new Flavor();
    }
    public function index(Request $request){
        $table = resolve('flavor-repo')->renderHtmlTable($this->getParamsForFilter($request));
        return view('admin.flavor.flavor_list',compact('table'));
    }

    public function create(Request $request){
        $data = [];
        try {
                $data['error'] = false;
                $status  = resolve('flavor-repo')->getStatus();
                $category = resolve('flavor-repo')->getCategory();
                if(isset($request->id))
                {
                    $id = $request->id;
                    $user = resolve('flavor-repo')->findByID($id);
                    $flavor_image = resolve('flavorImage-repo')->findByID($user->id);
                    $data['view'] = view('admin.flavor.offcanvas',compact('status','user','category','flavor_image'))->with('model',$this->model)->render();
                }else{
                    $data['view'] = view('admin.flavor.offcanvas',compact('status','category'))->render();
                }
                return response()->json($data);
        } catch (\Exception $e) {
            $data['error'] = true;
            $data['message'] = $e->getMessage();
        }
        return response()->json($data);
    }

    public function store(flavors $request)
    {
        $data = $params = [];
        DB::beginTransaction();
        try {
            if($request->has("flavors_image"))
            {
            // Create user
            $params['flavor_title'] = $request->flavor_title;
            $params['flavor_description'] = $request->flavor_description;
            $params['category_id'] = $request->category_id;
            $params['sweet'] = $request->sweet;
            $params['citric'] = $request->citric;
            $params['tobaco_intensity'] = $request->tobaco_intensity;
            $params['menthol'] = $request->menthol;
            $params['cloud_volume'] = $request->cloud_volume;
            $params['flavors_available'] = $request->flavors_available;
            $slug = $request->slug;
            $convert = str_replace(' ', '-', $slug);
            $params['slug'] = strtolower($convert);
            $params['is_active'] = !empty($request->is_active) ?  $request->is_active :  'Y';

                $user = resolve('flavor-repo')->create($params);
                $images = [];
                if ($request->file("flavors_image")){
                    foreach($request->file("flavors_image") as $key => $image)
                    {
                        $fileDir = config('constants.FLAVOR_URL') . DIRECTORY_SEPARATOR.$user->id;
                        if (!File::exists($fileDir)) {
                            Storage::makeDirectory($fileDir, 0777);
                            $storeName = basename($image->store($fileDir));
                              $images[]['name'] = $storeName;
                        }
                    }
                }
                foreach ($images as $key => $image) {
                    $imag['image_name'] = $image['name'];
                    $imag['category_id'] =$request->category_id;
                    $imag['flavor_id'] =$user->id;

                    FlavorImage::create($imag);
                }
                if (!empty($user)) {
                    $data['error'] = false;
                    $data['message'] = 'Flavor create successfully.';
                    $data['view'] = resolve('flavor-repo')->renderHtmlTable($this->getParamsForFilter($request));
                    DB::commit();
                    return response()->json($data);
                }
            }
            $data['error'] = true;
            $data['message'] = 'Flavor not created successfully..!';
            return response()->json($data);

        } catch (\Exception $e) {
            DB::rollBack();
            $data['error'] = true;
            $data['message'] = $e->getMessage();
            return response()->json($data);
        }
    }

    public function update(flavors $request)
    {
        $data = $params = [];
        DB::beginTransaction();
        try {

            $params['flavor_title'] = $request->flavor_title;
            $params['flavor_description'] = $request->flavor_description;
            $params['category_id'] = $request->category_id;
            $params['sweet'] = $request->sweet;
            $params['citric'] = $request->citric;
            $params['tobaco_intensity'] = $request->tobaco_intensity;
            $params['menthol'] = $request->menthol;
            $params['cloud_volume'] = $request->cloud_volume;
            $params['flavors_available'] = $request->flavors_available;
            $slug = $request->slug;
            $convert = str_replace(' ', '-', $slug);
            $params['slug'] = strtolower($convert);
            $params['is_active'] = !empty($request->is_active) ?  $request->is_active :  'Y';
            $id=$request->id;
            $user = resolve('flavor-repo')->update($params,$id);
            $images = [];
            if ($request->file("flavors_image")){
                foreach($request->file("flavors_image") as $key => $image)
                {
                    $fileDir = config('constants.FLAVOR_URL') . DIRECTORY_SEPARATOR.$id;
                    if (!File::exists($fileDir)) {
                        Storage::makeDirectory($fileDir, 0777);
                        $storeName = basename($image->store($fileDir));
                            $images[]['name'] = $storeName;
                    }
                }
            }
            foreach ($images as $key => $image) {
                $imag['image_name'] = $image['name'];
                $imag['category_id'] =$request->category_id;
                $imag['flavor_id'] = $id;

                FlavorImage::create($imag);
            }
            if (!empty($user)) {
                    $data['error'] = false;
                    $data['message'] = 'Flavor Updated successfully.';
                    $data['view'] = resolve('flavor-repo')->renderHtmlTable($this->getParamsForFilter($request));
                    DB::commit();
                    return response()->json($data);
            }
            $data['error'] = true;
            $data['message'] = 'Flavor not Updated successfully..!';
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

        if (!empty($params['start_date']) && !empty($params['end_date'])) {
            $params['start_date'] = Carbon::parse($params['start_date'])->format('Y-m-d 00:00:00');
            $params['end_date'] = Carbon::parse($params['end_date'])->format('Y-m-d 23:59:00');
        } else {
            $params['start_date'] = Carbon::now()->subDays(7)->format('Y-m-d 00:00:00');
            $params['end_date'] = Carbon::now()->format('Y-m-d 23:59:00');
        }

        return $params;
    }

    public function delete(Request $request)
    {

         try {
            $id = $request->id;
            $user = resolve('flavor-repo')->findById($id);
            if (!empty($user)) {
                $folder = config('constants.FLAVOR_URL').DIRECTORY_SEPARATOR.$user->id;
                if(File::exists(storage_path('app'.DIRECTORY_SEPARATOR.$folder))){
                    Storage::deleteDirectory($folder);
                }
                $user->delete();
                FlavorImage::where("flavor_id",$id)->delete();
                toastr()->success($user->flavor_title . ' deleted successfully..!');
                return redirect()->route('backend.product.flavors');
            } else {
                toastr()->error('Flavors not Found.!');
            }
        } catch (\Exception $e) {
            toastr()->error($e->getMessage());
            return redirect()->back();
        }
    }
    public function flavorcategory(Request $request)
    {
        $category_id= $request->id;
        $data = resolve('flavor-repo')->getflavor($category_id);
        return view('frontend.flavors.classicLine',compact('data','category_id'));
    }

    public function productDetail(Request $request)
    {
        $slug = $request->data;
        $data  = resolve('flavor-repo')->getDataByslug($slug);
        $getCategory_Data = resolve('category-repo')->getCategory($data);
        return view('frontend.flavors.product',compact('data','getCategory_Data'));
    }

    public function removeImage(Request $request)
    {
        try {

        $id =  $request->fid;
        $data = resolve('flavorImage-repo')->removeImage($id);
        $path = File::delete(storage_path(config('constants.FLAVOR_URL').$data->flavor_id.'/'.$data->image_name));
        // unlink($path);
        $data->delete();
        $messages['message'] ="Image Has been removed";
        } catch (\Exception $e) {
            $messages['message'] = $e->getMessage();
        }
        return response()->json($messages);

    }
}
