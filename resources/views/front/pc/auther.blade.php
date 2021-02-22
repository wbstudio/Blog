@extends('front.pc.include.layout')
@section('title', 'topページ')
@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<link rel="stylesheet" href="{{ asset('css/front/pc/auther.css') }}">
<link rel="stylesheet" href="{{ asset('css/front/pc/list.css') }}">
@endsection

@section('content')
<div class="container">
    <div id="auther_page" class="">
    <section id="blogger">
    <h2>Introduction</h2>
    <div class="blogger">
        <img src="{{ asset('images/front/top_link/face_test.png') }}" class="introduction">
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
            <div class="blogger_explain_title">更新予定</div>
            <p class="blogger_explain_detail">
                テストテキストテストテキストテストテキストテストテキストテストテキストテストテキストテストテキストテストテキスト<br>
                テストテキストテストテキストテストテキストテストテキストテストテキストテストテキストテストテキストテストテキスト<br>
                テストテキストテストテキストテストテキストテストテキスト
            </p>
        </div>
        <div class="pick_up patern_01">
            <h3>Pick Up</h3>
            <div>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div>
                                <a href="">
                                    <img src="{{ asset('images/front/top_link/wakuwakutoha.png') }}" class="">
                                    <div class="title">01タイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテスト</div>
                                </a>
                                <div class="category"><span>カテゴリー</span><a href="">testカテゴリー</a></div>
                                <div class="update_date">更新日 2021/00/00</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div>
                                <a href="">
                                    <img src="{{ asset('images/front/top_link/wakuwakutoha.png') }}" class="">
                                    <div class="title">02タイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテスト</div>
                                </a>
                                <div class="category"><span>カテゴリー</span><a href="">testカテゴリー</a></div>
                                <div class="update_date">更新日 2021/00/00</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div>
                                <a href="">
                                    <img src="{{ asset('images/front/top_link/wakuwakutoha.png') }}" class="">
                                    <div class="title">03タイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテスト</div>
                                </a>
                                <div class="category"><span>カテゴリー</span><a href="">testカテゴリー</a></div>
                                <div class="update_date">更新日 2021/00/00</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div>
                                <a href="">
                                    <img src="{{ asset('images/front/top_link/wakuwakutoha.png') }}" class="">
                                    <div class="title">04タイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテスト</div>
                                </a>
                                <div class="category"><span>カテゴリー</span><a href="">testカテゴリー</a></div>
                                <div class="update_date">更新日 2021/00/00</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div>
                                <a href="">
                                    <img src="{{ asset('images/front/top_link/wakuwakutoha.png') }}" class="">
                                    <div class="title">05タイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテスト</div>
                                </a>
                                <div class="category"><span>カテゴリー</span><a href="">testカテゴリー</a></div>
                                <div class="update_date">更新日 2021/00/00</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div>
                                <a href="">
                                    <img src="{{ asset('images/front/top_link/wakuwakutoha.png') }}" class="">
                                    <div class="title">06タイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテスト</div>
                                </a>
                                <div class="category"><span>カテゴリー</span><a href="">testカテゴリー</a></div>
                                <div class="update_date">更新日 2021/00/00</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div>
                                <a href="">
                                    <img src="{{ asset('images/front/top_link/wakuwakutoha.png') }}" class="">
                                    <div class="title">07タイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテスト</div>
                                </a>
                                <div class="category"><span>カテゴリー</span><a href="">testカテゴリー</a></div>
                                <div class="update_date">更新日 2021/00/00</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div>
                                <a href="">
                                    <img src="{{ asset('images/front/top_link/wakuwakutoha.png') }}" class="">
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
                        // loop: true,
                        slidesPerView:4,
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
    </div>

    </section>

    <section id="category">
    <h2>Category</h2>
    <div>
        <div class="category_name">
            <a>名前testのカテゴリー001</a>
        </div>
        <div class="article_list">
                <img>
                <div></div>
        </div>        
    </div>
    </section>

    <section id="sns">
    <h2>SNS</h2>
    <div>
        <table>
        </table>
    </div>
    </section>


</div>
</div>
@endsection