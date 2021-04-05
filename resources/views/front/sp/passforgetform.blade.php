@extends('front.sp.include.layout')
@section('title', 'topページ')
@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{ asset('css/front/sp/member.css') }}">
@endsection

@section('content')
<div class="container">
<div id="" class="">
<section>
<h2 class="isset_form long_str">パスワード再送フォーム</h2>
<div class="common_message">
    登録したアドレスを入力してください。
</div>
<form class="pass_forget_form member_form" method="POST" action="{{ route('password-forget.mailSend') }}">
    @csrf
    <div class="input_area">
        <div class="title">アドレス</div>
        <div class="form"><input type="text" name="email"></div>
    </div>
    <div class="without_text_sum">
        <div class="button">
            <button type="submit" id="login_submit" value="submit" >
                <span>Send</span>
                <img src="{{ asset('images/front/icon_letter.svg') }}">
            </button>
        </div>
    </div>

</form>
</section>
</div>
</div>
@endsection