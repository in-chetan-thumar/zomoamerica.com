<?php

namespace App\Models;

use App\Traits\CustomTimestamps;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NewsLetter extends Model
{
    use HasFactory,CustomTimestamps,SoftDeletes;
    protected $table="newsletter";
    protected $fillable =[
        'email',
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
