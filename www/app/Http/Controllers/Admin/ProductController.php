<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Request\Products;
use Artesaos\SEOTools\Facades\SEOTools;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Support\Facades\Route;
use App\Models\MetaTag;


class ProductController extends Controller
{
    public $model;

    public function __cunstruct(){
        $this->model = new Product();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //product-repo
        $table = resolve('product-repo')->renderHtmlTable();
        return view('admin.product.product_list', compact('table'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [];
        try {
            $roles = resolve('role-repo')->activeItemDropDown();
            $data['error'] = false;
            $data['view'] = view('admin.product.offcanvas')->render();
            return response()->json($data);
        } catch (\Exception $e) {
            $data['error'] = true;
            $data['message'] = $e->getMessage();
        }
        return response()->json($data);

    }

   public function zomoPaper() {
    $content = MetaTag::select('id', 'meta_title', 'meta_keyword', 'meta_description')->where('meta_route',(Route::currentRouteName())) ->first();
    SEOTools::setTitle($content->title);
    SEOTools::setDescription($content->meta_description);
    SEOMeta::addKeyword($content->meta_keyword);
    return view("frontend.product.zomoPaper",compact('content'));
   }

   public function zomoCharcol()
   {
    $content = MetaTag::select('id', 'meta_title', 'meta_keyword', 'meta_description')->where('meta_route',(Route::currentRouteName())) ->first();
    SEOTools::setTitle($content->title);
    SEOTools::setDescription($content->meta_description);
    SEOMeta::addKeyword($content->meta_keyword);
    return view("frontend.product.zomoCharcol",compact("content"));
   }

   public function aluminumFoil()
   {
    $content = MetaTag::select('id', 'meta_title', 'meta_keyword', 'meta_description')->where('meta_route',(Route::currentRouteName())) ->first();
    SEOTools::setTitle($content->title);
    SEOTools::setDescription($content->meta_description);
    SEOMeta::addKeyword($content->meta_keyword);
        return view("frontend.product.aluminumFoil",compact("content"));
   }

   public function shishaHose()
   {
       $content = MetaTag::select('id', 'meta_title', 'meta_keyword', 'meta_description')->where('meta_route',(Route::currentRouteName())) ->first();
       SEOTools::setTitle($content->title);
    SEOTools::setDescription($content->meta_description);
    SEOMeta::addKeyword($content->meta_keyword);
        return view("frontend.product.shishaHose",compact("content"));
   }

   public function zomohookah()
   {
    $content = MetaTag::select('id', 'meta_title', 'meta_keyword', 'meta_description')->where('meta_route',(Route::currentRouteName())) ->first();
    SEOTools::setTitle($content->title);
    SEOTools::setDescription($content->meta_description);
    SEOMeta::addKeyword($content->meta_keyword);
        return view("frontend.product.zomohookah",compact("content"));
   }

}
