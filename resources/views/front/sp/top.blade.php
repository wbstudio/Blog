@extends('front.sp.include.layout')
@section('title', 'topページ')
@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{ asset('css/front/sp/list.css') }}">
<link rel="stylesheet" href="{{ asset('css/front/sp/auther.css') }}">
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
<div class="section_separater"></div>
<section>
    <h2>Blogger</h2>
    <div class="auther_mass">
        <img src="{{ asset('images/front/top_link/face_test.png') }}">
        <div class="auther_name">テスト名前テスト名前</div>
        <div class="auther_category">
            <div class="auther_category_title">よく書くこと</div>
            <ul class="auther_category_title_list">
                <li><a href="">・あああああああああああああ</a></li>
                <li><a href="">・あああああああああああああ</a></li>
                <li><a href="">・あああああああああああああ</a></li>
                <li><a href="">・あああああああああああああ</a></li>
                <li><a href="">・あああああああああああああ</a></li>
            </ul>
        </div>
        <div class="to_auther_link"><a href="">テスト名前テスト名前のページへ</a></div>
    </div>
    <div class="auther_mass">
        <img src="{{ asset('images/front/top_link/face_test.png') }}">
        <div class="auther_name">名前</div>
        <div class="auther_category">
            <div class="auther_category_title">よく書くこと</div>
            <ul class="auther_category_title_list">
                <li><a href="">・あああああああああああああ</a></li>
                <li><a href="">・あああああああああああああ</a></li>
                <li><a href="">・あああああああああああああ</a></li>
                <li><a href="">・あああああああああああああ</a></li>
                <li><a href="">・あああああああああああああ</a></li>
            </ul>
        </div>
        <div class="to_auther_link"><a href="">テスト名前テスト名前のページへ</a></div>
    </div>
</section>

<div class="section_separater_half"></div>
<section>
    <h2>Category</h2>
    <div class="category_list">
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
    </div>

    <div class="category_list">
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
    </div>

    <div class="category_list">
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
    </div>

    <div class="category_list">
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
                <a href="">テスト名前テスト名前</a>
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
    </div>

    <div class="category_list">
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
    </div>
</section>


<div class="section_separater"></div>
<section>
    <h2>How to use</h2>
</section>


<section>
    <h2>お問い合わせ</h2>
</section>


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