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
<h2>reset password</h2>
@csrf
<div>
    新しいパスワードに設定されました。<br>
    <a href="{{ route('login') }}">Log in</a>
    <a href="{{ route('topPage') }}">Top Pageへ</a>
</div>
</section>
</div>
</div>
@endsection