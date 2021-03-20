<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InquiryController extends Controller
{
    //
    public function showFrom() {
        // $dispData = array();
        // return view('front.'.USER_AGENT.'.auther',$dispData);
        $userInfo = Auth::user();
        $dispData = [
            'userInfo' => $userInfo,
        ];
        
        return view('front.'.USER_AGENT.'.inquiryForm',$dispData);

    }

}

