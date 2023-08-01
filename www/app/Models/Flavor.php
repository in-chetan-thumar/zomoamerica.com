<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\FlavorImage;
use URL;
class Flavor extends Model
{
    use HasFactory;
    protected  $table = "flavors";
    protected $fillable = [
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
        'is_actiive',
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
        // $a=  $data::find(6)->flavorImage1();
        // dd($a);
        $flavor_image = flavorImage::where('flavor_id',$data->id)->first();
        if (file_exists(config("constants.FLAVOR_URL") .DIRECTORY_SEPARATOR. $data->id . DIRECTORY_SEPARATOR . $flavor_image->image_name)) 
        {
            return asset('images/flavors'.DIRECTORY_SEPARATOR.$data->id . DIRECTORY_SEPARATOR . $flavor_image->image_name);
        } else {
            return "Sorry Image is not exist";
        }
    }


    public function getFlavorImageArray($val)
    {
        // $flavor_image = flavorImage::where('flavor_id',$val->id)->first();
        if (file_exists(config("constants.FLAVOR_URL") .DIRECTORY_SEPARATOR. $val->flavor_id . DIRECTORY_SEPARATOR . $val->image_name)) 
        {
            return asset('images/flavors'.DIRECTORY_SEPARATOR.$val->flavor_id . DIRECTORY_SEPARATOR . $val->image_name);
        }
    }
}
