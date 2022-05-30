@extends('front.pc.include.layout')
@section('title', 'articleページ')
@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="{{ asset('js/front/pc/common.js') }}"></script>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<link rel="stylesheet" href="{{ asset('css/front/pc/list.css') }}">
<link rel="stylesheet" href="{{ asset('css/front/pc/article.css') }}">

@endsection

@section('content')
<div class="container">
    <div id="article_page" class="">
    <section id="article_area">
        <div class="article_info_area">
            <div class="article_info_writer">
                <img src="{{ asset('images/front/introduct/'.$confAuther['imgPath']) }}" class="">
                {{$confAuther['name']}}
            </div>
            <div class="article_info_category">-{{$confAuther['category'][$article->auther_category]['name']}}</div>
            <div class="article_info_date">更新日時:{{$article->release_at->format('Y/m/d')}}</div>
        </div>
        <h2 class="article_title">{{$article->title}}</h2>
        <div class="article_tag_area">
            @if(isset($tags) && count($tags) > 0)
            @foreach($tags as $tag)
            <a href="{{ route('list.tagArticleList', ['tag_id' => $tag->id,'page' => 1]) }}"><div class="tag_single">{{$tag->name}}</div></a>
            @endforeach        
            @endif
        </div>
        <div class="article_main">{!!$article->main!!}</div>
    </section>
@if($article->status == 2)
    @if(isset($prevData[0]) && !empty($prevData[0]) || (isset($nextData[0]) && !empty($nextData[0])))
    <section id="same_auther_category">
        <div class="title">
            他の{{$confAuther['category'][$article->auther_category]['name']}}の記事
        </div>
        <div class="link_area">
            @if(isset($prevData[0]) && !empty($prevData[0]))
            <div class="preview">
                <a href="{{ route('detail.article', ['article_id' => $prevData[0]->id]) }}">
                    ＜前の記事
                    <div class="preview_link">{{$prevData[0]->title}}</div>
                </a>
            </div>
            @endif
            @if(isset($nextData[0]) && !empty($nextData[0]))
            <div class="next">
                <a href="{{ route('detail.article', ['article_id' => $nextData[0]->id]) }}">
                    ＞次の記事
                    <div class="next_link">{{$nextData[0]->title}}</div>
                </a>
            </div>
            @endif
        </div>
    </section>
    @endif

    <section id="relative">
    <div class="relative_title">関連記事</div>

    @if(isset($recommendData) && count($recommendData) > 0)
    <div class="pick_up patern_01">
        <h3>この記事を読んだあなたへのお勧め</h3>
        <div>
            <div class="swiper-container swiper_number_01">
                <div class="swiper-wrapper">

                    @foreach($recommendData as $key => $articleData)
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
                            <div class="auther"><span>著者</span><a href="{{ route('list.onlyAuther', ['auther_id' => $articleData->id]) }}">{{config("auther.$articleData->auther.name")}}</a></div>
                            <div class="category"><span>カテゴリー</span><a href="{{ route('list.bothAutherAndCategory', ['auther_id'=>$articleData->auther,'category_id'=>$articleData->auther_category,'page'=>1]) }}">{{config("auther.$articleData->auther.category.$articleData->auther_category.name")}}</a></div>
                            <div class="update_date">更新日 {{ $articleData->release_at->format('Y/m/d') }}</div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="swiper-pagination" style="position:relative;"></div>
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

    @if(isset($categoryRelativeData) && count($categoryRelativeData) > 0)
    <div class="pick_up patern_01">
        <h3>カテゴリーがcategory001の記事</h3>
        <div>
            <div class="swiper-container swiper_number_02">
                <div class="swiper-wrapper">

                    @foreach($categoryRelativeData as $key => $articleData)
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
                            <div class="auther"><span>著者</span><a href="{{ route('list.onlyAuther', ['auther_id' => $articleData->id]) }}">{{config("auther.$articleData->auther.name")}}</a></div>
                            <div class="category"><span>カテゴリー</span><a href="{{ route('list.bothAutherAndCategory', ['auther_id'=>$articleData->auther,'category_id'=>$articleData->auther_category,'page'=>1]) }}">{{config("auther.$articleData->auther.category.$articleData->auther_category.name")}}</a></div>
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
    @endif
    @if(isset($tagsRelativeData) && count($tagsRelativeData) > 0)
    <div class="pick_up patern_01">
        <h3>同じタグのついている記事</h3>
        <div>
            <div class="swiper-container swiper_number_03">
                <div class="swiper-wrapper">
                    @foreach($tagsRelativeData as $key => $articleData)
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
                            <div class="auther"><span>著者</span><a href="{{ route('list.onlyAuther', ['auther_id' => $articleData->id]) }}">{{config("auther.$articleData->auther.name")}}</a></div>
                            <div class="category"><span>カテゴリー</span><a href="{{ route('list.bothAutherAndCategory', ['auther_id'=>$articleData->auther,'category_id'=>$articleData->auther_category,'page'=>1]) }}">{{config("auther.$articleData->auther.category.$articleData->auther_category.name")}}</a></div>
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
    @endif
    </section>
@endif

</div>
</div>
@endsection