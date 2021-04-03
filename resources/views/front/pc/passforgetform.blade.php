@extends('front.pc.include.layout')
@section('title', 'topページ')
@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="{{ asset('css/front/pc/member.css') }}">
@endsection

@section('content')
<div class="container">
<div id="">
<section>
<h2>forget password</h2>
<form class="pass_forget_form" method="POST" action="{{ route('password-forget.mailSend') }}">
    @csrf
    <div>
        登録したアドレスを入力してください。
    </div>
    <input type="text" name="email" class="forget_pass_mail">
    <button type="submit" value="submit" class="forget_pass_button">send</button>
    <div>
    @if ($errors->has('email'))
    <p class="error-message">{{ $errors->first('email') }}</p>
    @endif
    </div>
</form>
</section>
</div>
</div>
@endsection