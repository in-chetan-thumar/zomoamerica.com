<?php


namespace App\Repositories;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProductRepository
{
    public $model;

    /**
     * UserRepository constructor.
     */
    public function __construct(Product $model)
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

        $user->assignRole($params['role']);

        return $user;
    }

    // Update recoard
    public function update($params, $id)
    {
        $user = $this->findByID($id)->update($params);

        // Update role
        if ($user) {
            DB::table('model_has_roles')->where('model_id', $id)->delete();
            $this->findByID($id)->syncRoles($params['role']);
        }
        return $user;
    }

    // Change Password
    public function changePassword($params, $id)
    {
        $user = $this->findByID($id)->update($params);

        return $user;
    }

    public function updateProfile($params, $id)
    {
        return $this->findByID($id)->update($params);
    }

  

    public function renderHtmlTable()
    {
        $tableData = $this->model->all();
        return view('admin.product.table', compact('tableData'))->render();
    }

    public function activeItemDropDown($params = [])
    {
        $params['is_active'] = 'Y';
        $params['order_by'] = ['name' => 'ASC'];
        $params['return_type'] = 'drop_down';

        return $this->filter($params);
    }

    public function activeItemObject($params = [])
    {
        $params['is_active'] = 'Y';
        $params['order_by'] = ['created_at' => 'DESC'];
        $params['return_type'] = 'object';

        return $this->filter($params);
    }
}
