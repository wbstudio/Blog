@extends('front.sp.include.layout')
@section('title', 'topページ')
@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{ asset('css/front/sp/list.css') }}">
<link rel="stylesheet" href="{{ asset('css/front/sp/article.css') }}">
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
    </div>
    <h2 class="article_title">{{$article->title}}</h2>
    <div class="article_info_date">更新日時:0000/00/00</div>
    <div class="article_main">{!!$article->main!!}</div>
    <div class="article_tag_area">
        <a href=""><div class="tag_single">:00000</div></a>
        <a href=""><div class="tag_single">:00000</div></a>
    </div>
</section>
<!--
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
-->



<section id="relation">
    <div class="relative_category">
        <div class="relative_title">この記事を読んだあなたへのお勧め</div>
        <div class="pick_up patern_01">
            <div>
                <div class="swiper-container swiper_number_01">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="swiper-slide_inner">
                                <a href="">
                                    <img src="{{ asset('images/front/top_link/image_190_150.png') }}" class="">
                                    <div class="title">01タイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテスト</div>
                                </a>
                                <div class="auther"><span>著者</span><a href="">名前テスト名前テスト</a></div>
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
                                <div class="auther"><span>著者</span><a href="">名前テスト名前テスト</a></div>
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
                                <div class="auther"><span>著者</span><a href="">名前テスト名前テスト</a></div>
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
                                <div class="auther"><span>著者</span><a href="">名前テスト名前テスト</a></div>
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
                                <div class="auther"><span>著者</span><a href="">名前テスト名前テスト</a></div>
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
                                <div class="auther"><span>著者</span><a href="">名前テスト名前テスト</a></div>
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
                                <div class="auther"><span>著者</span><a href="">名前テスト名前テスト</a></div>
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
                                <div class="auther"><span>著者</span><a href="">名前テスト名前テスト</a></div>
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
    </div>
    <div class="relative_tag">
        <div class="relative_title">同じタグの記事</div>
        <div class="pick_up patern_01">
            <div>
                <div class="swiper-container swiper_number_02">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="swiper-slide_inner">
                                <a href="">
                                    <img src="{{ asset('images/front/top_link/image_190_150.png') }}" class="">
                                    <div class="title">01タイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテスト</div>
                                </a>
                                <div class="auther"><span>著者</span><a href="">名前テスト名前テスト</a></div>
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
                                <div class="auther"><span>著者</span><a href="">名前テスト名前テスト</a></div>
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
                                <div class="auther"><span>著者</span><a href="">名前テスト名前テスト</a></div>
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
                                <div class="auther"><span>著者</span><a href="">名前テスト名前テスト</a></div>
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
                                <div class="auther"><span>著者</span><a href="">名前テスト名前テスト</a></div>
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
                                <div class="auther"><span>著者</span><a href="">名前テスト名前テスト</a></div>
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
                                <div class="auther"><span>著者</span><a href="">名前テスト名前テスト</a></div>
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
                                <div class="auther"><span>著者</span><a href="">名前テスト名前テスト</a></div>
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
    </div>
    <div class="relative_category">
        <div class="relative_title">同じcategory001の記事</div>
        <div class="pick_up patern_01">
            <div>
                <div class="swiper-container swiper_number_03">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="swiper-slide_inner">
                                <a href="">
                                    <img src="{{ asset('images/front/top_link/image_190_150.png') }}" class="">
                                    <div class="title">01タイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテスト</div>
                                </a>
                                <div class="auther"><span>著者</span><a href="">名前テスト名前テスト</a></div>
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
                                <div class="auther"><span>著者</span><a href="">名前テスト名前テスト</a></div>
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
                                <div class="auther"><span>著者</span><a href="">名前テスト名前テスト</a></div>
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
                                <div class="auther"><span>著者</span><a href="">名前テスト名前テスト</a></div>
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
                                <div class="auther"><span>著者</span><a href="">名前テスト名前テスト</a></div>
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
                                <div class="auther"><span>著者</span><a href="">名前テスト名前テスト</a></div>
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
                                <div class="auther"><span>著者</span><a href="">名前テスト名前テスト</a></div>
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
                                <div class="auther"><span>著者</span><a href="">名前テスト名前テスト</a></div>
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
    </div>
</section>

</div>
</div>
@endsection