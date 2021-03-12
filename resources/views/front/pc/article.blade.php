@extends('front.pc.include.layout')
@section('title', 'articleページ')
@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="{{ asset('js/front/pc/common.js') }}"></script>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<link rel="stylesheet" href="{{ asset('css/front/pc/list.css') }}">
<link rel="stylesheet" href="{{ asset('css/front/pc/article.css') }}">

@endsection

@section('content')
<div class="container">
    <div id="article_page" class="">
    <section id="article_area">
        <div class="article_info_area">
            <div class="article_info_writer">
                <img src="{{ asset('images/front/top_link/face_test.png') }}" class="">
                @テスト名前テスト名前
            </div>
            <div class="article_info_category">-Category001</div>
            <div class="article_info_date">更新日時:0000/00/00</div>
        </div>
        <h2 class="article_title">{{$article->title}}</h2>
        <div class="article_tag_area">
            <a href=""><div class="tag_single">:00000</div></a>
            <a href=""><div class="tag_single">:00000</div></a>
        </div>
        <div class="article_main">{!!$article->main!!}</div>
    </section>

    <section id="same_auther_category">
        <div class="title">
            他のCategory001の記事
        </div>
        <div class="link_area">
            <div class="preview">
                <a href="">
                    ＜前の記事
                    <div class="preview_link">
                        aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                    </div>
                </a>
            </div>
            <div class="next">
                <a href="">
                    ＞次の記事
                    <div class="next_link">
                        aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section id="relative">
    <div class="relative_title">関連記事</div>
    <div class="pick_up patern_01">
        <h3>この記事を読んだあなたへのお勧め</h3>
        <div>
            <div class="swiper-container swiper_number_01">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div>
                            <a href="">
                                <img src="{{ asset('images/front/top_link/image_190_150.png') }}" class="">
                                <div class="title">01タイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテスト</div>
                            </a>
                            <div class="category"><span>カテゴリー</span><a href="">testカテゴリー</a></div>
                            <div class="update_date">更新日 2021/00/00</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div>
                            <a href="">
                                <img src="{{ asset('images/front/top_link/image_190_150.png') }}" class="">
                                <div class="title">02タイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテスト</div>
                            </a>
                            <div class="category"><span>カテゴリー</span><a href="">testカテゴリー</a></div>
                            <div class="update_date">更新日 2021/00/00</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div>
                            <a href="">
                                <img src="{{ asset('images/front/top_link/image_190_150.png') }}" class="">
                                <div class="title">03タイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテスト</div>
                            </a>
                            <div class="category"><span>カテゴリー</span><a href="">testカテゴリー</a></div>
                            <div class="update_date">更新日 2021/00/00</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div>
                            <a href="">
                                <img src="{{ asset('images/front/top_link/image_190_150.png') }}" class="">
                                <div class="title">04タイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテスト</div>
                            </a>
                            <div class="category"><span>カテゴリー</span><a href="">testカテゴリー</a></div>
                            <div class="update_date">更新日 2021/00/00</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div>
                            <a href="">
                                <img src="{{ asset('images/front/top_link/image_190_150.png') }}" class="">
                                <div class="title">05タイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテスト</div>
                            </a>
                            <div class="category"><span>カテゴリー</span><a href="">testカテゴリー</a></div>
                            <div class="update_date">更新日 2021/00/00</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div>
                            <a href="">
                                <img src="{{ asset('images/front/top_link/image_190_150.png') }}" class="">
                                <div class="title">06タイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテスト</div>
                            </a>
                            <div class="category"><span>カテゴリー</span><a href="">testカテゴリー</a></div>
                            <div class="update_date">更新日 2021/00/00</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div>
                            <a href="">
                                <img src="{{ asset('images/front/top_link/image_190_150.png') }}" class="">
                                <div class="title">07タイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテスト</div>
                            </a>
                            <div class="category"><span>カテゴリー</span><a href="">testカテゴリー</a></div>
                            <div class="update_date">更新日 2021/00/00</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div>
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
                var mySwiper01 = new Swiper('.swiper_number_01', {
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
    <div class="pick_up patern_01">
        <h3>同じタグのついている記事</h3>
        <div>
            <div class="swiper-container swiper_number_02">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div>
                            <a href="">
                                <img src="{{ asset('images/front/top_link/image_190_150.png') }}" class="">
                                <div class="title">01タイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテスト</div>
                            </a>
                            <div class="category"><span>カテゴリー</span><a href="">testカテゴリー</a></div>
                            <div class="update_date">更新日 2021/00/00</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div>
                            <a href="">
                                <img src="{{ asset('images/front/top_link/image_190_150.png') }}" class="">
                                <div class="title">02タイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテスト</div>
                            </a>
                            <div class="category"><span>カテゴリー</span><a href="">testカテゴリー</a></div>
                            <div class="update_date">更新日 2021/00/00</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div>
                            <a href="">
                                <img src="{{ asset('images/front/top_link/image_190_150.png') }}" class="">
                                <div class="title">03タイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテスト</div>
                            </a>
                            <div class="category"><span>カテゴリー</span><a href="">testカテゴリー</a></div>
                            <div class="update_date">更新日 2021/00/00</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div>
                            <a href="">
                                <img src="{{ asset('images/front/top_link/image_190_150.png') }}" class="">
                                <div class="title">04タイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテスト</div>
                            </a>
                            <div class="category"><span>カテゴリー</span><a href="">testカテゴリー</a></div>
                            <div class="update_date">更新日 2021/00/00</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div>
                            <a href="">
                                <img src="{{ asset('images/front/top_link/image_190_150.png') }}" class="">
                                <div class="title">05タイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテスト</div>
                            </a>
                            <div class="category"><span>カテゴリー</span><a href="">testカテゴリー</a></div>
                            <div class="update_date">更新日 2021/00/00</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div>
                            <a href="">
                                <img src="{{ asset('images/front/top_link/image_190_150.png') }}" class="">
                                <div class="title">06タイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテスト</div>
                            </a>
                            <div class="category"><span>カテゴリー</span><a href="">testカテゴリー</a></div>
                            <div class="update_date">更新日 2021/00/00</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div>
                            <a href="">
                                <img src="{{ asset('images/front/top_link/image_190_150.png') }}" class="">
                                <div class="title">07タイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテスト</div>
                            </a>
                            <div class="category"><span>カテゴリー</span><a href="">testカテゴリー</a></div>
                            <div class="update_date">更新日 2021/00/00</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div>
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
                var mySwiper02 = new Swiper('.swiper_number_02', {
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
    <div class="pick_up patern_01">
        <h3>カテゴリーがcategory001の記事</h3>
        <div>
            <div class="swiper-container swiper_number_03">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div>
                            <a href="">
                                <img src="{{ asset('images/front/top_link/image_190_150.png') }}" class="">
                                <div class="title">01タイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテスト</div>
                            </a>
                            <div class="category"><span>カテゴリー</span><a href="">testカテゴリー</a></div>
                            <div class="update_date">更新日 2021/00/00</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div>
                            <a href="">
                                <img src="{{ asset('images/front/top_link/image_190_150.png') }}" class="">
                                <div class="title">02タイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテスト</div>
                            </a>
                            <div class="category"><span>カテゴリー</span><a href="">testカテゴリー</a></div>
                            <div class="update_date">更新日 2021/00/00</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div>
                            <a href="">
                                <img src="{{ asset('images/front/top_link/image_190_150.png') }}" class="">
                                <div class="title">03タイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテスト</div>
                            </a>
                            <div class="category"><span>カテゴリー</span><a href="">testカテゴリー</a></div>
                            <div class="update_date">更新日 2021/00/00</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div>
                            <a href="">
                                <img src="{{ asset('images/front/top_link/image_190_150.png') }}" class="">
                                <div class="title">04タイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテスト</div>
                            </a>
                            <div class="category"><span>カテゴリー</span><a href="">testカテゴリー</a></div>
                            <div class="update_date">更新日 2021/00/00</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div>
                            <a href="">
                                <img src="{{ asset('images/front/top_link/image_190_150.png') }}" class="">
                                <div class="title">05タイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテスト</div>
                            </a>
                            <div class="category"><span>カテゴリー</span><a href="">testカテゴリー</a></div>
                            <div class="update_date">更新日 2021/00/00</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div>
                            <a href="">
                                <img src="{{ asset('images/front/top_link/image_190_150.png') }}" class="">
                                <div class="title">06タイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテスト</div>
                            </a>
                            <div class="category"><span>カテゴリー</span><a href="">testカテゴリー</a></div>
                            <div class="update_date">更新日 2021/00/00</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div>
                            <a href="">
                                <img src="{{ asset('images/front/top_link/image_190_150.png') }}" class="">
                                <div class="title">07タイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテスト</div>
                            </a>
                            <div class="category"><span>カテゴリー</span><a href="">testカテゴリー</a></div>
                            <div class="update_date">更新日 2021/00/00</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div>
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
                var mySwiper03 = new Swiper('.swiper_number_03', {
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
    </section>

</div>
</div>
@endsection