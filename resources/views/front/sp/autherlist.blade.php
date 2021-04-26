@extends('front.sp.include.layout')
@section('title', 'topページ')
@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{ asset('css/front/sp/list.css') }}">
<link rel="stylesheet" href="{{ asset('css/front/sp/auther.css') }}">
@endsection

@section('content')
<div class="container">
<div id="article_list" class="">
<section>
    <h2>Blogger</h2>
    @foreach(Config::get('auther') as $keyAuther => $confAuther)
    <div class="auther_mass">
        <img src="{{ asset('images/front/introduct/'.$confAuther['imgPath']) }}" class="face_pic">
        <div class="auther_name">{{$confAuther['name']}}</div>
        <div class="auther_profile_area">
            <div class="auther_category_title">plofile</div>
            <p class="auther_profile">{{$confAuther['profile']}}</p>
            <div class="auther_category_title">Greeting</div>
            <p class="auther_greeting hidden_area_open">{{$confAuther['greeting']}}</p>
            <div class="auther_category_title">よく書くこと</div>
            <ul class="auther_category_title_list">
                @foreach($confAuther["category"] as $keyCategory => $autherCategory)
                <li><a href="{{ route('list.bothAutherAndCategory', ['auther_id' => $keyAuther,'category_id' => $keyCategory,'page'=>1]) }}">・{{$autherCategory["name"]}}    ({{$autherCategory["day"]}})</a></li>
                @endforeach
            </ul>
        </div>

        @if(isset($articlesListPerAuther[$keyAuther]) && is_countable($articlesListPerAuther[$keyAuther]) && count($articlesListPerAuther[$keyAuther]) > 0)
        <div class="pick_up patern_01">
            <h3>{{$confAuther['name']}}のPick Up</h3>
            <div>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        @foreach ($articlesListPerAuther[$keyAuther] as $index => $articleData)
                        <div class="swiper-slide">
                            <div class="swiper-slide_inner">
                                <a href="{{ route('detail.article', ['article_id' => $articleData->id]) }}">
                                    <img src="{{ asset('images/front/top_link/image_190_150.png') }}" class="">
                                    <div class="title">{{$articleData -> title}}</div>
                                </a>
                                <div class="auther"><span>著者</span><a href="{{ route('list.onlyAuther', ['auther_id' => $articleData->auther]) }}">{{config("auther.$articleData->auther.name")}}</a></div>
                                <div class="category"><span>カテゴリー</span><a href="{{ route('list.bothAutherAndCategory', ['auther_id'=>$articleData->auther,'category_id'=>$articleData->auther_category,'page'=>1]) }}">{{config("auther.$articleData->auther.category.$articleData->auther_category.name")}}</a></div>
                                <div class="update_date">更新日 {{$articleData->release_at->format('Y/m/d')}}</div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                
                </div>
                <script>
                    var mySwiper = new Swiper('.swiper-container', {
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
        @endif



        <div class="to_auther_link"><a href="{{ route('list.onlyAuther', ['auther_id' => $keyAuther]) }}">{{$confAuther['name']}}の部屋へ</a></div>
    </div>
    <div class="section_separater_half"></div>
    @endforeach
</section>

</div>
</div>
@endsection