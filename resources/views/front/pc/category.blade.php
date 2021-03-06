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
        <div class="pick_up patern_01">
            <h3>CategoryのPick Up</h3>
            <div>
                <div class="swiper-container">
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
        <div class="section_separation"></div>

        <div class="category_mass">
            <div class="category_title_area">
                <div class="to_category_link">
                    <a href="{{ route('list.bothAutherAndCategory', ['auther_id' => 0,'category_id' => 0]) }}">
                        category001
                        <img src="{{ asset('images/front/icon_link.svg') }}">
                    </a>
                </div>
                <div class="category_title">
                    <a href="{{ route('list.bothAutherAndCategory', ['auther_id' => 0,'category_id' => 0]) }}">category001</a>
                    <a href="{{ route('list.onlyAuther', ['auther_id' => 0]) }}" class="category_auther_link">(テスト名前のcategory)</a>                    
                </div>
            </div>
            <div class="category_explain">
                <p title="カテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明text">
                    カテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明text
                </p>
            </div>
            <div class="category_mass_inner">
                <div class="category_mass_inner_single">
                    <div class="category_mass_inner_contents">
                        <a href="">
                            <img src="{{ asset('images/front/top_link/image_190_150.png') }}" class="">
                            <div class="title">01タイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテスト</div>
                        </a>
                        <div class="update_date">更新日:2021/00/00</div>
                    </div>
                </div>
                <div class="category_mass_inner_single">
                    <div class="category_mass_inner_contents">
                        <a href="">
                            <img src="{{ asset('images/front/top_link/image_190_150.png') }}" class="">
                            <div class="title">01タイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテスト</div>
                        </a>
                        <div class="update_date">更新日:2021/00/00</div>
                    </div>
                </div>
                <div class="category_mass_inner_single">
                    <div class="category_mass_inner_contents">
                        <a href="">
                            <img src="{{ asset('images/front/top_link/image_190_150.png') }}" class="">
                            <div class="title">01タイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテスト</div>
                        </a>
                        <div class="update_date">更新日:2021/00/00</div>
                    </div>
                </div>
                <div class="category_mass_inner_single">
                    <div class="category_mass_inner_contents">
                        <a href="">
                            <img src="{{ asset('images/front/top_link/image_190_150.png') }}" class="">
                            <div class="title">01タイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテスト</div>
                        </a>
                        <div class="update_date">更新日:2021/00/00</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="category_mass">
            <div class="category_title_area">
                <div class="to_category_link">
                    <a href="{{ route('list.bothAutherAndCategory', ['auther_id' => 0,'category_id' => 0]) }}">
                        category001
                        <img src="{{ asset('images/front/icon_link.svg') }}">
                    </a>
                </div>
                <div class="category_title">
                <a href="{{ route('list.bothAutherAndCategory', ['auther_id' => 0,'category_id' => 0]) }}">category001</a>
                <a href="{{ route('list.onlyAuther', ['auther_id' => 0]) }}" class="category_auther_link">(テスト名前のcategory)</a>                    
                </div>
            </div>
            <div class="category_explain">
                <p>
                    カテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明text
                </p>
            </div>
            <div class="category_mass_inner">
                <div class="category_mass_inner_single">
                    <div class="category_mass_inner_contents">
                        <a href="">
                            <img src="{{ asset('images/front/top_link/image_190_150.png') }}" class="">
                            <div class="title">01タイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテスト</div>
                        </a>
                        <div class="update_date">更新日:2021/00/00</div>
                    </div>
                </div>
                <div class="category_mass_inner_single">
                    <div class="category_mass_inner_contents">
                        <a href="">
                            <img src="{{ asset('images/front/top_link/image_190_150.png') }}" class="">
                            <div class="title">01タイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテスト</div>
                        </a>
                        <div class="update_date">更新日:2021/00/00</div>
                    </div>
                </div>
                <div class="category_mass_inner_single">
                    <div class="category_mass_inner_contents">
                        <a href="">
                            <img src="{{ asset('images/front/top_link/image_190_150.png') }}" class="">
                            <div class="title">01タイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテスト</div>
                        </a>
                        <div class="update_date">更新日:2021/00/00</div>
                    </div>
                </div>
                <div class="category_mass_inner_single">
                    <div class="category_mass_inner_contents">
                        <a href="">
                            <img src="{{ asset('images/front/top_link/image_190_150.png') }}" class="">
                            <div class="title">01タイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテスト</div>
                        </a>
                        <div class="update_date">更新日:2021/00/00</div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>
</div>
@endsection