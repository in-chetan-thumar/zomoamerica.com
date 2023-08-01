<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Request\Products;
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
    return view("frontend.product.zomoPaper");
   }

   public function zomoCharcol()
   {
    return view("frontend.product.zomoCharcol");
   }
   
   public function aluminumFoil()
   {
        return view("frontend.product.aluminumFoil");
   }
   
   public function shishaHose()
   {
        return view("frontend.product.shishaHose");
   }
   
   public function zomohookah()
   {
        return view("frontend.product.zomohookah");
   }

}
