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

        @foreach(Config::get('category') as $keyCategory => $confCategory)
        <div class="category_mass">
            <div class="category_title">
                <div class="to_category_link">
                    <a href="{{ route('list.onlyCategory', ['category_id' => $keyCategory]) }}">
                        {{$confCategory["name"]}}
                        <img src="{{ asset('images/front/icon_link.svg') }}">
                    </a>
                </div>
                <div class="category_name">
                    <a href="{{ route('list.onlyCategory', ['category_id' => $keyCategory]) }}">{{$confCategory["name"]}}</a>
                </div>
            </div>
            <table>
                @foreach(Config::get('auther') as $keyAuther => $confAuther)
                @if(isset($confAuther["category"][$keyCategory]))
                <tr>
                    <td class="auther_category">
                        <a href="{{ route('list.bothAutherAndCategory', ['auther_id' => $keyAuther,'category_id' => $keyCategory,'page'=>1]) }}">{{$confAuther["category"][$keyCategory]["name"]}}</a>
                    </td>
                    <td class="auther">
                        <a href="{{ route('list.onlyAuther', ['auther_id' => $keyAuther]) }}">{{$confAuther["name"]}}</a>
                    </td>
                </tr>
                @endif
                @endforeach                
            </table>
            @if(isset($articlesListPerCategory[$keyCategory]) && count($articlesListPerCategory[$keyCategory]) > 0)
            <div class="pick_up patern_01">
                <div>
                    <div class="swiper-container swiper_number_01">
                        <div class="swiper-wrapper">
                            @foreach($articlesListPerCategory[$keyCategory] as $articleData)
                            <div class="swiper-slide">
                                <div class="swiper-slide_inner">
                                    <a href="{{ route('detail.article', ['article_id' => $articleData->id]) }}">
                                        <img src="{{ asset('images/front/top_link/image_190_150.png') }}" class="">
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

            <a href="{{ route('list.onlyCategory', ['category_id' => $keyCategory]) }}"><div class="more">MORE</div></a>
        </div>
        @endforeach

    </div>

</section>


</div>
</div>
@endsection