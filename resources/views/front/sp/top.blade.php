@extends('front.sp.include.layout')
@section('title', 'topページ')
@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{ asset('css/front/sp/list.css') }}">
<link rel="stylesheet" href="{{ asset('css/front/sp/top.css') }}">
<link rel="stylesheet" href="{{ asset('css/front/sp/auther.css') }}">
@endsection

@section('content')
<a href="{{ route('thisblogis') }}">
    <video src="{{ asset('images/front/top_link/top_image_1_sp.mp4') }}" width="100%" muted autoplay loop playsinline></video>
</a>
<div class="container">
<div id="top_page" class="">
@if(isset($pickupList) && is_countable($pickupList))
<div class="pick_up patern_01">
    <h3>Pick Up</h3>
    <div>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                @foreach ($pickupList as $index => $pickup)
                <div class="swiper-slide">
                    <div class="swiper-slide_inner">
                        <a href="{{ route('detail.article', ['article_id' => $pickup->id]) }}">
                            @if(isset($pickup->eyecatch))
                            <img src="{{ asset('images/admin/article/eyecatch/' .$pickup->eyecatch)}}" class="">
                            @else
                            <img src="{{ asset('images/admin/article/eyecatch/no_image.png')}}" class="">
                            @endif
                            <div class="title">{{$pickup -> title}}</div>
                        </a>
                        <div class="auther"><span>著者</span><a href="{{ route('list.onlyAuther', ['auther_id' => $pickup->auther]) }}">{{config("auther.$pickup->auther.name")}}</a></div>
                        <div class="category"><span>カテゴリー</span><a href="{{ route('list.bothAutherAndCategory', ['auther_id'=>$pickup->auther,'category_id'=>$pickup->auther_category,'page'=>1]) }}">{{config("auther.$pickup->auther.category.$pickup->auther_category.name")}}</a></div>
                        <div class="update_date">更新日 {{$pickup->release_at->format('Y/m/d')}}</div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        
        </div>
        <script>
            const mySwiper = new Swiper('.swiper-container', {
                slidesPerView:2,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            })
        </script>
    </div>
</div>
@endif
<div class="section_separater"></div>
<section>
    <h2 class="ja">Blogger</h2>
    @foreach(Config::get('auther') as $keyAuther => $confAuther)
    <div class="auther_mass">
        <img src="{{ asset('images/front/introduct/'.$confAuther['imgPath']) }}" class="face_pic">
        <div class="auther_name">{{$confAuther['name']}}</div>
        <div class="auther_profile_area">
            <div class="auther_category_title">よく書くこと</div>
            <ul class="auther_category_title_list">
                @foreach($confAuther["category"] as $keyCategory => $autherCategory)
                <li><a href="{{ route('list.bothAutherAndCategory', ['auther_id' => $keyAuther,'category_id' => $keyCategory,'page'=>1]) }}">・{{$autherCategory["name"]}}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="to_auther_link"><a href="{{ route('list.onlyAuther', ['auther_id' => $keyAuther]) }}">{{$confAuther['name']}}の部屋へ</a></div>
    </div>
    @endforeach
</section>

<div class="section_separater_half"></div>
<section>
    <h2 class="ja">Category</h2>

    @foreach(Config::get('category') as $keyCategory => $confCategory)
    <div class="category_list">
        <div class="category_title">
            <div class="to_category_link">
                <a href="{{ route('list.onlyCategory', ['category_id' => $keyCategory]) }}">
                    {{$confCategory["name"]}}
                    <img src="{{ asset('images/front/icon_link.svg') }}">
                </a>
            </div>
            <div class="category_name">
                <a href="{{ route('list.onlyCategory', ['category_id' => $keyCategory]) }}">{{$confCategory["name"]}}</a>
            </div>
        </div>
        <table>
            @foreach(Config::get('auther') as $keyAuther => $confAuther)
            @if(isset($confAuther["category"][$keyCategory]))
            <tr>
                <td class="auther_category">
                    <a href="{{ route('list.bothAutherAndCategory', ['auther_id' => $keyAuther,'category_id' => $keyCategory,'page'=>1]) }}">{{$confAuther["category"][$keyCategory]["name"]}}</a>
                </td>
                <td class="auther">
                    <a href="{{ route('list.onlyAuther', ['auther_id' => 0]) }}">{{$confAuther["name"]}}</a>
                </td>
            </tr>
            @endif
            @endforeach
        </table>
    </div>
    @endforeach

</section>


<div class="section_separater"></div>

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

<div class="section_separater"></div>
<div class="section_separater"></div>

<section id="sns_area">
<h2 class="ja">SNS<span></span></h2>
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

<div class="section_separater"></div>
<div class="section_separater"></div>

<section id="how_to">
<h2 class="ja">How to use</h2>
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

<div class="section_separater"></div>
<div class="section_separater"></div>

<section id="inquiry">
<h2 class="ja">Contact</h2>
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

<div class="section_separater"></div>
<div class="section_separater"></div>
<div class="section_separater"></div>
<div class="section_separater"></div>

</div>
</div>
@endsection