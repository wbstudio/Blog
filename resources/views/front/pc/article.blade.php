@extends('front.pc.include.layout')
@section('title', 'articleページ')
@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!--変更--><link rel="stylesheet" href="{{ asset('css/front/pc/top.css') }}"><!--変更-->
@endsection

@section('content')
<div class="container">
    <div id="top_page" class="">
    <section id="blogger">
    <h2>Blogger</h2>
    <div class="blogger_odd">
        <img src="{{ asset('images/front/top_link/face_test.png') }}" class="">
        <div class="blogger_name">名前テスト</div>
        <div class="blogger_explain">
        <div class="blogger_explain_title">plofile</div>
            <p class="blogger_explain_detail">
                テストテキストテストテキストテストテキストテストテキストテストテキストテストテキテキストテストテキストテストスト<br>
                テストテキストテストテキストテストテキストテストテキストテストテキストテストテキテキストテストテキストテストスト<br>
                テストテキストテストテキストテストテキストテストテキスト
            </p>
            <div class="blogger_explain_title">plofile</div>
            <p class="blogger_explain_detail">
                テストテキストテストテキストテストテキストテストテキストテストテキストテストテキストテストテキストテストテキスト<br>
                テストテキストテストテキストテストテキストテストテキストテストテキストテストテキストテストテキストテストテキスト<br>
                テストテキストテストテキストテストテキストテストテキスト
            </p>
        </div>
        <div class="to_blogger_category"><a href="{{ route('list.onlyAuther', ['auther_id' => 0]) }}">名前テストのカテゴリー一覧へ</a></div>
    </div>

    </section>

    <section id="category">
    <h2>Category</h2>
    </section>

    <section id="how_to">
    <h2>How to use</h2>
    </section>

    <section id="inquiry">
    <h2>問い合わせ</h2>
    </section>

</div>
</div>
@endsection