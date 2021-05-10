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
@foreach(Config::get('category') as $keyCategory => $confCategory)
<div class="category_list_inner">
    <div class="category_mass">
        <div class="category_title_area">
            <div class="to_category_link">
                <a href="{{ route('list.onlyCategory', ['category_id' => $keyCategory]) }}">{{$confCategory["name"]}}<img src="{{ asset('images/front/icon_link.svg') }}"></a>
            </div>
            <div class="category_title">
                <a href="{{ route('list.onlyCategory', ['category_id' => $keyCategory]) }}">{{$confCategory["name"]}}</a>
            </div>
        </div>
        <table>
            <tbody>
                @foreach(Config::get('auther') as $keyAuther => $confAuther)
                @if(isset($confAuther["category"][$keyCategory]))
                <tr>
                    <td class="single_category_title"><a href="{{ route('list.bothAutherAndCategory', ['auther_id' => $keyAuther,'category_id' => $keyCategory,'page'=>1]) }}">{{$confAuther["category"][$keyCategory]["name"]}}</a></td>
                    <td class="single_category_auther"><a href="{{ route('list.onlyAuther', ['auther_id' => $keyAuther]) }}">{{$confAuther["name"]}}</a></td>
                </tr>
                @endif
                @endforeach                
            </tbody> 
        </table>
    </div>
    @if(isset($articlesListPerCategory[$keyCategory]) && count($articlesListPerCategory[$keyCategory]) > 0)
    <div class="pick_up patern_01">
        <div>
            <div class="swiper-container swiper_number_01">
                <div class="swiper-wrapper">

                    @foreach($articlesListPerCategory[$keyCategory] as $articleData)
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
                            <div class="category"><span>カテゴリー</span><a href="{{ route('list.bothAutherAndCategory', ['auther_id' => $articleData->auther,'category_id' => $articleData->auther_category,'page'=>1]) }}">{{config("auther.$articleData->auther.category.$articleData->auther_category.name")}}</a></div>
                            <div class="update_date">更新日 {{ $articleData->release_at->format('Y/m/d') }}</div>
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
    @endif
</div>

@endforeach

</section>
</div>
</div>
@endsection