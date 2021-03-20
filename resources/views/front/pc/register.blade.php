@extends('front.pc.include.layout')
@section('title', 'topページ')
@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<link rel="stylesheet" href="{{ asset('css/front/pc/auth.css') }}">
@endsection

@section('content')
<div class="container">
<div id="login">
<section>
<h2 class="ja">会員登録</h2>
<form method="POST" action="{{ route('register') }}">
    @csrf
    <div>
        <table>
            <tr>
                <td class="title"><x-jet-label for="name" value="{{ __('名前') }}" /></td>
                <td class="input_area"><x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" /></td>
            </tr>
            <tr>
            <td class="title"><x-jet-label for="email" value="{{ __('メール') }}" /></td>
            <td class="input_area"><x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required /></td>
            </tr>
            <tr>
            <td class="title"><x-jet-label for="password" value="{{ __('パスワード') }}" /></td>
            <td class="input_area"><x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" /></td>
            </tr>
            <tr>
            <td class="title"><x-jet-label for="password_confirmation" value="{{ __('パスワード<br>確認用') }}" /></td>
            <td class="input_area"><x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" /></td>
            </tr>
        </table>
        <div class="out_form">
            <x-jet-button class="ml-4" id="register_submit">
                {{ __('Register') }}
            </x-jet-button>
            <a id="sign_forget" class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>
        </div>
    </div>
</form>
</section>
</div>
</div>
@endsection