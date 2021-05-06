@extends('front.sp.include.layout')
@section('title', 'topページ')
@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{ asset('css/front/sp/list.css') }}">
<link rel="stylesheet" href="{{ asset('css/front/sp/fixedpages.css') }}">
@endsection

@section('content')
<div class="container">
<div id="thisblogis_page" class="">
<section id="thisblogis_area">
thisblogis
</section>
</div>
</div>
@endsection