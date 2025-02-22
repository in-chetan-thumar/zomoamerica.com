<?php


namespace App\Repositories;
use App\Models\Flavor;
use Carbon\Carbon;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\FlavorImage;
class FlavorsImage
{
    public $model;

    /**
     * UserRepository constructor.
     */
    public function __construct(FlavorImage $model)
    {
        $this->model = $model;
    }

    // Get data by id
    public function findByID($id)
    {
        return $this->model->where('flavor_id',$id)->get();
    }

    public function removeImage($id){
        return $this->model->where('id',$id)->first();
    }
}