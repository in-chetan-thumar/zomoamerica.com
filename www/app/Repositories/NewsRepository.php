<?php


namespace App\Repositories;

use App\Models\News;
use App\Models\Role;
use http\Env\Request;
use Spatie\Permission\Models\Permission;


class NewsRepository
{
    private $model;

    /**
     * RoleRepository constructor.
     */
    public function __construct(News $model)
    {
        $this->model = $model;
    }

    public function findByID($id)
    {
        return $this->model->findorFail($id);
    }

    // Create new recoard
    public function create($params)
    {
        return $this->model->create($params);
    }

    // Update recoard
    public function update($params, $id)
    {
        return $this->findByID($id)->update($params);
    }

    public function filter($params)
    {
        return $this->model
            ->latest()
            ->paginate(config('constants.PER_PAGE'), ['*'],'page',!empty($params['page'])? $params['page']:'')
            ->setPath($params['path']);

    }
    public function frontend_filter($params)
    {
        return $this->model
            ->latest()
            ->paginate(config('constants.PER_NEWS_PAGE'), ['*'],'page',!empty($params['page'])? $params['page']:'')
            ->setPath($params['path']);

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

    public function renderHtmlTable($params)
    {
        $tableData = $this->filter($params);
        return view('admin.news.table', compact('tableData'))->render();
    }

    public function renderHtmlNewsTable($params)
    {
        $tableData = $this->frontend_filter($params);
        return view('frontend.component.news_table', compact('tableData'))->render();
    }
    public function getNewsDetail(){
        return $this->model->get();
    }
    public function getNewsByTitle($title){
        return $this->model->where("title",$title)->first();
    }
}
