@extends('front.pc.include.layout')
@section('title', 'topページ')
@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!--変更--><link rel="stylesheet" href="{{ asset('css/front/pc/top.css') }}"><!--変更-->
@endsection

@section('content')
<div class="container">
<div id="category" class="">
    <section id="category">
    <h2>Category</h2>
    </section>

    <section id="how_to">
    <h2>How to use</h2>
    </section>

    <section id="inquiry">
    <h2>問い合わせ</h2>
    </section>
</div>
</div>
@endsection