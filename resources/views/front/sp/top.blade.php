@extends('front.sp.include.layout')
@section('title', 'topページ')
@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{ asset('css/front/sp/list.css') }}">
@endsection

@section('content')
<a href="">
    <img src="{{ asset('images/front/sp/top_image.png') }}" width="100%">
</a>
<div class="container">
<div id="top_page" class="">

<div class="pick_up patern_01">
        <h3>Pick Up</h3>
        <div>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="swiper-slide_inner">
                            <a href="">
                                <img src="{{ asset('images/front/top_link/image_190_150.png') }}" class="">
                                <div class="title">01タイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテスト</div>
                            </a>
                            <div class="category"><span>カテゴリー</span><a href="">testカテゴリー</a></div>
                            <div class="update_date">更新日 2021/00/00</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-slide_inner">
                            <a href="">
                                <img src="{{ asset('images/front/top_link/image_190_150.png') }}" class="">
                                <div class="title">02タイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテスト</div>
                            </a>
                            <div class="category"><span>カテゴリー</span><a href="">testカテゴリー</a></div>
                            <div class="update_date">更新日 2021/00/00</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-slide_inner">
                            <a href="">
                                <img src="{{ asset('images/front/top_link/image_190_150.png') }}" class="">
                                <div class="title">03タイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテスト</div>
                            </a>
                            <div class="category"><span>カテゴリー</span><a href="">testカテゴリー</a></div>
                            <div class="update_date">更新日 2021/00/00</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-slide_inner">
                            <a href="">
                                <img src="{{ asset('images/front/top_link/image_190_150.png') }}" class="">
                                <div class="title">04タイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテスト</div>
                            </a>
                            <div class="category"><span>カテゴリー</span><a href="">testカテゴリー</a></div>
                            <div class="update_date">更新日 2021/00/00</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-slide_inner">
                            <a href="">
                                <img src="{{ asset('images/front/top_link/image_190_150.png') }}" class="">
                                <div class="title">05タイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテスト</div>
                            </a>
                            <div class="category"><span>カテゴリー</span><a href="">testカテゴリー</a></div>
                            <div class="update_date">更新日 2021/00/00</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-slide_inner">
                            <a href="">
                                <img src="{{ asset('images/front/top_link/image_190_150.png') }}" class="">
                                <div class="title">06タイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテスト</div>
                            </a>
                            <div class="category"><span>カテゴリー</span><a href="">testカテゴリー</a></div>
                            <div class="update_date">更新日 2021/00/00</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-slide_inner">
                            <a href="">
                                <img src="{{ asset('images/front/top_link/image_190_150.png') }}" class="">
                                <div class="title">07タイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテスト</div>
                            </a>
                            <div class="category"><span>カテゴリー</span><a href="">testカテゴリー</a></div>
                            <div class="update_date">更新日 2021/00/00</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-slide_inner">
                            <a href="">
                                <img src="{{ asset('images/front/top_link/image_190_150.png') }}" class="">
                                <div class="title">08タイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテスト</div>
                            </a>
                            <div class="category"><span>カテゴリー</span><a href="">testカテゴリー</a></div>
                            <div class="update_date">更新日 2021/00/00</div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            
            </div>
            <script>
                const mySwiper = new Swiper('.swiper-container', {
                    slidesPerView:2,
                    // autoplay: {
                    //     delay: 3000,
                    //     disableOnInteraction: false,
                    // },
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

<section>
    <h2>Blogger</h2>
    <div>
        
    </div>





aaaaaaaaaaaaaaaaaaaaaaaaa<br>
aaaaaaaaaaaaaaaaaaaaaaaaa<br>
aaaaaaaaaaaaaaaaaaaaaaaaa<br>
aaaaaaaaaaaaaaaaaaaaaaaaa<br>
aaaaaaaaaaaaaaaaaaaaaaaaa<br>
aaaaaaaaaaaaaaaaaaaaaaaaa<br>
aaaaaaaaaaaaaaaaaaaaaaaaa<br>
aaaaaaaaaaaaaaaaaaaaaaaaa<br>
aaaaaaaaaaaaaaaaaaaaaaaaa<br>
aaaaaaaaaaaaaaaaaaaaaaaaa<br>
aaaaaaaaaaaaaaaaaaaaaaaaa<br>
aaaaaaaaaaaaaaaaaaaaaaaaa<br>
aaaaaaaaaaaaaaaaaaaaaaaaa<br>
aaaaaaaaaaaaaaaaaaaaaaaaa<br>
aaaaaaaaaaaaaaaaaaaaaaaaa<br>
aaaaaaaaaaaaaaaaaaaaaaaaa<br>
aaaaaaaaaaaaaaaaaaaaaaaaa<br>
aaaaaaaaaaaaaaaaaaaaaaaaa<br>
aaaaaaaaaaaaaaaaaaaaaaaaa<br>
aaaaaaaaaaaaaaaaaaaaaaaaa<br>
aaaaaaaaaaaaaaaaaaaaaaaaa<br>
aaaaaaaaaaaaaaaaaaaaaaaaa<br>
aaaaaaaaaaaaaaaaaaaaaaaaa<br>
aaaaaaaaaaaaaaaaaaaaaaaaa<br>
aaaaaaaaaaaaaaaaaaaaaaaaa<br>
aaaaaaaaaaaaaaaaaaaaaaaaa<br>
aaaaaaaaaaaaaaaaaaaaaaaaa<br>
aaaaaaaaaaaaaaaaaaaaaaaaa<br>
aaaaaaaaaaaaaaaaaaaaaaaaa<br>
aaaaaaaaaaaaaaaaaaaaaaaaa<br>
aaaaaaaaaaaaaaaaaaaaaaaaa<br>
aaaaaaaaaaaaaaaaaaaaaaaaa<br>
aaaaaaaaaaaaaaaaaaaaaaaaa<br>
aaaaaaaaaaaaaaaaaaaaaaaaa<br>
aaaaaaaaaaaaaaaaaaaaaaaaa<br>
aaaaaaaaaaaaaaaaaaaaaaaaa<br>
aaaaaaaaaaaaaaaaaaaaaaaaa<br>
aaaaaaaaaaaaaaaaaaaaaaaaa<br>
aaaaaaaaaaaaaaaaaaaaaaaaa<br>
aaaaaaaaaaaaaaaaaaaaaaaaa<br>
aaaaaaaaaaaaaaaaaaaaaaaaa<br>
aaaaaaaaaaaaaaaaaaaaaaaaa<br>
aaaaaaaaaaaaaaaaaaaaaaaaa<br>
aaaaaaaaaaaaaaaaaaaaaaaaa<br>
aaaaaaaaaaaaaaaaaaaaaaaaa<br>
aaaaaaaaaaaaaaaaaaaaaaaaa<br>
aaaaaaaaaaaaaaaaaaaaaaaaa<br>
aaaaaaaaaaaaaaaaaaaaaaaaa<br>
aaaaaaaaaaaaaaaaaaaaaaaaa<br>
aaaaaaaaaaaaaaaaaaaaaaaaa<br>
aaaaaaaaaaaaaaaaaaaaaaaaa<br>
aaaaaaaaaaaaaaaaaaaaaaaaa<br>
aaaaaaaaaaaaaaaaaaaaaaaaa<br>
aaaaaaaaaaaaaaaaaaaaaaaaa<br>
aaaaaaaaaaaaaaaaaaaaaaaaa<br>
aaaaaaaaaaaaaaaaaaaaaaaaa<br>
aaaaaaaaaaaaaaaaaaaaaaaaa<br>
aaaaaaaaaaaaaaaaaaaaaaaaa<br>
aaaaaaaaaaaaaaaaaaaaaaaaa<br>
aaaaaaaaaaaaaaaaaaaaaaaaa<br>
aaaaaaaaaaaaaaaaaaaaaaaaa<br>
aaaaaaaaaaaaaaaaaaaaaaaaa<br>
aaaaaaaaaaaaaaaaaaaaaaaaa<br>
aaaaaaaaaaaaaaaaaaaaaaaaa<br>
aaaaaaaaaaaaaaaaaaaaaaaaa<br>
aaaaaaaaaaaaaaaaaaaaaaaaa<br>
aaaaaaaaaaaaaaaaaaaaaaaaa<br>
aaaaaaaaaaaaaaaaaaaaaaaaa<br>
aaaaaaaaaaaaaaaaaaaaaaaaa<br>
aaaaaaaaaaaaaaaaaaaaaaaaa<br>
aaaaaaaaaaaaaaaaaaaaaaaaa<br>
</div>
</div>
@endsection