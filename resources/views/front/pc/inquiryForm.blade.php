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
<form id="inquiry" method="POST" action="{{ route('inquiry.confirm') }}">
    @csrf
    <div>
        <table>
        <tr>
                <td class="title"><label for="email" id="email_label">アドレス</label></td>
                <td class="input_area">
                    <input id="email" type="email" name="email" value="@if(!empty(old('email')) && old('email') == 0) {{ old('email') }} @else {{$userInfo->email}} @endif" required>
                    @if ($errors->has('email'))
                    <p class="error-message">{{ $errors->first('email') }}</p>
                    @endif
                </td>
            </tr>
            <tr>
                <td class="title">誰宛？</td>
                <td class="input_area">
                    <div class="select_auther">
                        <input id="auther_0" type="radio" name="auther" value="0" @if(!empty(old('auther')) && old('auther') == 0) checked @endif><label for="auther_0" class="auther_radio">名前テスト01</label>
                    </div>
                    <div class="select_auther">
                        <input id="auther_1" type="radio" name="auther" value="1" @if(!empty(old('auther')) && old('auther') == 1) checked @endif><label for="auther_1" class="auther_radio">名前テスト01</label>
                    </div>
                    <div class="select_auther">
                        <input id="auther_2" type="radio" name="auther" value="2" @if(!empty(old('auther')) && old('auther') == 2) checked @endif><label for="auther_2" class="auther_radio">名前テスト02</label>
                    </div>
                    <div class="select_auther">
                        <input id="auther_3" type="radio" name="auther" value="3" @if(!empty(old('auther')) && old('auther') == 3) checked @endif><label for="auther_3" class="auther_radio">名前テスト03</label>
                    </div>
                    <div class="select_auther">
                        <input id="auther_4" type="radio" name="auther" value="4" @if(!empty(old('auther')) && old('auther') == 4) checked @endif><label for="auther_4" class="auther_radio">名前テスト04</label>
                    </div>
                    @if ($errors->has('auther'))
                    <p class="error-message">だれあてに質問したいですか？</p>
                    @endif
                </td>
            </tr>
            <tr>
                <td class="title"><label for="" id="message_label">内容</label></td>
                <td class="input_area">
                    @if ($errors->has('message'))
                    <p class="error-message">おといあわせないようがないよう...</p>
                    @endif
                    <textarea id=""  name="message">{{ old('message') }}</textarea>
                </td>
            </tr>
        </table>
    </div>
    <input type="hidden" name="member_id" value="{{ $userInfo->id }}">
    <div class="block mt-4 out_form">
        <x-jet-button id="inquiry_submit" class="ml-4">
            {{ __('確認画面へ') }}
        </x-jet-button>
    </div>
</form>
</section>
</div>
</div>
@endsection