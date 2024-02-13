<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\FlavorImage;
use URL;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class Flavor extends Model
{
    use HasFactory;
    protected  $table = "flavors";
    protected $fillable = [
        'id',
        'flavor_title',
        'flavor_description',
        'category_id',
        'sweet',
        'citric',
        'tobaco_intensity',
        'slug',
        'menthol',
        'cloud_volume',
        'flavors_available',
        'is_active',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by',
        'deleted_at',
        'deleted_by',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function Flavor()
    {
        return $this->belongsTo(FlavorImage::class);
    }

    public function flavorImage()
    {
        return $this->hasOne(FlavorImage::class,'category_id','id');
    }

    public function flavorImage1()
    {
        return $this->hasMany(FlavorImage::class, 'flavor_id');
    }


    public  function getFlavorImageAttribute($data)
    {
        $flavor_image = flavorImage::where('flavor_id',$data->id)->first();
//
        if (isset($flavor_image ))
        {
            return asset('storage/flavors'.DIRECTORY_SEPARATOR.$data->id . DIRECTORY_SEPARATOR . $flavor_image->image_name);
        }
    }


    public function getFlavorImageArray($val)
    {
        $flavor_image = flavorImage::where('flavor_id',$val->id)->first();
        if (Storage::exists(config("constants.FLAVOR_URL") .DIRECTORY_SEPARATOR. $val->flavor_id . DIRECTORY_SEPARATOR . $val->image_name))
        {
            return asset('storage/flavors'.DIRECTORY_SEPARATOR.$val->flavor_id . DIRECTORY_SEPARATOR . $val->image_name);
        }
    }
}
