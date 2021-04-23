@extends('front.sp.include.layout')
@section('title', 'topページ')
@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{ asset('css/front/sp/list.css') }}">
<link rel="stylesheet" href="{{ asset('css/front/sp/auther.css') }}">
@endsection

@section('content')
<div class="container">
<div id="category_page" class="">
<section>
    <h2 class="first_h2 narrow">{{config("category.$categoryId.name")}}</h2>
    @if(isset($pickupList) && is_countable($pickupList))
    <div class="pick_up patern_01">
        <h3>Pick Up</h3>
        <div>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    @foreach ($pickupList as $index => $pickup)
                    <div class="swiper-slide">
                        <div class="swiper-slide_inner">
                            <a href="{{ route('detail.article', ['article_id' => $pickup->id]) }}">
                                <img src="{{ asset('images/front/top_link/image_190_150.png') }}" class="">
                                <div class="title">{{$pickup -> title}}</div>
                            </a>
                            <div class="category"><span>著者:</span><a href="{{ route('list.onlyAuther', ['auther_id' => $pickup->auther]) }}">{{config("auther.$pickup->auther.name")}}</a></div>
                            <div class="category"><span>カテゴリー</span><a href="{{ route('list.bothAutherAndCategory', ['auther_id'=>$pickup->auther,'category_id'=>0,'page'=>1]) }}">{{config("auther.$pickup->auther.category.$pickup->auther_category.name")}}</a></div>
                            <div class="update_date">更新日 {{$pickup->release_at->format('Y/m/d')}}</div>
                        </div>
                    </div>
                    @endforeach
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
    @endif

    <div class="category_list">
        @foreach(Config::get('auther') as $keyAuther => $confAuther)
        @if(isset($articlesListByCategoryId[$keyAuther]) && count($articlesListByCategoryId[$keyAuther]) > 0)    
        <div class="category_mass">
            <div class="category_title">
                <div class="to_category_link">
                    <a href="{{ route('list.bothAutherAndCategory', ['auther_id' => $keyAuther,'category_id' => $categoryId,'page' => 1]) }}">
                        記事一覧へ
                        <img src="{{ asset('images/front/icon_to_link_finger.svg') }}">
                    </a>
                </div>
                <div class="category_name">
                    <a href="{{ route('list.bothAutherAndCategory', ['auther_id' => $keyAuther,'category_id' => $categoryId,'page' => 1]) }}">{{$confAuther["category"][$categoryId]["name"]}}</a>
                </div>
            </div>
            <div class="category_explain">
                <div class="inner_auther">{{$confAuther["name"]}}の記事</div>
                <p class="hidden_area_open">{{$confAuther["category"][$categoryId]["explain"]}}</p>
            </div>
            <div class="category_pickup_article">
                @foreach($articlesListByCategoryId[$keyAuther] as $key => $articleList)
                @if($loop->iteration < 3)
                <div class="article_mass">
                    <a href="{{ route('detail.article', ['article_id' => $articleList->id]) }}">
                        <img src="{{ asset('images/front/top_link/image_190_150.png') }}" class="">
                        <div class="title">
                            {{$articleList -> title}}
                        </div>
                    </a>
                    <div class="update_date">更新日 {{ $articleList->release_at->format('Y/m/d') }}</div>                
                </div>
                @endif
                @endforeach
            </div>
            <a href="{{ route('list.bothAutherAndCategory', ['auther_id' => $keyAuther,'category_id' => $categoryId,'page' => 1]) }}"><div class="more">MORE</div></a>
        </div>
        @endif
        @endforeach

    </div>

</section>


</div>
</div>
@endsection