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
<h2 class="isset_form">Contact</h2>
<form class="inquiry member_form" method="POST" action="{{ route('inquiry.confirm') }}">
    @csrf
    <div class="input_area">
        <div class="title">アドレス</div>
        <div class="form"><input id="email" type="email" name="email" value="@if(!empty(old('email')) && old('email') == 0) {{ old('email') }} @else {{$userInfo->email}} @endif" required></div>
    </div>
    <div class="input_area">
        <div class="title">だれあて？</div>
        <div class="form">
            <div class="select_auther">
                <input id="auther_0" type="radio" name="auther" value="0" @if(!empty(old('auther')) && old('auther') == 0) checked @endif><label for="auther_0" class="auther_radio">名前テスト01</label>
            </div>
            <div class="select_auther">
                <input id="auther_1" type="radio" name="auther" value="1" @if(!empty(old('auther')) && old('auther') == 1) checked @endif><label for="auther_1" class="auther_radio">名前テスト01</label>
            </div>
            <div class="select_auther">
                <input id="auther_2" type="radio" name="auther" value="2" @if(!empty(old('auther')) && old('auther') == 2) checked @endif><label for="auther_2" class="auther_radio">名前テスト02</label>
            </div>
            <div class="select_auther">
                <input id="auther_3" type="radio" name="auther" value="3" @if(!empty(old('auther')) && old('auther') == 3) checked @endif><label for="auther_3" class="auther_radio">名前テスト03</label>
            </div>
            <div class="select_auther">
                <input id="auther_4" type="radio" name="auther" value="4" @if(!empty(old('auther')) && old('auther') == 4) checked @endif><label for="auther_4" class="auther_radio">名前テスト04</label>
            </div>
            @if ($errors->has('auther'))
            <p class="error-message">だれあてに質問したいですか？</p>
            @endif
        </div>
    </div>
    <div class="input_area">
        <div class="title">内容</div>
        <div class="form">
            @if ($errors->has('message'))
            <p class="error-message">おといあわせないようがないよう...</p>
            @endif
            <textarea id=""  name="message">{{ old('message') }}</textarea>
        </div>
    </div>
    <div class="without_text_sum">
        <div class="button">
            <button type="submit" id="login_submit">
                <span>Send</span>
                <img src="{{ asset('images/front/icon_letter.svg') }}">
            </button>
        </div>
    </div>
    <input type="hidden" name="member_id" value="{{ $userInfo->id }}">
</form>
</section>
</div>
</div>
@endsection