@extends('front.pc.include.layout')
@section('title', 'topページ')
@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<link rel="stylesheet" href="{{ asset('css/front/pc/auther.css') }}">
<link rel="stylesheet" href="{{ asset('css/front/pc/list.css') }}">
@endsection

@section('content')
<div class="container">
    <div id="auther_page" class="">
    <section id="blogger">
    <h2>Introduction</h2>
    <div class="blogger">
        <img src="{{ asset('images/front/introduct/'.config('auther.'.$autherId.'.imgPath')) }}" class="introduction">
        <div class="blogger_name">{!! nl2br(e(config("auther.".$autherId.".name"))) !!}</div>
        <div class="blogger_explain">
        <div class="blogger_explain_title">profile</div>
            <p class="blogger_explain_detail">
            {{config("auther.".$autherId.".profile")}}
            </p>
            <div class="blogger_explain_title">profile</div>
            <p class="blogger_explain_detail">
            {{config("auther.".$autherId.".greeting")}}
            </p>
            <div class="blogger_explain_title">更新予定</div>
            <p class="blogger_explain_detail">
            <table>
            @foreach(Config::get('auther.'.$autherId.'.updateInfo') as $key => $confUpdate)
            <tr><td>{{$confUpdate["day"]}}</td><td>{{$confUpdate["contents"]}}</td></tr>
            @endforeach
            </table>
            </p>
        </div>
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
                                <div class="auther"><span>著者:</span><a href="{{ route('list.onlyAuther', ['auther_id' => $pickup->auther]) }}">{{config("auther.$pickup->auther.name")}}</a></div>
                                <div class="category"><span>カテゴリー:</span><a href="{{ route('list.bothAutherAndCategory', ['auther_id'=>$pickup->auther,'category_id'=>0,'page' => 1]) }}">{{config("auther.$pickup->auther.category.$pickup->auther_category.name")}}</a></div>
                                <div class="update_date">更新日:{{$pickup->release_at}}</div>
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

    </section>

    <div class="section_separation"></div>

    <section id="category">
    <h2>Category</h2>
    <div class="category_inner">
        @foreach(Config::get('auther.'.$autherId.'.category') as $key => $confCategory)
        @if(isset($categoryArticlesList[$key]) && is_countable($categoryArticlesList[$key]))
        <div class="category_mass">
            <div class="category_title_area">
                <div class="to_category_link">
                    <a href="{{ route('list.bothAutherAndCategory', ['auther_id' => $autherId,'category_id' => $key,'page' => 1]) }}">
                        {{$confCategory["name"]}}
                        <img src="{{ asset('images/front/icon_link.svg') }}">
                    </a>
                </div>
                <div class="category_title">
                    <a href="{{ route('list.bothAutherAndCategory', ['auther_id' => $autherId,'category_id' => $key,'page' => 1]) }}">{{$confCategory["name"]}}</a>
                </div>
            </div>
            <div class="category_explain">
                <p>
                {{$confCategory["explain"]}}
                </p>
            </div>
            <div class="category_mass_inner">
                @foreach($categoryArticlesList[$key] as $categoryArticle)
                <div class="category_mass_inner_single">
                    <div class="category_mass_inner_contents">
                        <a href="{{ route('detail.article', ['article_id' => $categoryArticle->id]) }}">
                            <img src="{{ asset('images/front/top_link/image_190_150.png') }}" class="">
                            <div class="title">{{$categoryArticle->title}}</div>
                        </a>
                        <div class="update_date">更新日:{{$categoryArticle->release_at->format('Y/m/d')}}</div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endif
        @endforeach
    </div>
    </section>

    <div class="section_separation"></div>

    <section id="sns">
    <h2>SNS</h2>
    <div>
        <table>
        </table>
    </div>
    </section>

</div>
</div>
@endsection