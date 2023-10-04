<?php


namespace App\Repositories;
use App\Models\Flavor;
use Carbon\Carbon;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class FlavorRepository
{
    public $model;

    /**
     * UserRepository constructor.
     */
    public function __construct(Flavor $model)
    {
        return $this->model = $model;
    }

    // Get data by id
    public function findByID($id)
    {
        return $this->model->findorFail($id);
    }

    // Get data by username
    public function findByUsername($username)
    {
        if (config('constants.MOBILE_OTP_LOGIN') || config('constants.EMAIL_OTP_LOGIN') || config('constants.USER_PASSWORD_LOGIN')) {

            if (config('constants.MOBILE_OTP_LOGIN')) {
                return $this->model->where('mobile', $username)->first();
            } else {
                return $this->model->where('email', $username)->first();
            }
        }
    }

    // Create new recoard
    public function create($params)
    {
        $user = $this->model->create($params);
        return $user;
    }

    // Update recoard
    public function update($params, $id)
    {
        $user = $this->findByID($id)->update($params);
        return $user;
    }

    public function renderHtmlTable($params)
    {
        $tableData = $this->filter($params);
        return view('admin.flavor.table', compact('tableData'))->render();
    }


    public function frontend_filter($params,$id)
    {
        $getId = Category::where('slug',$id)->first();
         $this->model->where('category_id',$getId->id)->get();
        return $this->model
        ->latest()
        ->where('category_id',$getId->id)
        ->paginate(config('constants.PER_FLAVORS_PAGE'), ['*'],'page',!empty($params['page'])? $params['page']:'')
        ->setPath($params['path']);

    }
    public function renderHtmlFlavorsTable($params,$id)
    {
        $tableData = $this->frontend_filter($params,$id);
        $category_id=$id;
        return view('frontend.component.flavor_table', compact('tableData','category_id'))->render();
    }


    public function filter($params)
    {
        $params['return_type'] = $params['return_type'] ?? '';

        // $this->model = $this->model->when(!empty($params['start_date'] && !empty($params['end_date'])), function ($q) use ($params) {
        //     return $q->whereBetween('created_at', [$params['start_date'], $params['end_date']]);
        // });

        if ($params['return_type'] == 'drop_down') {
            return $this->model->pluck('name', 'id');

        } elseif ($params['return_type'] == 'object') {
            return $this->model->get();

        } else {
            return $this->model
                ->latest()
                ->paginate(config('constants.PER_PAGE'), ['*'], 'page', !empty($params['page']) ? $params['page'] : '')
                ->setPath($params['path']);
        }
    }

    public function getStatus()
    {
        return array("Y"=>'Active','N'=>'DeActive');
    }
    public function changeStatus($id)
    {
        $permission = $this->findByID($id);
        if ($permission->is_active == 'Y') {
            $permission->is_active = 'N';
        } else {
            $permission->is_active = 'Y';
        }

        return $permission->save();
    }

    public function getCategory(){
        return Category::pluck('name','id');
    }

    public function getflavor($id){
        $getId = Category::where('slug',$id)->first();
        return $this->model->where('category_id',$getId->id)->get();
    }

    public function getDataByCategoryId($id){
        return $this->model->where('category_id',$id)->first();

    }
    // forgetting data by slug

    public function getDataByslug($slug){
        return Flavor::where('slug',$slug)->first();
    }
    public function getDistinctData(){
        return $this->model->select('category_id')->distinct()->get();
    }

}
