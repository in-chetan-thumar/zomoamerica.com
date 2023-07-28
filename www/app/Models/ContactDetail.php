<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactDetail extends Model
{
    use HasFactory;
    protected $table = "contact";
    protected $primaryKey="id";
    protected $fillable = [
        'email',
        'subject',
        'message',
    ];

    public static function getContactData(){
        return ContactDetail::get();
    }
}
