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
        'slug'
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
