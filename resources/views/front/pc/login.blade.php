@extends('front.pc.include.layout')
@section('title', 'topページ')
@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="{{ asset('css/front/pc/auth.css') }}">
@endsection

@section('content')
<div class="container">
<div id="login">
<section>
<h2>Log in</h2>
<form class="login" method="POST" action="{{ route('login') }}">
    @csrf
    <div>
        <table>
            <tr>
                <td class="title"><x-jet-label for="email" value="{{ __('メール') }}" id="email_label"/></td>
                <td class="input_area"><x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus /></td>
            </tr>
            <tr>
                <td class="title"><x-jet-label for="password" value="{{ __('パスワード') }}"  id="password_label"/></td>
                <td class="input_area"><x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" /></td>
            </tr>
        </table>
    </div>
    <div class="block mt-4 out_form">
        <label for="remember_me" class="flex items-center" id="remenber_check">
            <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">
            <span class="ml-2 text-sm text-gray-600">{{ __('入力が面倒だから覚えさせたい') }}</span>
        </label>
        <x-jet-button id="login_submit" class="ml-4">
            {{ __('Login') }}
        </x-jet-button>
        @if (Route::has('password.request'))
            <a id="pass_forget" class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                {{ __('あれれ？パスワードなんだっけ？') }}
            </a>
        @endif
    </div>
</form>
</section>
</div>
</div>
@endsection