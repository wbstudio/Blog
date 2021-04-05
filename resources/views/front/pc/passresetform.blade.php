@extends('front.pc.include.layout')
@section('title', 'topページ')
@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="{{ asset('css/front/pc/member.css') }}">
@endsection

@section('content')
<div class="container">
<div id="">
<section>
<h2>reset password</h2>
<form class="pass_rest_form" method="POST" action="{{ route('password-forget.resetEdit') }}">
    @csrf
    <div>
        新しいパスワードを入力してください。
    </div>
    <table>
        <tr>
            <td class="title">新しいパスワード</td>
            <td class="input_area"><input type="password" name="newpassword" class="reset_pass"></td>
        </tr>
        <tr>
            <td class="title">新しいパスワード<br>(確認)</td>
            <td class="input_area"><input type="password" name="newpassword_confirmation" class="reset_pass"></td>
        </tr>
    </table>
    <button type="submit" value="submit" class="reset_pass_button">send</button>
    <div>
    @if ($errors->has('new_password'))
    <p class="error-message">{{ $errors->first('new_password') }}</p>
    @endif
    </div>
    <input type="hidden" name="user_id" value="{{$user_id}}">
</form>
</section>
</div>
</div>
@endsection