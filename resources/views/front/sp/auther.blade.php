@extends('front.sp.include.layout')
@section('title', 'topページ')
@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{ asset('css/front/sp/list.css') }}">
<link rel="stylesheet" href="{{ asset('css/front/sp/auther.css') }}">
@endsection

@section('content')
<div class="container">
<div id="auther_page" class="">

<section>
    <h2 class="first_h2 narrow">Introduction</h2>
    <div class="auther_mass">
        <img src="{{ asset('images/front/introduct/'.config('auther.'.$autherId.'.imgPath')) }}">
        <div class="auther_name">{!! nl2br(e(config("auther.".$autherId.".name"))) !!}</div>
        <div class="auther_profile_area">
            <div class="auther_profile_title">profile</div>
            <div class="auther_profile">
            {{config("auther.".$autherId.".profile")}}
            </div>
            <div class="auther_category_title">よく書くこと(更新予定)</div>
            <ul class="auther_category_title_list">
                @foreach(Config::get('auther.'.$autherId.'.updateInfo') as $key => $confUpdate)
                <li><a href="">{{$confUpdate["contents"]}}    ({{$confUpdate["day"]}})</a></li>
                @endforeach
            </ul>
        </div>
    </div>

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
                                <img src="{{ asset('images/front/top_link/image_190_150.png') }}" class="">
                                <div class="title">{{$pickup -> title}}</div>
                            </a>
                            <div class="auther"><span>著者:</span><a href="{{ route('list.onlyAuther', ['auther_id' => $pickup->auther]) }}">{{config("auther.$pickup->auther.name")}}</a></div>
                            <div class="category"><span>カテゴリー</span><a href="{{ route('list.bothAutherAndCategory', ['auther_id'=>$pickup->auther,'category_id'=>0,'page' => 1]) }}">{{config("auther.$pickup->auther.category.$pickup->auther_category.name")}}</a></div>
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
</section>


<section>
    <h2 class="first_h2 narrow">Category</h2>
    <div class="category_list">

        @foreach(Config::get('auther.'.$autherId.'.category') as $key => $confCategory)
        @if(isset($categoryArticlesList[$key]) && is_countable($categoryArticlesList[$key]))
        <div class="category_mass">
            <div class="category_title">
                <div class="to_category_link">
                    <a href="{{ route('list.bothAutherAndCategory', ['auther_id' => $autherId,'category_id' => $key,'page' => 1]) }}">
                        記事一覧へ
                        <img src="{{ asset('images/front/icon_to_link_finger.svg') }}">
                    </a>
                </div>
                <div class="category_name">
                    <a href="{{ route('list.bothAutherAndCategory', ['auther_id' => $autherId,'category_id' => $key,'page' => 1]) }}">{{$confCategory["name"]}}</a>
                </div>
            </div>
            <div class="category_explain">
                <p class="hidden_area_open">{{$confCategory["explain"]}}</p>
            </div>
            <div class="category_pickup_article">
                @foreach($categoryArticlesList[$key] as $categoryArticle)
                @if($loop->iteration < 3)
                <div class="article_mass">
                    <a href="{{ route('detail.article', ['article_id' => $categoryArticle->id]) }}">
                        <img src="{{ asset('images/front/top_link/image_190_150.png') }}" class="">
                        <div class="title">
                        {{$categoryArticle->title}}
                        </div>
                    </a>
                    <div class="update_date">更新日 {{$categoryArticle->release_at->format('Y/m/d')}}</div>                
                </div>
                @endif
                @endforeach
            </div>
            <a href="{{ route('list.bothAutherAndCategory', ['auther_id' => $autherId,'category_id' => $key,'page' => 1]) }}"><div class="more">MORE</div></a>
        </div>
        @endif
        @endforeach
    </div>

</section>

<section>
    <h2 class="first_h2 narrow">SNS</h2>
</section>


</div>
</div>
@endsection