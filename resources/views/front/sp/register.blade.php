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
<h2 class="isset_form">会員登録</h2>
<form class="register member_form" method="POST" action="{{ route('register') }}">
    @csrf
    <div class="input_area">
        <div class="title">名前</div>
        <div class="form"><input type="text" name="name"></div>
    </div>
    <div class="input_area">
        <div class="title">アドレス</div>
        <div class="form"><input type="email" name="email"></div>
    </div>
    <div class="input_area">
        <div class="title">パスワード</div>
        <div class="form"><input type="password" name="password"></div>
    </div>
    <div class="input_area">
        <div class="title">確認(パスワード)</div>
        <div class="form"><input type="password" name="password_confirmation"></div>
    </div>
    <div class="without_text_sum">
        <div class="button">
            <button type="submit" id="login_submit">
                <span>regist</span>
                <img src="{{ asset('images/front/icon_write_note.svg') }}">
            </button>
        </div>
        <a id="sign_forget" class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
            {{ __('Already registered?') }}
        </a>
    </div>
</form>
</section>
</div>
</div>
@endsection