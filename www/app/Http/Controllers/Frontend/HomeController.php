<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Contact;
use App\Http\Requests\HomeRequest;
use App\Http\Requests\wholesale;
use App\Models\ContactDetail;
use App\Models\wholesaleDetail;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Models\Flavor;
use App\Models\MetaTag;

class HomeController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $content = MetaTag::select('id', 'meta_title', 'meta_keyword', 'meta_description')->where('meta_route',(Route::currentRouteName())) ->first();
        SEOTools::setTitle($content->title);
        SEOTools::setDescription($content->meta_description);
        SEOMeta::addKeyword($content->meta_keywords);
        $flavors = resolve('flavor-repo')->getDistinctData();
        $stateArray  = array('Alabama' => 'Alabama','Alaska' => 'Alaska','Arizona' => 'Arizona','Arkansas' => 'Arkansas','California' => 'California','Colorado' => 'Colorado','Connecticut' => 'Connecticut','Delaware' => 'Delaware','District of Columbia' => 'District of Columbia','Florida' => 'Florida','Georgia' =>'Georgia','Hawaii' => 'Hawaii','Idaho' =>'Idaho','Illinois' =>'Illinois','Indiana'=>'Indiana','Iowa'=>'Iowa','Kansas'=>'Kansas','Kentucky' =>'Kentucky','Louisiana'=>'Louisiana','Maine'=>'Maine','Maryland'=>'Maryland','Massachusetts'=>'Massachusetts','Michigan'=>'Michigan','Minnesota'=>'Minnesota','Mississippi'=>'Mississippi','Missouri'=>'Missouri','Montana'=>'Montana','Nebraska'=>'Nebraska','Nevada'=>'Nevada','New Hampshire'=>'New Hampshire','New Jersey' =>'New Jersey','New Mexico'=>'New Mexico','New York'=>'New York','North Carolina'=>'North Carolina','North Dakota'=>'North Dakota','Ohio'=>'Ohio','Oklahoma'=>'Oklahoma','Oregon'=>'Oregon','Pennsylvania'=>'Pennsylvania','Puerto Rico'=>'Puerto Rico','Rhode Island'=>'Rhode Island','South Carolina'=>'South Carolina','South Dakota'=>'South Dakota','Tennessee'=>'Tennessee','Texas'=>'Texas','Utah'=>'Utah','Vermont'=>'Vermont','Virginia'=>'Virginia','Washington'=>'Washington','West Virginia'=>'West Virginia','Wisconsin'=>'Wisconsin','Wyoming'=>'Wyoming');
        foreach($flavors as $val) {
            $flavor[] = resolve('flavor-repo')->getDataByCategoryId($val->category_id);
        }
        $model = new Flavor();
        $news = resolve('news-repo')->getNewsDetail($this->getParamsForFilter($request));
        // dd($news);
        return view('frontend.home',compact('news','flavor','model','content','stateArray'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(EnquireRequest $request)
    {
        try {
        $params=[];
        if($request->bottomform == 2)
        {
            $params['name'] = $request->name1;
            $params['address'] = $request->address1;
            $params['number'] = $request->number1;
            $params['massage'] = $request->message1;
        }else{
            $params['name'] = $request->name;
            $params['address'] = $request->address;
            $params['number'] = $request->number;
            $params['massage'] = $request->message;
        }
        $enquire = Enquire::create($params);
        if(!empty($enquire)){
                $params = [];

                $params['enquire_details'] = view('email.SendMail', compact('enquire'))->render();
                Mail::send(new \App\Mail\EnquireMailNotification($params));
                toastr()->success('Your enquire has been submitted successfully!');
                return redirect()->route('thank.you');
        } else {
                toastr()->error('Oops! Something went wrong!');
        }

        } catch (\Exception $e) {
            toastr()->error($e->getMessage());
            return redirect()->back();
        }
        //return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getParamsForFilter(Request $request)
    {
        $previousUrl = parse_url(url()->previous());
        $params = [];

        if (request()->routeIs('frontend.home') || !isset($previousUrl['query'])) {
            $params['query_str'] = $request->query_str ?? '';
            $params['page'] =  $request->page ?? 0;
            $params['is_active'] = 'Y';
            $params['path'] =  \Illuminate\Support\Facades\Request::fullUrl();
        } else {
            parse_str($previousUrl['query'], $params);
            $params['path'] =  url()->previous();
        }
        return $params;
    }

    public function thankYou(){
        return view('frontend.thank_you');
    }


    // product page
    public function product() {
        return view('frontend.product');
    }
    // contact page
    public function contact() {
        $content = MetaTag::select('id', 'meta_title', 'meta_keyword', 'meta_description')->where('meta_route',(Route::currentRouteName())) ->first();
        SEOTools::setTitle($content->title);
        SEOTools::setDescription($content->meta_description);
        SEOMeta::addKeyword($content->meta_keywords);
        return view('frontend.contact',compact('content'));
    }
    // faqs  page
    public function faqs() {
        return view('frontend.faqs');
    }

    // series page
    public function series() {
        $content = MetaTag::select('id', 'meta_title', 'meta_keyword', 'meta_description')->where('meta_route',(Route::currentRouteName())) ->first();
        SEOTools::setTitle($content->title);
        SEOTools::setDescription($content->meta_description);
        SEOMeta::addKeyword($content->meta_keywords);

        return view('frontend.videoSeries',compact('content'));
    }

    public function wholesalers () {
         $content = MetaTag::select('id', 'meta_title', 'meta_keyword', 'meta_description')->where('meta_route',(Route::currentRouteName()))->first();
        SEOTools::setTitle($content->meta_title);
        SEOTools::setDescription($content->meta_description);
        SEOMeta::addKeyword($content->meta_keywords);
        return view('frontend.wholesalers',compact('content'));
    }

    public function quality() {
        $content = MetaTag::select('id', 'meta_title', 'meta_keyword', 'meta_description')->where('meta_route',(Route::currentRouteName())) ->first();
        SEOTools::setTitle($content->title);
        SEOTools::setDescription($content->meta_description);
        SEOMeta::addKeyword($content->meta_keywords);

        return view('frontend.quality',compact("content"));

    }
    // wholesale page
    public function wholesale() {
        $content = MetaTag::select('id', 'meta_title', 'meta_keyword', 'meta_description')->where('meta_route',(Route::currentRouteName())) ->first();
        SEOTools::setTitle($content->title);
        SEOTools::setDescription($content->meta_description);
        SEOMeta::addKeyword($content->meta_keywords);

        $stateArray  = array('Alabama' => 'Alabama','Alaska' => 'Alaska','Arizona' => 'Arizona','Arkansas' => 'Arkansas','California' => 'California','Colorado' => 'Colorado','Connecticut' => 'Connecticut','Delaware' => 'Delaware','District of Columbia' => 'District of Columbia','Florida' => 'Florida','Georgia' =>'Georgia','Hawaii' => 'Hawaii','Idaho' =>'Idaho','Illinois' =>'Illinois','Indiana'=>'Indiana','Iowa'=>'Iowa','Kansas'=>'Kansas','Kentucky' =>'Kentucky','Louisiana'=>'Louisiana','Maine'=>'Maine','Maryland'=>'Maryland','Massachusetts'=>'Massachusetts','Michigan'=>'Michigan','Minnesota'=>'Minnesota','Mississippi'=>'Mississippi','Missouri'=>'Missouri','Montana'=>'Montana','Nebraska'=>'Nebraska','Nevada'=>'Nevada','New Hampshire'=>'New Hampshire','New Jersey' =>'New Jersey','New Mexico'=>'New Mexico','New York'=>'New York','North Carolina'=>'North Carolina','North Dakota'=>'North Dakota','Ohio'=>'Ohio','Oklahoma'=>'Oklahoma','Oregon'=>'Oregon','Pennsylvania'=>'Pennsylvania','Puerto Rico'=>'Puerto Rico','Rhode Island'=>'Rhode Island','South Carolina'=>'South Carolina','South Dakota'=>'South Dakota','Tennessee'=>'Tennessee','Texas'=>'Texas','Utah'=>'Utah','Vermont'=>'Vermont','Virginia'=>'Virginia','Washington'=>'Washington','West Virginia'=>'West Virginia','Wisconsin'=>'Wisconsin','Wyoming'=>'Wyoming');
        return view('frontend.wholesale',compact('stateArray','content'));
    }
   

    //AUTHORIZED STATE DISTRIBUTOR 
    public function authorizeStateDistributor(HomeRequest $request){
       
        try{
                 // Send Mail 
               $params['first_name'] = $request->fname;
               $params['last_name'] = $request->lname;
               $params['telephone'] = $request->number;
               $params['email'] = $request->email;
               $params['state'] = $request->state;
               $params['city'] = $request->city;
                Mail::send(new \App\Mail\AutorizeDistributorNotification($params));

                 $params = [];
                 toastr()->success('Your enquery has been submitted successfully!');
                 return redirect()->back();
            
         }catch(\Exception $e){
        toastr()->error($e->getMessage());
        return redirect()->back();
       }

    }

     // Wholesale store
    public function storeWholesale(Wholesale $request)
    {
        try{
                $request['buisness_name'] = $request->bname;
                $request['first_name'] = $request->fname;
                $request['last_name'] = $request->lname;
                $request['telephone'] = $request->number;
                $enquire = wholesaleDetail::create($request->all());
                if(!empty($enquire))
                {
                    $params['enquire_details'] = view('email.SendMail', compact('enquire'))->render();
                    $params['email']  = $enquire->email;
                    $params[]  = $enquire;
                    // $params['email'] = $enquire->email;
                    Mail::send(new \App\Mail\wholesaleDetailMail($params));
                    toastr()->success('Wholesale Detail has been submitted successfully!');
                    return redirect()->back();
                }else{
                    toastr()->error('Oops! Something went wrong!');

                }
        }catch(\Exception $e){
            toastr()->error($e->getMessage());
            return redirect()->back();
        }
    }
    public function aboutus()
    {
        $content = MetaTag::select('id', 'meta_title', 'meta_keyword', 'meta_description')->where('meta_route',(Route::currentRouteName())) ->first();
        SEOTools::setTitle($content->title);
        SEOTools::setDescription($content->meta_description);
        SEOMeta::addKeyword($content->meta_keywords);

        return view('frontend.aboutus',compact('content'));
    }

    // store contact
    public function storeContact(Contact $request)
    {
        try{

                $enquire = ContactDetail::create($request->all());
                if(!empty($enquire))
                {
                    $params['enquire_details'] = view('email.SendMail', compact('enquire'))->render();
                    $params['email']  = $enquire->email;
                    $params[]  = $enquire;
                    // $params['email'] = $enquire->email;
                    Mail::send(new \App\Mail\ContactDetailNotification($params));

                     $params = [];
                     toastr()->success('Your contact has been submitted successfully!');
                     return redirect()->back();
                }else{
                    toastr()->error('Oops! Something went wrong!');

                }
        }catch(\Exception $e){
            toastr()->error($e->getMessage());
            return redirect()->back();
        }
    }


    // store wholesale detail

}
