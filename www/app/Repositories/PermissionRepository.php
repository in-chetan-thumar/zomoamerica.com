<?php


namespace App\Repositories;

use App\Models\Role;
use http\Env\Request;
use Spatie\Permission\Models\Permission;


class PermissionRepository
{
    private $model;

    /**
     * RoleRepository constructor.
     */
    public function __construct(Permission $model)
    {
        $this->model = $model;
    }

    public function findByID($id)
    {
        return $this->model->findById($id);
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
        return view('admin.permission.table', compact('tableData'))->render();
    }
}
