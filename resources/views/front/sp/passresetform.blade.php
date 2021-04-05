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
<h2 class="isset_form long_str">reset password from</h2>
<form class="pass_rest_form member_form" method="POST" action="{{ route('password-forget.resetEdit') }}">
    @csrf
    <div class="input_area">
        <div class="title">新しいパスワード</div>
        <div class="form"><input type="password" name="newpassword" class="reset_pass"></div>
    </div>
    <div class="input_area">
        <div class="title">確認(新しいパスワード)</div>
        <div class="form"><input type="password" name="newpassword_confirmation" class="reset_pass"></div>
    </div>
    <div class="without_text_sum">
        <div class="button">
            <button type="submit" id="login_submit">
                <span>password Change</span>
                <img src="{{ asset('images/front/icon_key.svg') }}">
            </button>
        </div>
    </div>
    <input type="hidden" name="user_id" value="{{$user_id}}">
</form>

</section>
</div>
</div>
@endsection