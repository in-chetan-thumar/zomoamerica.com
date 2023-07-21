<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wholesaleDetail extends Model
{
    use HasFactory;
    protected $table="wholesale";
    protected $primaryKey="id";
    public $timestamps = true;
    protected $hidden = [
        'updated_at'
    ];
    protected $fillable = [
        'buisness_name',
        'first_name',
        'last_name',
        'adress',
        'city',
        'state',
        'zipcode',
        'website',
        'email',
        'wholesale'
    ];
}
