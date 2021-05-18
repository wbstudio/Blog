@extends('front.pc.include.layout')
@section('title', 'topページ')
@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="{{ asset('css/front/pc/fixedpages.css') }}">
@endsection

@section('content')
<div class="container">
<div id="fixed_page">
<section id="how_to_use">
<h2 class="ja">{{ config('siteconfig.SITE_NAME') }}の使い方</h2>

<div>
{{ config('siteconfig.SITE_NAME') }}の使い方を少し説明します。

説明は以下の3つです。
<ul class="outline_list">
<li>blogの記事の選択の仕方</li>
<li>お問い合わせの仕方</li>
<li>SNSについて</li>
</ul>
<span class="small_caution">（※これ以外の分からない点に関してはお気軽にお問い合わせからお知らせください）</span>

<div class="block_mass">
    <h4>blogの記事の選択の仕方</h4>
    3つの方法があります。
    <ul class="inline_list">
        <li>各ページにあるpick upから選択</li>
        <li>Bloggerから選択</li>
        <li>Categoryから選択</li>
        <li>キーワード検索</li>
        <li>Tagから選択</li>
    </ul>
    <div class="inner_block_mass">
        <h5>1.各ページにあるpick upから選択</h5>
        <p>
            以下の図のように「pick up」のエリアにお勧め記事を並べてあります。
        </p>
        <div>Image（Topの）pick up画像</div>
    </div>
    <div class="inner_block_mass">
        <h5>2.Bloggerから選択</h5>
    </div>
    <div class="inner_block_mass">
        <h5>3.Categoryから選択</h5>
    </div>
    <div class="inner_block_mass">
        <h5>4.キーワード検索</h5>
    </div>
    <div class="inner_block_mass">
        <h5>5.Tagから選択</h5>
    </div>

</div>
<div id="contact" class="block_mass">
<h4>お問い合わせの仕方</h4>
お問い合わせ

ログインが必要です。


ログイン後「お問い合わせ」を選択。

1.登録しているアドレス以外に返信を受け取りたい場合は、
アドレスを変更してください。

2.誰宛への問い合わせか選択してください。
（※単純な質問や運営への問い合わせの場合は「wb-studio」というのを選択してください。）

3.コメントを記入し送信ボタンを押してください。



どんな些細なことでもお便りお寄せください。
どんな質問、問い合わせにも必ず答えていきます。

応援メッセージとかもお待ちしています。

</div>
<div class="block_mass">
    <h4>SNSについて</h4>
    <ul class="inline_list">
        <li>記事についてのSNSについて</li>
        <li>blogger個人のSNSについて</li>
        <li>wb-studio公式SNSについて</li>
    </ul>
</div>
</div>


</section>
</div>
</div>
@endsection