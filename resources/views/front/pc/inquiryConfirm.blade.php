@extends('front.pc.include.layout')
@section('title', 'topページ')
@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<link rel="stylesheet" href="{{ asset('css/front/pc/inquiry.css') }}">
@endsection

@section('content')
<div class="container">
<div id="login">
<section>
<h2 class="ja">お問い合わせ</h2>
<form id="inquiry" method="POST" action="{{ route('inquiry.thanks') }}">
    @csrf
    <div>
        <table>
            <tr>
                <td class="title"><label for="email" id="email_label">アドレス</label></td>
                <td class="input_area">
                    {{ $request->email }}
                </td>
            </tr>
            <tr>
                <td class="title">誰宛？</td>
                <td class="input_area">
                テスト名前テスト名前
                </td>
            </tr>
            <tr>
                <td class="title"><label for="" id="message_label">内容</label></td>
                <td class="input_area">
                {!! nl2br(e($request->message)) !!}
                </td>
            </tr>
        </table>
    </div>
    <div class="block mt-4 out_form">
        <p>この内容で送りますか？</p>
        <x-jet-button id="inquiry_submit" type="submit" class="ml-4" name="action" value="submit">
            {{ __('おくる') }}
        </x-jet-button>
        <x-jet-button id="inquiry_back" type="submit" class="ml-4" name="action" value="back">
            {{ __('もどる') }}
        </x-jet-button>
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