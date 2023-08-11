<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Support\Facades\Route;
use App\Models\MetaTag;

class FlavorsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if($request->id == "Classic-line")
        {
            $content = MetaTag::select('id', 'meta_title', 'meta_keyword', 'meta_description')->where('meta_route',(Route::currentRouteName()))->where('meta_keyword','Zomo Classic') ->first();
            SEOTools::setTitle($content->meta_title);
            SEOTools::setDescription($content->meta_description);
            SEOMeta::addKeyword($content->meta_keyword);
        }else if($request->id == "Strong-line"){
            $content = MetaTag::select('id', 'meta_title', 'meta_keyword', 'meta_description')->where('meta_route',(Route::currentRouteName()))->where('meta_keyword','Zomo StrongLine') ->first();
            SEOTools::setTitle($content->meta_title);
            SEOTools::setDescription($content->meta_description);
            SEOMeta::addKeyword($content->meta_keyword);
        }else if($request->id == "Max-line"){
            $content = MetaTag::select('id', 'meta_title', 'meta_keyword', 'meta_description')->where('meta_route',(Route::currentRouteName()))->where('meta_keyword','Zomo MaxLine') ->first();
            SEOTools::setTitle($content->meta_title);
            SEOTools::setDescription($content->meta_description);
            SEOMeta::addKeyword($content->meta_keyword);
        }

        $category_id= $request->id;
        $data = resolve('flavor-repo')->getflavor($category_id);
        $table = resolve('flavor-repo')->renderHtmlFlavorsTable($this->getParamsForFilter($request),$category_id);
        return view('frontend.flavors.classicline', compact('table','content'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
      public function getParamsForFilter(Request $request)
    {
        $previousUrl = parse_url(url()->previous());
        $params = [];

        if (request()->routeIs('frontend.news') || !isset($previousUrl['query'])) {
            $params['query_str'] = $request->query_str ?? '';
            $params['page'] =  $request->page ?? 0;
            $params['path'] =  \Illuminate\Support\Facades\Request::fullUrl();
        } else {
            parse_str($previousUrl['query'], $params);
            $params['path'] =  url()->previous();
        }
        return $params;
    }
}
