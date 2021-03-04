@extends('front.sp.include.layout')
@section('title', 'topページ')
@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{ asset('css/front/sp/list.css') }}">
<link rel="stylesheet" href="{{ asset('css/front/sp/auther.css') }}">
@endsection

@section('content')
<div class="container">
<div id="category_list_page" class="">

<section>
    <h2 class="first_h2 narrow">Category</h2>
    <div class="category_list">
        <div class="category_mass">
            <div class="category_title">
                <div class="to_category_link">
                    <a href="">
                        category001
                        <img src="{{ asset('images/front/icon_link.svg') }}">
                    </a>
                </div>
                <div class="category_name">
                    <a href="">category001</a>
                </div>
            </div>
            <table>
                <tr>
                    <td class="auther_category">
                        <a href="">category001auther</a>
                    </td>
                    <td class="auther">
                        <a href="">auther001</a>
                    </td>
                </tr>
                <tr>
                    <td class="auther_category">
                        <a href="">category001auther</a>
                    </td>
                    <td class="auther">
                        <a href="">ああ</a>
                    </td>
                </tr>
            </table>

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



            <a href=""><div class="more">MORE</div></a>
        </div>


        <div class="category_mass">
            <div class="category_title">
                <div class="to_category_link">
                    <a href="">
                        category001
                        <img src="{{ asset('images/front/icon_link.svg') }}">
                    </a>
                </div>
                <div class="category_name">
                    <a href="">category001</a>
                </div>
            </div>
            <table>
                <tr>
                    <td class="auther_category">
                        <a href="">category001auther</a>
                    </td>
                    <td class="auther">
                        <a href="">auther001</a>
                    </td>
                </tr>
                <tr>
                    <td class="auther_category">
                        <a href="">category001auther</a>
                    </td>
                    <td class="auther">
                        <a href="">ああ</a>
                    </td>
                </tr>
            </table>

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



            <a href=""><div class="more">MORE</div></a>
        </div>


        <div class="category_mass">
            <div class="category_title">
                <div class="to_category_link">
                    <a href="">
                        category001
                        <img src="{{ asset('images/front/icon_link.svg') }}">
                    </a>
                </div>
                <div class="category_name">
                    <a href="">category001</a>
                </div>
            </div>
            <table>
                <tr>
                    <td class="auther_category">
                        <a href="">category001auther</a>
                    </td>
                    <td class="auther">
                        <a href="">auther001</a>
                    </td>
                </tr>
                <tr>
                    <td class="auther_category">
                        <a href="">category001auther</a>
                    </td>
                    <td class="auther">
                        <a href="">ああ</a>
                    </td>
                </tr>
            </table>

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



            <a href=""><div class="more">MORE</div></a>
        </div>


        <div class="category_mass">
            <div class="category_title">
                <div class="to_category_link">
                    <a href="">
                        category001
                        <img src="{{ asset('images/front/icon_link.svg') }}">
                    </a>
                </div>
                <div class="category_name">
                    <a href="">category001</a>
                </div>
            </div>
            <table>
                <tr>
                    <td class="auther_category">
                        <a href="">category001auther</a>
                    </td>
                    <td class="auther">
                        <a href="">auther001</a>
                    </td>
                </tr>
                <tr>
                    <td class="auther_category">
                        <a href="">category001auther</a>
                    </td>
                    <td class="auther">
                        <a href="">ああ</a>
                    </td>
                </tr>
            </table>

            <div class="pick_up patern_01">
                <div>
                    <div class="swiper-container swiper_number_04">
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
                        var mySwiper04 = new Swiper('.swiper_number_04', {
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



            <a href=""><div class="more">MORE</div></a>
        </div>


        <div class="category_mass">
            <div class="category_title">
                <div class="to_category_link">
                    <a href="">
                        category001
                        <img src="{{ asset('images/front/icon_link.svg') }}">
                    </a>
                </div>
                <div class="category_name">
                    <a href="">category001</a>
                </div>
            </div>
            <table>
                <tr>
                    <td class="auther_category">
                        <a href="">category001auther</a>
                    </td>
                    <td class="auther">
                        <a href="">auther001</a>
                    </td>
                </tr>
                <tr>
                    <td class="auther_category">
                        <a href="">category001auther</a>
                    </td>
                    <td class="auther">
                        <a href="">ああ</a>
                    </td>
                </tr>
            </table>

            <div class="pick_up patern_01">
                <div>
                    <div class="swiper-container swiper_number_05">
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
                        var mySwiper05 = new Swiper('.swiper_number_05', {
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



            <a href=""><div class="more">MORE</div></a>
        </div>

    </div>

</section>


</div>
</div>
@endsection