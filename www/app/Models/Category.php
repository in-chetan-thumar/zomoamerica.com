<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Flavorimage;
class Category extends Model
{
    use HasFactory;
    protected $table="category";
    protected $fillable = [
        'name',
        'is_active',
        'category_title',
        'slug',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by',
        'deleted_at',
        'deleted_by',
    ];

    public function flavor()
    {
        return $this->hasMany(Flavor::class, 'category_id', 'id');
    }
    public function flavorImage()
    {
        return $this->hasMany(Flavorimage::class, 'category_id', 'id');
    }
}
