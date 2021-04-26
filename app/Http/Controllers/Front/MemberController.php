<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use \App\Models\Front\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\PasswordResetMail;
use \App\Http\Controllers\Front\Avail;
use DateTime;


class MemberController extends Controller
{
    //
    public function index() {
        $userInfo = Auth::user();
        //layout+pickup
        $layoutData = AvailController::fillInLayout(NULL,NULL);
        $threeDaysAgo = new DateTime();
        $threeDaysAgo->modify('-3 days');//1日後
        
        $dispData = [
            'userInfo' => $userInfo,
            'pickupList' => $layoutData ->pickup,
            'newsList' => $layoutData ->news,
            'newArticlesList' => $layoutData ->newArticles,
            'rankingList' => $layoutData ->ranking,
            'threeDaysAgo' => $threeDaysAgo,
        ];
        
        return view('front.'.USER_AGENT.'.memberTop',$dispData);
    }

    public function settingShowFrom() {
        $userInfo = Auth::user();
        //layout+pickup
        $layoutData = AvailController::fillInLayout(NULL,NULL);
        $threeDaysAgo = new DateTime();
        $threeDaysAgo->modify('-3 days');//1日後
        $dispData = [
            'userInfo' => $userInfo,
            'pickupList' => $layoutData ->pickup,
            'newsList' => $layoutData ->news,
            'newArticlesList' => $layoutData ->newArticles,
            'rankingList' => $layoutData ->ranking,
            'threeDaysAgo' => $threeDaysAgo,
        ];
        
        return view('front.'.USER_AGENT.'.memberSetting',$dispData);
    }

    public function settingUpdate(Request $request) {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        $userInfo = Auth::user();
        //layout+pickup
        $layoutData = AvailController::fillInLayout(NULL,NULL);
        $threeDaysAgo = new DateTime();
        $threeDaysAgo->modify('-3 days');//1日後
        $dispData = [
            'userInfo' => $userInfo,
            'pickupList' => $layoutData ->pickup,
            'newsList' => $layoutData ->news,
            'newArticlesList' => $layoutData ->newArticles,
            'rankingList' => $layoutData ->ranking,
            'threeDaysAgo' => $threeDaysAgo,
        ];

        if(isset($request["action"]) && $request["action"] == "text_area"){

                // 一致したときの処理
                $request->validate([
                    'name' => ['required'],
                    'email' => ['required', 'email'],
                ]);

                $user = new User();
                $user = User::where("id",$userInfo->id)->first();
                $user->name = $request->input('name');
                $user->email = $request->input('email');
                $user->save();

                return redirect()->route('member.settingShowFrom');
        
        }else{

            if (Hash::check($request["password"], $userInfo["password"])) {

                // 一致したときの処理
                $request->validate([
                    'newpassword' => ['required', 'string', 'min:8', 'confirmed'],
                ]);

                $user = new User();
                $user = User::where("id",$userInfo->id)->first();
                $user->password = Hash::make($request->input('newpassword'));
                $user->save();

                return redirect()->route('member.settingShowFrom');
            } else {
                // 一致しなかったときの処理
                return back()->with(['passWrongFlag' => 1]);
            }
        }
        
    }

    //pass忘れ-フォーム
    public function passwordForgetShowform() {
        $dispData = [];
        
        //layout+pickup
        $layoutData = AvailController::fillInLayout(NULL,NULL);
        $threeDaysAgo = new DateTime();
        $threeDaysAgo->modify('-3 days');//1日後

        $dispData = [
            'pickupList' => $layoutData ->pickup,
            'newsList' => $layoutData ->news,
            'newArticlesList' => $layoutData ->newArticles,
            'rankingList' => $layoutData ->ranking,
            'threeDaysAgo' => $threeDaysAgo,
        ];

        return view('front.'.USER_AGENT.'.passforgetform',$dispData);
    }


    //pass忘れ-URLメール送信,
    public function passwordForgetMailSend(Request $request) {

        $request->validate([
            'email' => 'required|email',
        ]);

        //layout+pickup
        $layoutData = AvailController::fillInLayout(NULL,NULL);
        $threeDaysAgo = new DateTime();
        $threeDaysAgo->modify('-3 days');//1日後
        //DAO
        $mdUser = new User();
        $flag = $mdUser->getUserInfo($request["email"]);

        $hashEmail = Hash::make($flag['email']);

        $sendArray["link"] = url('/',["password-reset",rand(10000, 99999),$flag["id"],rand(10000, 99999)]);

        Mail::to($request["email"])
        ->send(new PasswordResetMail($sendArray));

        $dispData = [
            'pickupList' => $layoutData ->pickup,
            'newsList' => $layoutData ->news,
            'newArticlesList' => $layoutData ->newArticles,
            'rankingList' => $layoutData ->ranking,
            'threeDaysAgo' => $threeDaysAgo,
        ];
        
        return view('front.'.USER_AGENT.'.passforgetthanks',$dispData);
    }


    //pass忘れ-フォーム
    public function passwordResetShowform($rand_number_01,$user_id,$rand_number_02) {

        //layout+pickup
        $layoutData = AvailController::fillInLayout(NULL,NULL);
        $threeDaysAgo = new DateTime();
        $threeDaysAgo->modify('-3 days');//1日後

        $dispData = [
            'user_id' => $user_id,
            'pickupList' => $layoutData ->pickup,
            'newsList' => $layoutData ->news,
            'newArticlesList' => $layoutData ->newArticles,
            'rankingList' => $layoutData ->ranking,
            'threeDaysAgo' => $threeDaysAgo,
        ];
        
        return view('front.'.USER_AGENT.'.passresetform',$dispData);
    }

    //pass忘れ-フォーム
    public function passwordResetEdit(Request $request) {

        $request->validate([
            'newpassword' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $dispData = [];

        //layout+pickup
        $layoutData = AvailController::fillInLayout(NULL,NULL);
        $threeDaysAgo = new DateTime();
        $threeDaysAgo->modify('-3 days');//1日後

        $user = new User();
        $user = User::where("id",$request->input('user_id'))->first();
        $user->password = Hash::make($request->input('newpassword'));
        $user->save();

        $dispData = [
            'pickupList' => $layoutData ->pickup,
            'newsList' => $layoutData ->news,
            'newArticlesList' => $layoutData ->newArticles,
            'rankingList' => $layoutData ->ranking,
            'threeDaysAgo' => $threeDaysAgo,
        ];

        
        return view('front.'.USER_AGENT.'.passresetthanks',$dispData);
    }

}
