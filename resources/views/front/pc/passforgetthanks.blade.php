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
<div>
    さっきのアドレスにリセットリンクを送りました。
</div>
</section>
</div>
</div>
@endsection