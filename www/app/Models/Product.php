<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = "product";
    protected $primaryKey="id";
    protected $fillable = [
        'product_title',
        'product_image',
        'product_name',
        'product_description',
        'menthol',
        'sweet',
        'citric',
        'available_in_gm',
    ];
    public function getAll()
    {
        return static::all();
    }


    public function findUser($id)
    {
        return static::find($id);
    }


    public function deleteUser($id)
    {
        return static::find($id)->delete();
    }

}
