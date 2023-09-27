<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\UserRequest;
use App\Models\News;
use App\Models\Role;
use Carbon\Carbon;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;


class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $table = resolve('news-repo')->renderHtmlTable($this->getParamsForFilter($request));
        return view('admin.news.list', compact('table'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [];
        try {

            $data['error'] = false;
            $data['view'] = view('admin.news.offcanvas')->render();
            return response()->json($data);
        } catch (\Exception $e) {
            $data['error'] = true;
            $data['message'] = $e->getMessage();
        }
        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $params = [];
        DB::beginTransaction();
        try {
            if ($request->has('image')) {

                $fileDir = config('constants.NEWS_DOC_PATH') . DIRECTORY_SEPARATOR;
                if (!File::exists($fileDir)) {
                    Storage::makeDirectory($fileDir, 0777);
                    $params = [];
                    $params['title'] = $request->title;
                    $params['description'] = $request->description;
                    $slug = $request->slug;
                    $params['slug'] = str_replace(' ', '-', strtolower($slug));
                    $params['link'] = $request->link;
                    $params['is_active'] = $request->is_active;
                    $params['image'] = basename($request->file('image')->store($fileDir));
                    // dd($params);
                    $page = resolve('news-repo')->create($params);

                }
            }
            // $params['cover_photo'] = $name;
            if (!empty($page)) {
                $data['error'] = false;
                $data['message'] = 'News Stored successfully.';
                $data['view'] = resolve('news-repo')->renderHtmlTable($this->getParamsForFilter($request));
                DB::commit();
                return response()->json($data);
            }

        } catch (\Exception $e) {
            DB::rollBack();
            $data['error'] = true;
            $data['message'] = $e->getMessage();
            return response()->json($data);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        try{
            if(empty($slug)){
                $data['error'] = true;
                $data['message'] = 'Slug must not be empty!';
                return response()->json($data);
            }
            
            // dd($slug);
            $news = resolve('news-repo')->getNewsByTitle($slug);
            return view('frontend.innerNews',compact('news'));
            //
        } catch (\Exception $e) {
            $data['error'] = true;
            $data['message'] = $e->getMessage();
        }
        return response()->json($data);
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [];
        try {
            $newsdata = resolve('news-repo')->findByID($id);

            $data['error'] = false;
            $data['view'] = view('admin.news.offcanvas', compact('newsdata'))->render();
            return response()->json($data);
        } catch (\Exception $e) {
            $data['error'] = true;
            $data['message'] = $e->getMessage();
        }
        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $params = [];
        DB::beginTransaction();

        try {

            $params = [];
            $params['title'] = $request->title;
            $params['description'] = $request->description;
            $slug = $request->slug;
            $convert = str_replace(' ', '-', $slug);
            $params['slug'] = strtolower($convert);
            // dd($params['slug']);
            $params['link'] = $request->link;
            $params['is_active'] = $request->is_active;
            if ($request->has('image')) {
                $fileDir = config('constants.NEWS_DOC_PATH') . DIRECTORY_SEPARATOR;
                if (!File::exists($fileDir)) {
                    Storage::makeDirectory($fileDir, 0777);
                    $params['image'] = basename($request->file('image')->store($fileDir));
                }
            }
            $news = resolve('news-repo')->update($params, $id);

            if ($news) {

                $data['error'] = false;
                $data['message'] = 'News update successfully.';
                $data['view'] = resolve('news-repo')->renderHtmlTable($this->getParamsForFilter($request));

                DB::commit();
                return response()->json($data);
            }

        } catch (\Exception $e) {
            DB::rollBack();
            $data['error'] = true;
            $data['message'] = $e->getMessage();
            return response()->json($data);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $news = resolve('news-repo')->findByID($id);
            if (!empty($news)) {
                $fileDir = config('constants.NEWS_DOC_PATH') . DIRECTORY_SEPARATOR.$news->image;
                if(File::exists(storage_path('app'.DIRECTORY_SEPARATOR.$fileDir))){
                    File::delete(storage_path('app'.DIRECTORY_SEPARATOR.$fileDir));
                }
                $news->delete();
                toastr()->success('News deleted successfully..!');
                return redirect()->route('news-list.index');
            } else {
                toastr()->error('News not Found.!');
            }
        } catch (\Exception $e) {
            toastr()->error($e->getMessage());
            return redirect()->back();
        }
    }

 public function changeStatus($id)
    {
        try {
            $news = resolve('news-repo')->changeStatus($id);
            toastr()->success('Status changed successfully..!');
            return redirect()->route('news-list.index');
        } catch (\Exception $e) {
            toastr()->error($e->getMessage());
            return redirect()->back();
        }
    }

    public function getParamsForFilter(Request $request)
    {
        $previousUrl = parse_url(url()->previous());
        $params = [];
        if (request()->routeIs('news-list.index') || !isset($previousUrl['query'])) {
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
