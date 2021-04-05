@extends('front.sp.include.layout')
@section('title', 'topページ')
@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{ asset('css/front/sp/member.css') }}">
@endsection

@section('content')
<div class="container">
<div id="" class="member_form">
<section>
<h2 class="isset_form">確認</h2>
<form id="inquiry" method="POST" action="{{ route('inquiry.thanks') }}" class="member_form">
    @csrf
    <div class="form_area">
        <div class="input_area">
            <div class="title">アドレス</div>
            <div class="form">{{ $request->email }}</div>
        </div>
        <div class="input_area">
            <div class="title">誰宛？</div>
            <div class="form">テスト名前テスト名前</div>
        </div>
        <div class="input_area">
            <div class="title">内容</div>
            <div class="form">{!! nl2br(e($request->message)) !!}</div>
        </div>
    </div>
    <div class="without_text_sum">
        <div class="button small">
            <p>この内容で送りますか？</p>
            <button id="inquiry_submit" type="submit" class="ml-4" name="action" value="submit">
                <span>Send</span>
                <img src="{{ asset('images/front/icon_letter.svg') }}">
            </button>
            <button id="inquiry_back" type="submit" class="ml-4" name="action" value="back">
                <span>Back</span>
                <img src="{{ asset('images/front/icon_back.svg') }}">
            </button>
        </div>
    </div>
    <input type="hidden" name="email" value="{{ $request->email }}">
    <input type="hidden" name="auther" value="{{ $request->auther }}">
    <input type="hidden" name="message" value="{{ $request->message }}">
    <input type="hidden" name="member_id" value="{{ $request->member_id }}">
</form>

</section>
</div>
</div>
@endsection