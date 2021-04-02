
@extends('front.pc.include.layout')
@section('title', 'topページ')
@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<link rel="stylesheet" href="{{ asset('css/front/pc/auth.css') }}">
<link rel="stylesheet" href="{{ asset('css/front/pc/member.css') }}">
@endsection

@section('content')
<div class="container">
<div id="member_top">
<h2 class="ja">会員情報編集</h2>
<section>
<form method="POST" action="{{ route('member.settingUpdate') }}" class="">
    @csrf
    <table>
        <tr class="area_top">
            <td class="title">なまえ</td>
            <td class="input_area"><input type="text" name="name" value="{{$userInfo->name}}"></td>
        </tr>
        <tr>
            <td class="title">あどれす</td>
            <td class="input_area"><input type="text" name="email" value="{{$userInfo->email}}"></td>
        </tr>
        <tr>
            <td colspan="2" class="button">
                <button type="submit" name="action" value="text_area">send</button>
            </td>
        </tr>
        <tr class="area_top">
            <td class="title">ぱすわーど</td>
            <td class="input_area"><input type="password" name="password"></td>
        </tr>
        <tr>
            <td class="title big_title">新しいパスワード</td>
            <td class="input_area"><input type="password" name="new_password"></td>
        </tr>
        <tr>
            <td class="title big_title">確認<br>(新しいパスワード)</td>
            <td class="input_area"><input type="password" name="confirm_new_password"></td>
        </tr>
        <tr>
            <td colspan="2" class="button">
                <button type="submit" name="action" value="password_area">password Change</button>
            </td>
        </tr>
    </table>
</form>
</section>
</div>
</div>
@endsection