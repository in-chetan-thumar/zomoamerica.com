<?php


namespace App\Repositories;

use App\Models\Role;
use http\Env\Request;


class RoleRepository
{
    private $model;

    /**
     * RoleRepository constructor.
     */
    public function __construct(Role $model)
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

        $role = $this->model->create($params->only('name'));

        $permissions = $params->permission;

        $role->syncPermissions($permissions);

        return $role;
    }

    // Update recoard
    public function update($params, $id)
    {
        $permissions = $params->permission;

        $role = $this->findByID($id);
        $role->name = $params->name;
        $role->save();

        $role->syncPermissions($permissions);

        return $role;
    }

    public function filter($params)
    {
        $params['return_type'] = $params['return_type'] ?? '';

        $this->model = $this->model->when(!empty($params['skip_roles']), function ($query) use ($params) {
            $query->whereNotIn('name', $params['skip_roles']);
        });


        if(isset($params['order_by'])){
            foreach ($params['order_by'] as $column => $type) {
                $this->model->orderBy($column, $type);
            }
        }else {
            $this->model = $this->model->orderBy('created_by', 'DESC');
        }

        
        if ($params['return_type'] == 'drop_down') {
            return $this->model->pluck('name', 'id');
            
        } elseif ($params['return_type'] == 'object') {
            return $this->model->get();
            
        } else {
            return $this->model
                ->latest()
                ->paginate(config('constants.PER_PAGE'), ['*'], 'page', !empty($params['page']) ? $params['page'] : '');
        }
    }

    public function activeItemDropDown($params = [])
    {
        $params['skip_roles'] = [config('constants.SUPER_ADMIN')];
        $params['order_by'] = ['name' => 'ASC'];
        $params['return_type'] = 'drop_down';

        return $this->filter($params);
    }

    public function activeItemObject($params = [])
    {
        $params['order_by'] = ['created_at' => 'DESC'];
        $params['return_type'] = 'object';

        return $this->filter($params);
    }
}
