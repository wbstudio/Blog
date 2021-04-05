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
<div>
    新しいパスワードに設定されました。<br>
    <a href="{{ route('login') }}">Log in</a>
    <a href="{{ route('topPage') }}">Top Pageへ</a>
</div>
</section>
</div>
</div>
@endsection