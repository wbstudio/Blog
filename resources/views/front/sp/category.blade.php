@extends('front.sp.include.layout')
@section('title', 'topページ')
@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{ asset('css/front/sp/list.css') }}">
<link rel="stylesheet" href="{{ asset('css/front/sp/auther.css') }}">
<script>
jQuery(function () {
    $('.open').readmore({
        speed: 750,
        collapsedHeight: 41,
        moreLink: '<a class="btn" href="#"><span>...[続きを読む]</span></a>',//続きを読むボタンタグ
        lessLink: '<a class="btn_close" href="#"><span>閉じる</span></a>'//閉じるボタンタグ
    });
});
</script>

@endsection

@section('content')
<div class="container">
<div id="category_page" class="">
<section>
    <h2 class="first_h2 narrow">Category001</h2>

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
            <div class="category_explain">
                <div class="inner_auther">テスト名前テスト名前の記事</div>
                <p class="open">カテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明text</p>
            </div>
            <div class="category_pickup_article">
                <div class="article_mass">
                    <a href="">
                        <img src="{{ asset('images/front/top_link/image_190_150.png') }}" class="">
                        <div class="title">
                            01タイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテスト
                        </div>
                    </a>
                    <div class="update_date">更新日 2021/00/00</div>                
                </div>
                <div class="article_mass">
                    <a href="">
                        <img src="{{ asset('images/front/top_link/image_190_150.png') }}" class="">
                        <div class="title">
                            01タイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテスト
                        </div>
                    </a>
                    <div class="update_date">更新日 2021/00/00</div>                
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
            <div class="category_explain">
                <div class="inner_auther">テスト名前テスト名前の記事</div>
                <p class="open">カテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明text</p>
            </div>
            <div class="category_pickup_article">
                <div class="article_mass">
                    <a href="">
                        <img src="{{ asset('images/front/top_link/image_190_150.png') }}" class="">
                        <div class="title">
                            01タイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテスト
                        </div>
                    </a>
                    <div class="update_date">更新日 2021/00/00</div>                
                </div>
                <div class="article_mass">
                    <a href="">
                        <img src="{{ asset('images/front/top_link/image_190_150.png') }}" class="">
                        <div class="title">
                            01タイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテスト
                        </div>
                    </a>
                    <div class="update_date">更新日 2021/00/00</div>                
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
            <div class="category_explain">
                <div class="inner_auther">テスト名前テスト名前の記事</div>
                <p>カテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明text</p>
            </div>
            <div class="category_pickup_article">
                <div class="article_mass">
                    <a href="">
                        <img src="{{ asset('images/front/top_link/image_190_150.png') }}" class="">
                        <div class="title">
                            01タイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテスト
                        </div>
                    </a>
                    <div class="update_date">更新日 2021/00/00</div>                
                </div>
                <div class="article_mass">
                    <a href="">
                        <img src="{{ asset('images/front/top_link/image_190_150.png') }}" class="">
                        <div class="title">
                            01タイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテスト
                        </div>
                    </a>
                    <div class="update_date">更新日 2021/00/00</div>                
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
            <div class="category_explain">
                <div class="inner_auther">テスト名前テスト名前の記事</div>
                <p>カテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明text</p>
            </div>
            <div class="category_pickup_article">
                <div class="article_mass">
                    <a href="">
                        <img src="{{ asset('images/front/top_link/image_190_150.png') }}" class="">
                        <div class="title">
                            01タイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテスト
                        </div>
                    </a>
                    <div class="update_date">更新日 2021/00/00</div>                
                </div>
                <div class="article_mass">
                    <a href="">
                        <img src="{{ asset('images/front/top_link/image_190_150.png') }}" class="">
                        <div class="title">
                            01タイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテスト
                        </div>
                    </a>
                    <div class="update_date">更新日 2021/00/00</div>                
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
            <div class="category_explain">
                <div class="inner_auther">テスト名前テスト名前の記事</div>
                <p>カテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明textカテゴリーの説明text</p>
            </div>
            <div class="category_pickup_article">
                <div class="article_mass">
                    <a href="">
                        <img src="{{ asset('images/front/top_link/image_190_150.png') }}" class="">
                        <div class="title">
                            01タイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテスト
                        </div>
                    </a>
                    <div class="update_date">更新日 2021/00/00</div>                
                </div>
                <div class="article_mass">
                    <a href="">
                        <img src="{{ asset('images/front/top_link/image_190_150.png') }}" class="">
                        <div class="title">
                            01タイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテストタイトルテスト
                        </div>
                    </a>
                    <div class="update_date">更新日 2021/00/00</div>                
                </div>
            </div>
            <a href=""><div class="more">MORE</div></a>
        </div>

    </div>


</section>


</div>
</div>
@endsection