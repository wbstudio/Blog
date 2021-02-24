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
<section id="category_list">
<h2>Category</h2>
<div class="category_list_inner">
    <div class="category_mass">
        <div class="category_title_area">
            <div class="to_category_link">
                <a href="{{ route('list.onlyCategory', ['category_id' => 0]) }}">category001<img src="{{ asset('images/front/icon_link.svg') }}"></a>
            </div>
            <div class="category_title">
                <a href="{{ route('list.onlyCategory', ['category_id' => 0]) }}">category001</a>
            </div>
        </div>
        <table>
            <tbody>
                <tr>
                    <td class="single_category_title"><a href="{{ route('list.bothAutherAndCategory', ['auther_id' => 0,'category_id' => 0]) }}">カテゴリー著者絞り</a></td>
                    <td class="single_category_auther"><a href="{{ route('list.onlyAuther', ['auther_id' => 0]) }}">名前テスト</a></td>
                    <td class="single_category_update"><span class="last_title">最終更新日</span><span class="last_date">2020/00/00</span></td>
                </tr>
                <tr>
                    <td class="single_category_title"><a href="{{ route('list.bothAutherAndCategory', ['auther_id' => 0,'category_id' => 0]) }}">カテゴリー著者絞り</a></td>
                    <td class="single_category_auther"><a href="{{ route('list.onlyAuther', ['auther_id' => 0]) }}">名前テスト</a></td>
                    <td class="single_category_update"><span class="last_title">最終更新日</span><span class="last_date">2020/00/00</span></td>
                </tr>
            </tbody> 
        </table>
    </div>


    <div class="pick_up patern_01">
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
</div>

<div class="category_list_inner">
    <div class="category_mass">
        <div class="category_title_area">
            <div class="to_category_link">
                <a href="{{ route('list.onlyCategory', ['category_id' => 0]) }}">category001<img src="{{ asset('images/front/icon_link.svg') }}"></a>
            </div>
            <div class="category_title">
                <a href="{{ route('list.onlyCategory', ['category_id' => 0]) }}">category001</a>
            </div>
        </div>
        <table>
            <tbody>
                <tr>
                    <td class="single_category_title"><a href="{{ route('list.bothAutherAndCategory', ['auther_id' => 0,'category_id' => 0]) }}">カテゴリー著者絞り</a></td>
                    <td class="single_category_auther"><a href="{{ route('list.onlyAuther', ['auther_id' => 0]) }}">名前テスト</a></td>
                    <td class="single_category_update"><span class="last_title">最終更新日</span><span class="last_date">2020/00/00</span></td>
                </tr>
                <tr>
                    <td class="single_category_title"><a href="{{ route('list.bothAutherAndCategory', ['auther_id' => 0,'category_id' => 0]) }}">カテゴリー著者絞り</a></td>
                    <td class="single_category_auther"><a href="{{ route('list.onlyAuther', ['auther_id' => 0]) }}">名前テスト</a></td>
                    <td class="single_category_update"><span class="last_title">最終更新日</span><span class="last_date">2020/00/00</span></td>
                </tr>
            </tbody> 
        </table>
    </div>

    <div class="pick_up patern_01">
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
</div>

<div class="category_list_inner">
    <div class="category_mass">
        <div class="category_title_area">
            <div class="to_category_link">
                <a href="{{ route('list.onlyCategory', ['category_id' => 0]) }}">category001<img src="{{ asset('images/front/icon_link.svg') }}"></a>
            </div>
            <div class="category_title">
                <a href="{{ route('list.onlyCategory', ['category_id' => 0]) }}">category001</a>
            </div>
        </div>
        <table>
            <tbody>
                <tr>
                    <td class="single_category_title"><a href="{{ route('list.bothAutherAndCategory', ['auther_id' => 0,'category_id' => 0]) }}">カテゴリー著者絞り</a></td>
                    <td class="single_category_auther"><a href="{{ route('list.onlyAuther', ['auther_id' => 0]) }}">名前テスト</a></td>
                    <td class="single_category_update"><span class="last_title">最終更新日</span><span class="last_date">2020/00/00</span></td>
                </tr>
                <tr>
                    <td class="single_category_title"><a href="{{ route('list.bothAutherAndCategory', ['auther_id' => 0,'category_id' => 0]) }}">カテゴリー著者絞り</a></td>
                    <td class="single_category_auther"><a href="{{ route('list.onlyAuther', ['auther_id' => 0]) }}">名前テスト</a></td>
                    <td class="single_category_update"><span class="last_title">最終更新日</span><span class="last_date">2020/00/00</span></td>
                </tr>
            </tbody> 
        </table>
    </div>

    <div class="pick_up patern_01">
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
</div>


<div class="category_list_inner">
    <div class="category_mass">
        <div class="category_title_area">
            <div class="to_category_link">
                <a href="{{ route('list.onlyCategory', ['category_id' => 0]) }}">category001<img src="{{ asset('images/front/icon_link.svg') }}"></a>
            </div>
            <div class="category_title">
                <a href="{{ route('list.onlyCategory', ['category_id' => 0]) }}">category001</a>
            </div>
        </div>
        <table>
            <tbody>
                <tr>
                    <td class="single_category_title"><a href="{{ route('list.bothAutherAndCategory', ['auther_id' => 0,'category_id' => 0]) }}">カテゴリー著者絞り</a></td>
                    <td class="single_category_auther"><a href="{{ route('list.onlyAuther', ['auther_id' => 0]) }}">名前テスト</a></td>
                    <td class="single_category_update"><span class="last_title">最終更新日</span><span class="last_date">2020/00/00</span></td>
                </tr>
                <tr>
                    <td class="single_category_title"><a href="{{ route('list.bothAutherAndCategory', ['auther_id' => 0,'category_id' => 0]) }}">カテゴリー著者絞り</a></td>
                    <td class="single_category_auther"><a href="{{ route('list.onlyAuther', ['auther_id' => 0]) }}">名前テスト</a></td>
                    <td class="single_category_update"><span class="last_title">最終更新日</span><span class="last_date">2020/00/00</span></td>
                </tr>
            </tbody> 
        </table>
    </div>

    <div class="pick_up patern_01">
        <div>
            <div class="swiper-container swiper_number_04">
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
                var mySwiper02 = new Swiper('.swiper_number_04', {
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
</div>

<div class="category_list_inner">
    <div class="category_mass">
        <div class="category_title_area">
            <div class="to_category_link">
                <a href="{{ route('list.onlyCategory', ['category_id' => 0]) }}">category001<img src="{{ asset('images/front/icon_link.svg') }}"></a>
            </div>
            <div class="category_title">
                <a href="{{ route('list.onlyCategory', ['category_id' => 0]) }}">category001</a>
            </div>
        </div>
        <table>
            <tbody>
                <tr>
                    <td class="single_category_title"><a href="{{ route('list.bothAutherAndCategory', ['auther_id' => 0,'category_id' => 0]) }}">カテゴリー著者絞り</a></td>
                    <td class="single_category_auther"><a href="{{ route('list.onlyAuther', ['auther_id' => 0]) }}">名前テスト</a></td>
                    <td class="single_category_update"><span class="last_title">最終更新日</span><span class="last_date">2020/00/00</span></td>
                </tr>
                <tr>
                    <td class="single_category_title"><a href="{{ route('list.bothAutherAndCategory', ['auther_id' => 0,'category_id' => 0]) }}">カテゴリー著者絞り</a></td>
                    <td class="single_category_auther"><a href="{{ route('list.onlyAuther', ['auther_id' => 0]) }}">名前テスト</a></td>
                    <td class="single_category_update"><span class="last_title">最終更新日</span><span class="last_date">2020/00/00</span></td>
                </tr>
            </tbody> 
        </table>
    </div>

    <div class="pick_up patern_01">
        <div>
            <div class="swiper-container swiper_number_05">
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
                var mySwiper05 = new Swiper('.swiper_number_05', {
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
</div>






</section>
</div>
</div>
@endsection