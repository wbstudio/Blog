@extends('front.pc.include.layout')
@section('title', 'topページ')
@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="{{ asset('css/front/pc/fixedpages.css') }}">
@endsection

@section('content')
<div class="container">
<div id="top_page" class="">
<section id="blogger">
<h2 class="ja">~~~~~~の使い方</h2>

<div>
blog-Hの使い方を少し説明します。

説明は以下の3つです。
・blogの記事の選択の仕方
・お問い合わせの仕方
・SNSについて
（※これ以外の点に関してはお気軽にお問い合わせからお知らせください）

また、

*******************************
blogの記事の選択の仕方
*******************************
3つの方法があります。
1.各ページにあるpick upから選択
2.Bloggerから選択
3.Categoryから選択




*******************************
お問い合わせの仕方
*******************************

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

*******************************
SNSについて
*******************************
1.記事についてのSNSについて
2.blogger個人のSNSについて
3.wb-studio公式SNSについて
</div>


</section>
</div>
</div>
@endsection