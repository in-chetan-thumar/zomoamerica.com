<?php


namespace App\Repositories;

use App\Models\AuthorizeStateDistributor;
use App\Models\News;
use App\Models\Role;
use http\Env\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;


class AuthorizeStateDistributorRepository
{
    private $model;

    /**
     * RoleRepository constructor.
     */
    public function __construct(AuthorizeStateDistributor $model)
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
        $this->model = $this->model->when(!empty($params['query_str']), function ($q) use ($params) {
            return $q->where('first_name', 'LIKE', '%' . $params['query_str'] . "%")
                ->orWhere('last_name', 'LIKE', '%' . $params['query_str'] . "%")
                ->orWhere('telephone', 'LIKE', '%' . $params['query_str'] . "%")
                ->orWhere('email', 'LIKE', '%' . $params['query_str'] . "%")
                ->orWhere('state', 'LIKE', '%' . $params['query_str'] . "%")
                ->orWhere('city', 'LIKE', '%' . $params['query_str'] . "%");
        });

        return $this->model
            ->latest()
            ->paginate(config('constants.PER_PAGE'), ['*'],'page',!empty($params['page'])? $params['page']:'')
            ->setPath($params['path']);

    }


    public function renderHtmlTable($params)
    {
        $tableData = $this->filter($params);
        return view('admin.state_distributor.table', compact('tableData'))->render();
    }


}
