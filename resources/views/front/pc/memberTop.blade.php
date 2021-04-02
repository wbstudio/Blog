
@extends('front.pc.include.layout')
@section('title', 'topページ')
@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<link rel="stylesheet" href="{{ asset('css/front/pc/member.css') }}">
@endsection

@section('content')
<div class="container">
<div id="member_top">
<h2 class="ja">会員Top</h2>
<section id="link_area">
    <div class="link_area_iunner">
        <div class="link_mass">
            <a href="{{ route('topPage')}}">
                <div>
                    <div class="link_up">Top</div>
                    <div class="link_down">トップページへ</div>
                </div>
            </a>
        </div>
        <div class="link_mass">
            <a href="{{ route('inquiry.showForm') }}">
                <div>
                    <div class="link_up">Contact</div>
                    <div class="link_down">問い合わせ</div>
                </div>
            </a>
        </div>
        <div class="link_mass">
            <a href="{{ route('member.settingShowFrom') }}">
                <div>
                    <div class="link_up">Setting</div>
                    <div class="link_down">会員情報編集</div>
                </div>
            </a>
        </div>
    </div>
</section>
<section>
<form method="POST" action="{{ route('logout') }}" class="logout_button">
    @csrf
    <x-jet-dropdown-link href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
        {{ __('Logout') }}
    </x-jet-dropdown-link>
</form>
</section>
</div>
</div>
@endsection