<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use \App\Models\Front\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\PasswordResetMail;


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

    //pass忘れ-フォーム
    public function passwordForgetShowform() {
        $dispData = [];
        
        return view('front.'.USER_AGENT.'.passforgetform',$dispData);
    }


    //pass忘れ-URLメール送信,
    public function passwordForgetMailSend(Request $request) {

        $request->validate([
            'email' => 'required|email',
        ]);

        //DAO
        $mdUser = new User();
        $flag = $mdUser->getUserInfo($request["email"]);

        $hashEmail = Hash::make($flag['email']);

        $sendArray["link"] = url('/',["password-reset",rand(10000, 99999),$flag["id"],rand(10000, 99999)]);

        Mail::to($request["email"])
        ->send(new PasswordResetMail($sendArray));

        $dispData = [
        ];
        
        return view('front.'.USER_AGENT.'.passforgetthanks',$dispData);
    }


    //pass忘れ-フォーム
    public function passwordResetShowform($rand_number_01,$user_id,$rand_number_02) {
        $dispData = [
            'user_id' => $user_id,
        ];
        
        return view('front.'.USER_AGENT.'.passresetform',$dispData);
    }

    //pass忘れ-フォーム
    public function passwordResetEdit(Request $request) {

        $request->validate([
            'newpassword' => 'required', 'string', 'min:8', 'confirmed',
        ]);

        $dispData = [];

        $user = new User();
        $user = User::where("id",$request->input('user_id'))->first();
        $user->password = Hash::make($request->input('newpassword'));
        $user->save();
        
        return view('front.'.USER_AGENT.'.passresetthanks',$dispData);
    }

}
