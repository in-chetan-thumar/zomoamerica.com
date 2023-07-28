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

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
