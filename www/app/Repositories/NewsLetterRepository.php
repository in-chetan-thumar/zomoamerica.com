<?php


namespace App\Repositories;
use App\Models\Flavor;
use Carbon\Carbon;
use App\Models\NewsLetter;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\FlavorImage;
class NewsLetterRepository
{
    public $model;

    /**
     * UserRepository constructor.
     */
    public function __construct(NewsLetter $model)
    {
        return $this->model = $model;
    }

    // Get data by id
    public function findByID($id)
    {
        return $this->model->where('flavor_id',$id)->get();
    }

    public function removeImage($id){
        return $this->model->where('id',$id)->first();
    }
    public function create($params){
        return $this->model->create($params);

    }
    public function filter($params)
    {
        $this->model = $this->model->when(!empty($params['query_str']), function ($q) use ($params) {
            return $q->where('email', 'LIKE', '%' . $params['query_str'] . "%");
        });
        return $this->model
            ->latest()
            ->paginate(config('constants.PER_PAGE'), ['*'],'page',!empty($params['page'])? $params['page']:'')
            ->setPath($params['path']);

    }
    public function renderHtmlTable($params)
    {
        $tableData = $this->filter($params);
        return view('admin.newsletter.table', compact('tableData'))->render();
    }
}
