<?php

namespace App\Models;

use App\Traits\CustomTimestamps;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AuthorizeStateDistributor extends Model
{
    use HasFactory,CustomTimestamps,SoftDeletes;
    protected $table = "authorize_state_distributor";
    protected $primaryKey = "id";
    protected $fillable = [
        'first_name',
        'last_name',
        'telephone',
        'email',
        'state',
        'city',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by',
        'deleted_at',
        'deleted_by',
    ];

    public function getCreatedAtFormattedAttribute()
    {
        return Carbon::parse($this->created_at)->format('d-m-Y');
    }
}
