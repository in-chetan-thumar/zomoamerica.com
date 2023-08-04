<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
}
