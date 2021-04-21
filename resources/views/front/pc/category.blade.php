@extends('front.pc.include.layout')
@section('title', 'topページ')
@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<link rel="stylesheet" href="{{ asset('css/front/pc/list.css') }}">
@endsection

@section('content')
<div class="container">
<div id="category" class="">
    <section id="category">
        <h2 class="ja">Categoryのページ</h2>
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
                                <div class="category"><span>カテゴリー:</span><a href="{{ route('list.bothAutherAndCategory', ['auther_id'=>$pickup->auther,'category_id'=>0,'page'=>1]) }}">{{config("auther.$pickup->auther.category.$pickup->auther_category.name")}}</a></div>
                                <div class="update_date">更新日:{{$pickup->release_at}}</div>
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
                        // loop: true,
                        slidesPerView:3,
                        breakpoints: {
                            1023: {
                            slidesPerView: 4,
                            },
                        },
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
        <div class="section_separation"></div>


        @foreach(Config::get('auther') as $keyAuther => $confAuther)
        @if(isset($articlesListByCategoryId[$keyAuther]) && count($articlesListByCategoryId[$keyAuther]) > 0)
        <div class="category_mass">
            <div class="category_title_area">
                <div class="to_category_link">
                    <a href="{{ route('list.bothAutherAndCategory', ['auther_id' => $keyAuther,'category_id' => $categoryId,'page' => 1]) }}">
                        {{$confAuther["category"][$categoryId]["name"]}}
                        <img src="{{ asset('images/front/icon_link.svg') }}">
                    </a>
                </div>
                <div class="category_title">
                    <a href="{{ route('list.bothAutherAndCategory', ['auther_id' => $keyAuther,'category_id' => $categoryId,'page' => 1]) }}">{{$confAuther["category"][$categoryId]["name"]}}</a>
                    <a href="{{ route('list.onlyAuther', ['auther_id' => $keyAuther]) }}" class="category_auther_link">({{$confAuther["name"]}}のcategory)</a>                    
                </div>
            </div>
            <div class="category_explain">
                <p>{{$confAuther["category"][$categoryId]["explain"]}}</p>
            </div>
            <div class="category_mass_inner">
                @foreach($articlesListByCategoryId[$keyAuther] as $key => $articleList)
                <div class="category_mass_inner_single">
                    <div class="category_mass_inner_contents">
                        <a href="{{ route('detail.article', ['article_id' => $articleList->id]) }}">
                            <img src="{{ asset('images/front/top_link/image_190_150.png') }}" class="">
                            <div class="title">{{$articleList -> title}}</div>
                        </a>
                        <div class="update_date">更新日:{{ $articleList->release_at->format('Y/m/d') }}</div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endif
        @endforeach

    </section>
</div>
</div>
@endsection