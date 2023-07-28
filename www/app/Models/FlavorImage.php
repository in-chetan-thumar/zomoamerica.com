<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Flavor;
class FlavorImage extends Model
{
    use HasFactory;
    protected  $table = "flavors_image";
    protected $fillable = [
        'image_name',
        'category_id',
        'flavor_id'
    ];
    public function flavor(){
        return $this->hasOne(Flavor::class,'category_id','id');
    }

   
    public function getFlavorImage(){
        return $this->belongsTo(Flavor::class);
    }
    public static function getDataByid($id){
        return FlavorImage::where("flavor_id",$id)->first();
    }

    public static function getDataWithArray($id){
        return FlavorImage::where("flavor_id",$id)->get();
    }
    // public function getImage
}
