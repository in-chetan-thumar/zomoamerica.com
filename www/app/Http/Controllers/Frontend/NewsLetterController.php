<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\EmailNewsLetter;

class NewsLetterController extends Controller
{
    //
    public function create(Request $request)
    {
        if($request->actionType === "newsletter_unsubscribe")
        {
            $data['status'] = "unsubscribe";
            $data['success_message'] = "Welcome to zomo america";
            return response()->json($data);
        }else{
          $params['email'] = $request->email;
            resolve('newsLetter-repo')->create($params);
            $data['success_message'] = "You have successfully applied to our news letter";
            return response()->json($data);
        }
    }
    public function store(Request $request)
    {
        $params['email'] = $request->email;
        resolve('newsLetter-repo')->create($params);
        // $data['success_message'] = "You have successfully applied to our news letter";
        if(!empty($request->email))
        {
            return redirect()->back()->with('success','You have successfully applied to our news letter');
        }else{
            return redirect()->back()->with('error','Please enter your email id');
        }
    }
}
