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
<div id="category">

<section id="blogger">
    <h2>Blogger</h2>
    @foreach(Config::get('auther') as $key => $confAuther)
    <div class="@if($loop->index%2 != 0) blogger_even @else blogger_odd @endif">
        <img src="{{ asset('images/front/introduct/'.$confAuther['imgPath']) }}" class="">
        <div class="blogger_name">{{$confAuther['name']}}</div>
        <div class="blogger_explain">
        <div class="blogger_explain_title">plofile</div>
            <p class="blogger_explain_detail">{{$confAuther['profile']}}</p>
            <div class="blogger_explain_title">plofile</div>
            <p class="blogger_explain_detail">{{$confAuther['greeting']}}</p>
        </div>
        <div class="to_blogger_category"><a href="{{ route('list.onlyAuther', ['auther_id' => $key]) }}">{{$confAuther['name']}}の部屋へ</a></div>
    </div>
    @if(isset($articlesListPerAuther[$key]) && count($articlesListPerAuther[$key]) > 0)
    <div class="pick_up patern_01">
        <div>
            <div class="swiper-container swiper_number_01">
                <div class="swiper-wrapper">
                    @foreach($articlesListPerAuther[$key] as $articleData)
                    <div class="swiper-slide">
                        <div>
                            <a href="{{ route('detail.article', ['article_id' => $articleData->id]) }}">
                                @if(isset($articleData->eyecatch))
                                <img src="{{ asset('images/admin/article/eyecatch/' .$articleData->eyecatch)}}" class="">
                                @else
                                <img src="{{ asset('images/admin/article/eyecatch/no_image.png')}}" class="">
                                @endif
                                <div class="title">{{$articleData->title}}</div>
                            </a>
                            <div class="category"><span>カテゴリー</span><a href="">testカテゴリー</a></div>
                            <div class="update_date">更新日 2021/00/00</div>
                        </div>
                    </div>
                    @endforeach

                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
            <script>
                var mySwiper01 = new Swiper('.swiper_number_01', {
                    // loop: true,
                    slidesPerView:3,
                    breakpoints: {
                        1023: {
                        slidesPerView: 4,
                        },
                    },
                    autoplay: {
                        delay: 5000,
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
    @endforeach

    </section>


</div>
</div>
@endsection