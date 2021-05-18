@extends('front.pc.include.toplayout')
@section('title', 'topページ')
@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="{{ asset('css/front/pc/top.css') }}">
@endsection

@section('content')
<div class="container">
    <div id="top_page" class="">
    <section id="blogger">
    <h2>Blogger</h2>
        @foreach(Config::get('auther') as $key => $confAuther)
        <div class="@if($loop->index%2 != 0) blogger_even @else blogger_odd @endif">
            <img src="{{ asset('images/front/introduct/'.$confAuther['imgPath']) }}" class="">
            <div class="blogger_name">{{$confAuther['name']}}</div>
            <div class="blogger_explain">
            <div class="blogger_explain_title">plofile</div>
                <p class="blogger_explain_detail">{{$confAuther['profile']}}</p>
                <div class="blogger_explain_title">Greeting</div>
                <p class="blogger_explain_detail">{{$confAuther['greeting']}}</p>
            </div>
            <div class="to_blogger_category"><a href="{{ route('list.onlyAuther', ['auther_id' => $key]) }}">{{$confAuther['name']}}の部屋へ</a></div>
        </div>
        @endforeach
    </section>

    <div class="section_separation"></div>

    <section id="category">
    <h2>Category</h2>
    <div class="category_inner">
        @foreach(Config::get('category') as $keyCategory => $confCategory)
        <div class="category_mass">
            <div class="category_title_area">
                <div class="to_category_link">
                    <a href="{{ route('list.onlyCategory', ['category_id' => $keyCategory]) }}">
                        {{$confCategory["name"]}}
                        <img src="{{ asset('images/front/icon_link.svg') }}">
                    </a>
                </div>
                <div class="category_title">
                    <a href="{{ route('list.onlyCategory', ['category_id' => $keyCategory]) }}">{{$confCategory["name"]}}</a>
                </div>
            </div>
            <table>
                <tbody>
                    @foreach(Config::get('auther') as $keyAuther => $confAuther)
                    @if(isset($confAuther["category"][$keyCategory]))
                    <tr>
                        <td class="single_category_title"><a href="{{ route('list.bothAutherAndCategory', ['auther_id' => $keyAuther,'category_id' => $keyCategory,'page'=>1]) }}">{{$confAuther["category"][$keyCategory]["name"]}}</a></td>
                        <td class="single_category_auther"><a href="{{ route('list.onlyAuther', ['auther_id' => 0]) }}">{{$confAuther["name"]}}</a></td>
                        <!-- <td class="single_category_update"><span class="last_title">最終更新日</span><span class="last_date">2020/00/00</span></td> -->
                    </tr>
                    @endif
                    @endforeach
                </tbody> 
            </table>
        </div>
        @endforeach


    </div>
    </section>

    <div class="section_separation"></div>

    <section id="this_blog_is">
    <h2 class="ja">{{ config('siteconfig.SITE_NAME') }}の理念</h2>
    <div>
        <p>
            {{ config('siteconfig.SITE_NAME') }}の理念というか、思いを記してみました。<br>
            ヘッダーに書いてある<br>
            <span class="big_font">「</span><span class="red big_font">偏愛</span><span class="big_font">」</span><br>
            <span class="big_font">「</span><span class="red big_font">大きな興味</span><span class="big_font">と</span><span class="red big_font">小さな違和感</span><span class="big_font">」</span><br>
            とは何なのかも記してみました。<br>
            ぜひ、読んでみてください。
        </p>
        <div class="to_link_tbi">
            <a href="{{ route('thisblogis') }}">「{{ config('siteconfig.SITE_NAME') }}とは？」へ</a>
        </div>
    </div>
    </section>

    <div class="section_separation"></div>

    <section id="sns_area">
    <h2>SNS<span></span></h2>
    <div>
        <div class="sns_area_title">
            wb-studio公式SNS
        </div>
        <p>
            {{ config('siteconfig.SITE_NAME') }}を運営しているwb-studioの公式SNSをやっています。<br>
            フォロー・チャンネル登録等の応援よろしくお願いします。
        </p>
        <div class="snslink_area">
            <a href=""><img src="{{ asset('images/front/Facebook_black.svg') }}"></a>
            <a href=""><img src="{{ asset('images/front/Instagram_black.svg') }}"></a>
            <a href=""><img src="{{ asset('images/front/Twitter_black.svg') }}"></a>
            <a href=""><img src="{{ asset('images/front/Youtube_black.svg') }}"></a>
        </div>        
        <div class="sns_area_title">
            個人SNS
        </div>
        <p>
            BloggerそれぞれのSNSもやっていたりします。<br>
            Blogger紹介ページにリンクを用意していますので、<br>
            こちらもフォロー・チャンネル登録等の応援よろしくお願いします。
        </p>
        <div class="to_bloggerlink_area">
        @foreach(Config::get('auther') as $key => $confAuther)
            <a href="{{ route('list.onlyAuther', ['auther_id' => $key]) }}">
                <div class="to_bloggerlink">
                    {{$confAuther['name']}}の部屋へ
                </div>
            </a>
        @endforeach
        </div>        
    </div>
    </section>

    <div class="section_separation"></div>

    <section id="how_to">
    <h2>How to use<span>(使い方)</span></h2>
    <div>
        <p>
        {{ config('siteconfig.SITE_NAME') }}の簡単な使い方をまとめてみました。<br>
        主に以下の3つについて書いてあります。<br>
        参考にしてみてください。
        </p>
        <ul>
            <li>blogの記事の選択の仕方</li>
            <li>お問い合わせの仕方</li>
            <li>SNSについて</li>
        </ul>
        <div class="to_link_htu">
            <a href="{{ route('howtouse') }}">「How to use(使い方)」のページへ</a>
        </div>
    </div>
    </section>

    <div class="section_separation"></div>

    <section id="inquiry">
    <h2 class="ja">Contact<span>(お問い合わせ)</span></h2>
    <div>
        <p>
            「偏愛」を持つ者同士多くを語り合えたら嬉しいと思っていますので、<br>
            <span class="red big_font">お友達にLINEするくらい気軽にお問い合わせ</span>してください。<br>
        </p>
        <div class="to_link_con">
            <a href="{{ route('inquiry.showForm') }}">「Contact(お問い合わせ)」のページへ</a>
        </div>
        <p class="caution">
            ※お問い合わせにはLoginが必要となります。<br>
            もしわからない場合は<a href="{{ route('howtouse') }}">「How to use(お問い合わせ)」へのリンク</a>を見てみてください。
        </p>
    </div>
    </section>

    <div class="section_separation"></div>
    <div class="section_separation"></div>

</div>
</div>
@endsection