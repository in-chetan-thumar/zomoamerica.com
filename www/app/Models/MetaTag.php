<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetaTag extends Model
{
    use HasFactory;
    protected $table="meta_detail";
    protected $fillable = [
        'meta_title',
        'meta_description',
        'meta_keyword',
        'meta_route',
    ];
}
