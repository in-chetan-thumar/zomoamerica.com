<?php
namespace App\Repositories;
use App\Models\MetaTag;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MetatagRepository
{
    public $model;
    /**
     * UserRepository constructor.
     */
    public function __construct(MetaTag $model)
    {
        return $this->model = $model;
    }

    // Get data by id
    public function findByID($id)
    {
        return $this->model->findorFail($id);
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
        return view('admin.meta.table', compact('tableData'))->render();
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
