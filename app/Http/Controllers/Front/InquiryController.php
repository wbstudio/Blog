<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;
use App\Mail\InquiryUserMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \App\Models\Front\Inquiry;
use \App\Http\Controllers\Front\Avail;
use DateTime;

class InquiryController extends Controller
{
    //
    public function showFrom() {
        // $dispData = array();
        // return view('front.'.USER_AGENT.'.auther',$dispData);

        //layout+pickup
        $layoutData = AvailController::fillInLayout(NULL,NULL);
        $threeDaysAgo = new DateTime();
        $threeDaysAgo->modify('-3 days');//1日後

        $userInfo = Auth::user();
        $dispData = [
            'userInfo' => $userInfo,
            'pickupList' => $layoutData ->pickup,
            'newsList' => $layoutData ->news,
            'newArticlesList' => $layoutData ->newArticles,
            'rankingList' => $layoutData ->ranking,
            'threeDaysAgo' => $threeDaysAgo,
        ];
        
        return view('front.'.USER_AGENT.'.inquiryForm',$dispData);

    }

    //
    public function confirm(Request $request) {
        //バリデーションを実行（結果に問題があれば処理を中断してエラーを返す）
        $request->validate([
            'email' => 'required|email',
            'auther' => 'required',
            'message'  => 'required',
        ]);

        //layout+pickup
        $layoutData = AvailController::fillInLayout(NULL,NULL);
        $threeDaysAgo = new DateTime();
        $threeDaysAgo->modify('-3 days');//1日後

        $dispData = [
            'request' => $request,
            'pickupList' => $layoutData ->pickup,
            'newsList' => $layoutData ->news,
            'newArticlesList' => $layoutData ->newArticles,
            'rankingList' => $layoutData ->ranking,
            'threeDaysAgo' => $threeDaysAgo,
        ];

        return view('front.'.USER_AGENT.'.inquiryConfirm',$dispData);
    }

    //
    public function thanks(Request $request) {
        //バリデーションを実行（結果に問題があれば処理を中断してエラーを返す）
        $request->validate([
            'email' => 'required|email',
            'auther' => 'required',
            'message'  => 'required',
        ]);
        //フォームから受け取ったactionの値を取得
        $action = $request->input('action');
        //フォームから受け取ったactionを除いたinputの値を取得
        $sendArray = $request->except('action');
        //actionの値で分岐
        if($action !== 'submit'){
            return redirect()->route('inquiry.showForm')->withInput($sendArray);

        } else {
            Mail::to($sendArray["email"])
            ->send(new InquiryUserMail($sendArray));
            // //再送信を防ぐためにトークンを再発行
            $Inquiry = new Inquiry();
            $request->session()->regenerateToken();

            //layout+pickup
            $layoutData = AvailController::fillInLayout(NULL,NULL);
            $threeDaysAgo = new DateTime();
            $threeDaysAgo->modify('-3 days');//1日後

            $Inquiry->email = $request->input('email');
            $Inquiry->member_id = $request->input('member_id');
            $Inquiry->comment = $request->input('message');
            $Inquiry->admin_id = $request->input('auther');
            $Inquiry->status = 0;
            $Inquiry->display_status = 0;
            $Inquiry->delete_flag = 0;                
            // #Greetingモデルクラスのsaveメソッドを実行
            $Inquiry->save();

            $dispData = [
                'pickupList' => $layoutData ->pickup,
                'newsList' => $layoutData ->news,
                'newArticlesList' => $layoutData ->newArticles,
                'rankingList' => $layoutData ->ranking,
                'threeDaysAgo' => $threeDaysAgo,
            ];
    

            // //送信完了ページのviewを表示
            // return view('front.'.USER_AGENT.'.inquiryThanks',$dispData);
            return view('front.'.USER_AGENT.'.inquiryThanks',$dispData);
            
        }

    }

}


