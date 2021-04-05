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
<h2 class="isset_form long_str">forget password</h2>
<div>
    さっきのアドレスにリセットリンクを送りました。
</div>
</section>
</div>
</div>
@endsection