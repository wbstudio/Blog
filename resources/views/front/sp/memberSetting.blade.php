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
<h2 class="member_page">会員情報編集</h2>
<form class="member_form" method="POST" action="{{ route('member.settingUpdate') }}" class="">
    @csrf
    <div class="input_area">
        <div class="title">なまえ</div>
        <div class="form"><input type="text" name="name" value="{{$userInfo->name}}"></div>
    </div>
    <div class="input_area">
        <div class="title">アドレス</div>
        <div class="form"><input type="email" name="email" value="{{$userInfo->email}}"></div>
    </div>
    <div class="without_text_sum">
        <div class="button">
            <button type="submit" name="action" value="password_area" class="edit_button">
                <span>Send</span>
                <img src="{{ asset('images/front/icon_write_note.svg') }}">
           </button>
        </div>
    </div>
    <div class="input_area">
        <div class="title">今のパスワード</div>
        <div class="form"><input type="password" name="password"></div>
    </div>
    <div class="input_area">
        <div class="title">新しいパスワード</div>
        <div class="form"><input type="password" name="newpassword"></div>
    </div>
    <div class="input_area">
        <div class="title">新しいパスワード(確認)</div>
        <div class="form"><input type="password" name="newpassword_confirmation"></div>
    </div>
    <div class="without_text_sum">
        <div class="button">
            <button type="submit" name="action" value="password_area" class="edit_button">
                <span>password Change</span>
                <img src="{{ asset('images/front/icon_key.svg') }}">
            </button>
        </div>
    </div>
</form>
</section>
</div>
</div>
@endsection