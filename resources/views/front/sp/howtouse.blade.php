@extends('front.sp.include.layout')
@section('title', 'topページ')
@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{ asset('css/front/sp/list.css') }}">
<link rel="stylesheet" href="{{ asset('css/front/sp/fixedpages.css') }}">
@endsection

@section('content')
<div class="container">
<div id="fixed_page" class="">
<section id="howtouse_area">
<h2>How to use</h2>

<div class="block_mass">
    {{ config('siteconfig.SITE_NAME') }}の使い方を少し説明します。

    説明は以下の3つです。
    <ul class="outline_list">
        <li>blogの記事の選択の仕方</li>
        <li>お問い合わせの仕方</li>
        <li>SNSについて</li>
    </ul>
    <span class="small_caution">（※これ以外の分からない点に関しては<br>お気軽にお問い合わせからお知らせください）</span>
</div>
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
        <h5><span>01</span>各ページにあるpick upから選択</h5>
        <p>
            以下の図のように「pick up」のエリアにお勧め記事を並べてあります。<br>
            そのページ内に
            気になる記事をクリックしてみてください。
        </p>
        <div class="contain_img">
            <img src="{{ asset('images/front/help/htu_test_sp_001.png') }}" class="pure_width">
        </div>
    </div>
    <div class="inner_block_mass">
        <h5><span>02</span>Bloggerから選択</h5>
        <div class="help_sep">
            <p>
                ヘッダーメニューもしくはBlogger一覧のエリアからそれぞれのBloggerページに行けます。<br>
                Bloggerの紹介ページには下の図のように、そのBloggerのpick upや各Categoryの新しい記事が表示されています。<br>
                気になる記事をクリックしてみてください。<br>
                また、下の図の矢印部分をクリックすると、そのCategoryの記事一覧へ行けますので、<br>
                そちらの方でも気になる記事をクリックしてみてください。
            </p>
            <div class="contain_img">
                <img src="{{ asset('images/front/help/htu_test_sp_002.png') }}" class="half_width">
            </div>
        </div>
    </div>
    <div class="inner_block_mass">
        <h5><span>03</span>Categoryから選択</h5>
        <div class="help_sep">
            <p>
                ヘッダーメニューもしくはCategory一覧のエリアからそれぞれのCategoryページに行けます。<br>
                Categoryのページには下の図のように、そのCategoryのpick upや各Categoryの新しい記事が表示されています。<br>
                気になる記事をクリックしてみてください。<br>
                また、下の図の矢印部分をクリックすると、そのCategoryの記事一覧へ行けますので、<br>
                そちらの方でも気になる記事をクリックしてみてください。   
            </p>
            <div class="contain_img">
                <img src="{{ asset('images/front/help/htu_test_sp_003.png') }}" class="half_width">
            </div>
        </div>
    </div>
    <div class="inner_block_mass">
        <h5><span>04</span>キーワード検索</h5>
        <p>
            下の図のように検索窓があります。<br>
            その検索窓にキーワードを入力し虫眼鏡アイコンをクリックすると<br>
            そのキーワードを含んでいる記事一覧が表示されます。<br>
            気になる記事をクリックしてみてください。
        </p>
        <div class="contain_img">
            <img src="{{ asset('images/front/help/htu_test_sp_004.png') }}" class="pure_width">
        </div>
    </div>
    <div class="inner_block_mass">
        <h5><span>05</span>Tagから選択</h5>
        <p>
            「記事一覧ページ」もしくは「記事詳細ページ」には、<br>
            下の図のようにそれぞれその記事に付与されているタグが表示されています。
        </p>
        <div class="contain_img">
            <img src="{{ asset('images/front/help/htu_test_sp_005.png') }}" class="pure_width">
        </div>
        <p>
            タグをクリックするとそのタグのついている記事一覧が表示されます。<br>
            気になる記事をクリックしてみてください。
        </p>
    </div>

</div>
<div id="contact" class="block_mass">
<h4>お問い合わせの仕方</h4>
<div class="inner_block_mass">
    <h5><span>01</span>お問い合わせページまで</h5>
    <p class="down_same">
    ※お問い合わせの際はLoginが必要です。<br>
    </p>
    <p class="mar_left up_same">
    会員登録されていない方は、下の図の「新規登録」から会員登録をしてください。<br>
    会員登録をしている方は下の図の「ログイン」を押下後、<br>
    登録している、アドレスとパスワードでログイン後<br>
    「お問い合わせ」を選択してください。
    </p>
    <div class="contain_img">
        <img src="{{ asset('images/front/help/htu_test_sp_006.png') }}" class="pure_width">
    </div>
</div>

<div class="inner_block_mass">
    <h5><span>02</span>お問い合わせの中</h5>
    <div class="help_contact_main">
        <div class="contain_img">
            <img src="{{ asset('images/front/help/htu_test_sp_007.png') }}" class="pure_width">
        </div>
        <ul>
            <li>
                <span class="font_bold">「アドレス欄」について</span><br>
                登録しているアドレスが初期表示されます。<br>
                そのアドレス以外に返信を受け取りたい場合は、アドレスを変更してください。
            </li>
            <li>
                <span class="font_bold">「誰宛？」について</span><br>
                誰宛への問い合わせか選択してください。<br>
                （※単純な質問や運営への問い合わせの場合は「wb-studio」というのを選択してください。）
            </li>
            <li>
                <span class="font_bold">「内容」について</span><br>
                コメントを記入し送信ボタンを押してください。
            </li>
        </ul>
    </div>
</div>
<div class="help_contact_fin">
    <span class="font_bold">どんな些細なことでも</span>お便りお寄せください。<br>
    どんな質問、お問い合わせにも必ず答えていきます。<br>
    応援メッセージとかもお待ちしています。
</div>
</div>
<div class="block_mass">
    <h4>SNSについて</h4>
    <ul class="inline_list">
        <li>記事についてのSNSについて</li>
        <li>blogger個人のSNSについて</li>
        <li>wb-studio公式SNSについて</li>
    </ul>
    <div class="inner_block_mass">
        <h5><span>01</span>記事についてのSNSについて</h5>
        <p>
            各記事ページにshare用のリンクを用意しました。<br>
            拡散等の応援してもらえるととても嬉しいです。<br>
            よろしくお願いします。
        </p>
    </div>
    <div class="inner_block_mass">
        <h5><span>02</span>blogger個人のSNSについて</h5>
        <p>
            各bloggerのページに個人のSNSリンクを用意しました。<br>
            フォロー・チャンネル登録等の応援よろしくお願いします。
        </p>
    </div>
    <div class="inner_block_mass">
        <h5><span>03</span>wb-studio公式SNSについて</h5>
        <p>
            「トップページのSNSエリア」もしくは「各ページのフッター」にリンクを用意しました。<br>
            重ね重ね、フォロー・チャンネル登録等の応援よろしくお願いします。
        </p>
    </div>
</div>


</section>
</div>
</div>
@endsection