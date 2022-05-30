@extends('front.sp.include.layout')
@section('title', 'topページ')
@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://cdn.jsdelivr.net/npm/qrcode@latest/build/qrcode.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jsqr@latest/dist/jsQR.min.js"></script>
<!-- <link rel="stylesheet" href="{{ asset('css/front/sp/list.css') }}"> -->
@endsection

@section('content')
<div>
    <video id="video" width="320" height="480" playsinline autoplay muted></video>
    <textarea id="result" readonly></textarea>
    <canvas id="canvas" width="240" height="240"></canvas>
    <textarea id="data" style="visibility: hidden;"></textarea>
</div>
<script src="{{ asset('js/front/sp/ticket.js') }}"></script>
@endsection