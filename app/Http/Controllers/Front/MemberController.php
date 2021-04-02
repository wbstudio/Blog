<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MemberController extends Controller
{
    //
    public function index() {
        $userInfo = Auth::user();
        $dispData = [
            'userInfo' => $userInfo,
        ];
        
        return view('front.'.USER_AGENT.'.memberTop',$dispData);
    }

    public function settingShowFrom() {
        $userInfo = Auth::user();
        $dispData = [
            'userInfo' => $userInfo,
        ];
        
        return view('front.'.USER_AGENT.'.memberSetting',$dispData);
    }

    public function settingUpdate(Request $request) {
        $userInfo = Auth::user();
        $dispData = [
            'userInfo' => $userInfo,
        ];

        if (Hash::check($request["password"], $userInfo["password"])) {
            // 一致したときの処理
            var_dump("一致");
        } else {
            // 一致しなかったときの処理
            var_dump("不一致");
        }
        
        // return view('front.'.USER_AGENT.'.memberSetting',$dispData);
    }

}
