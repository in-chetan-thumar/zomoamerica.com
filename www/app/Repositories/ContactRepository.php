<?php


namespace App\Repositories;

use App\Models\ContactDetail;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ContactRepository
{
    public $model;

    /**
     * UserRepository constructor.
     */
    public function __construct(ContactDetail $model)
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
        return $user;
    }

    public function renderHtmlTable($params)
    {
        $tableData = $this->filter($params);
        return view('admin.contact.contactTable', compact('tableData'))->render();
    }

    public function filter($params)
    {
        $params['return_type'] = $params['return_type'] ?? '';

        $this->model = $this->model->when(!empty($params['start_date'] && !empty($params['end_date'])), function ($q) use ($params) {
            return $q->whereBetween('created_at', [$params['start_date'], $params['end_date']]);
        });

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


}
