<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\EmailNewsLetter;
use Illuminate\Support\Facades\Validator;

class NewsLetterController extends Controller
{
    //
    public function create(Request $request)
    {
        if($request->actionType === "newsletter_unsubscribe")
        {
            $data['status'] = "unsubscribe";
            // $data['success_message'] = "Welcome to zomo america";
            return response()->json($data);
        }else{
            $params['email'] = $request->email;
            resolve('newsLetter-repo')->create($params);

            $data['status'] = "subscribe";
            $data['success_message'] = "You have successfully applied to our news letter";
            return response()->json($data);
        }
    }
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->with('error','Please enter valid  your email id');
        }
        // $data['success_message'] = "You have successfully applied to our news letter";
        if(!empty($request->email))
        {
            $params['email'] = $request->email;
            resolve('newsLetter-repo')->create($params);
            return redirect()->back()->with('success','You have successfully applied to our news letter');
        }else{
            return redirect()->back()->with('error','Please enter your email id');
        }
    }
    public function index(){

    }
}
