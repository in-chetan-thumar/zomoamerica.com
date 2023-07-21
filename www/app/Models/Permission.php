<?php

namespace App\Models;

use App\Traits\CustomTimestamps;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Permission extends \Spatie\Permission\Models\Permission
{
    use HasFactory,SoftDeletes,CustomTimestamps;

    public function getCreatedAtFormattedAttribute()
    {
        dd($this->created_at);
        return Carbon::parse($this->created_at)->format('d-m-Y H:i');
    }
}
