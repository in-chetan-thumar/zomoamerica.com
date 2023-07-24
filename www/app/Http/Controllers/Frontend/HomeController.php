<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Contact;
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


class HomeController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        return view('frontend.home');


        // return view('admin.news.news_list', compact('table'));
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
    public function thankYou(){
        return view('frontend.thank_you');
    }

    public function storeBottom(EnquireBottom $request)
    {
        try {
            $params=[];
            $params['name'] = $request->name1;
            $params['address'] = $request->address1;
            $params['number'] = $request->number1;
            $params['message'] = $request->message1;

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
    // product page 
    public function product() {
        return view('frontend.product');
    } 
    // news page 
    public function news() {
        return view('frontend.news');
    }
    // contact page 
    public function contact() {
        return view('frontend.contact');
    }
    // faqs  page 
    public function faqs() {
        return view('frontend.faqs');
    }
    
    // series page 
    public function series() {
        return view('frontend.videoSeries');
    }

    public function wholesalers () {
        return view('frontend.wholesalers');
    }

    public function quality() {
        return view('frontend.quality');

    }
    // wholesale page 
    public function wholesale() {
        $stateArray  = array('Alabama' => 'Alabama','Alaska' => 'Alaska','Arizona' => 'Arizona','Arkansas' => 'Arkansas','California' => 'California','Colorado' => 'Colorado','Connecticut' => 'Connecticut','Delaware' => 'Delaware','District of Columbia' => 'District of Columbia','Florida' => 'Florida','Georgia' =>'Georgia','Hawaii' => 'Hawaii','Idaho' =>'Idaho','Illinois' =>'Illinois','Indiana'=>'Indiana','Iowa'=>'Iowa','Kansas'=>'Kansas','Kentucky' =>'Kentucky','Louisiana'=>'Louisiana','Maine'=>'Maine','Maryland'=>'Maryland','Massachusetts'=>'Massachusetts','Michigan'=>'Michigan','Minnesota'=>'Minnesota','Mississippi'=>'Mississippi','Missouri'=>'Missouri','Montana'=>'Montana','Nebraska'=>'Nebraska','Nevada'=>'Nevada','New Hampshire'=>'New Hampshire','New Jersey' =>'New Jersey','New Mexico'=>'New Mexico','New York'=>'New York','North Carolina'=>'North Carolina','North Dakota'=>'North Dakota','Ohio'=>'Ohio','Oklahoma'=>'Oklahoma','Oregon'=>'Oregon','Pennsylvania'=>'Pennsylvania','Puerto Rico'=>'Puerto Rico','Rhode Island'=>'Rhode Island','South Carolina'=>'South Carolina','South Dakota'=>'South Dakota','Tennessee'=>'Tennessee','Texas'=>'Texas','Utah'=>'Utah','Vermont'=>'Vermont','Virginia'=>'Virginia','Washington'=>'Washington','West Virginia'=>'West Virginia','Wisconsin'=>'Wisconsin','Wyoming'=>'Wyoming');
        return view('frontend.wholesale',compact('stateArray'));
    }
    // Wholesale store 
    public function storeWholesale(Wholesale $request)
    {
        try{
                $request['buisness_name'] = $request->bname;
                $request['first_name'] = $request->fname;
                $request['last_name'] = $request->lname;
                $enquire = wholesaleDetail::create($request->all());
                if(!empty($enquire))
                {
                    $params['enquire_details'] = view('email.SendMail', compact('enquire'))->render();
                    $params[]  = $enquire;
                    // $params['email'] = $enquire->email;
                    Mail::send(new \App\Mail\wholesaleDetailMail($params));
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
    public function aboutus()
    {
        return view('frontend.aboutus');
    }

    // store contact 
    public function storeContact(Contact $request)
    {
        try{

                $contact = ContactDetail::create($request->all());
                if(!empty($contact))
                {
                     
                    $params = [];
                     toastr()->success('Your contact has been submitted successfully!');
                     return redirect()->back();
                }else{
                    toastr()->error('Oops! Something went wrong!');

                }
        }catch(Exception $e){
            toastr()->error($e->getMessage());
            return redirect()->back();   
        }
    }

    // store wholesale detail

}
