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
<h2 class="isset_form">Log in</h2>
<form class="login member_form" method="POST" action="{{ route('login') }}">
    @csrf
    <div class="input_area">
        <div class="title">アドレス</div>
        <div class="form"><input type="text" name="email"></div>
    </div>
    <div class="input_area">
        <div class="title">パスワード</div>
        <div class="form"><input type="password" name="password"></div>
    </div>
    <div class="remenber_check">
        <label for="remember_me" class="flex items-center" id="remenber_check">
            <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">
            <span class="">{{ __('入力が面倒だから覚えさせたい') }}</span>
        </label>
    </div>
    <div class="without_text_sum">
        <div class="button">
            <button type="submit" id="login_submit">
                <span>Log in</span>
                <img src="{{ asset('images/front/icon_login.svg') }}">
            </button>
        </div>
        @if (Route::has('password.request'))
        <a id="pass_forget" class="" href="{{ route('password-forget.showForm') }}">
            {{ __('あれれ？パスワードなんだっけ？') }}
        </a>
        @endif
    </div>
</form>
</section>
</div>
</div>
@endsection

