@extends('front.sp.include.layout')
@section('title', 'topページ')
@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{ asset('css/front/sp/list.css') }}">
<link rel="stylesheet" href="{{ asset('css/front/sp/article.css') }}">
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
    </div>
    <h2 class="article_title">{{$article->title}}</h2>
    <div class="article_info_date">更新日時:{{$article->release_at->format('Y/m/d')}}</div>
    <div class="article_main">{!!$article->main!!}</div>
    <div class="article_tag_area">
        タグ：
        @if(isset($tags) && count($tags) > 0)
        @foreach($tags as $tag)
        <a href="{{ route('list.tagArticleList', ['tag_id' => $tag->id,'page' => 1]) }}"><div class="tag_single">{{$tag->name}}</div></a>
        @endforeach        
        @endif
    </div>
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
                次の記事＞
                <div class="next_link">{{$nextData[0]->title}}</div>
            </a>
        </div>
        @endif
    </div>
</section>
@endif


<section id="relation">
    <div class="head_title">関連記事</div>
    <div class="relative_category">
        @if(isset($recommendData) && count($recommendData) > 0)
        <div class="relative_title">この記事を読んだあなたへのお勧め</div>
        <div class="pick_up patern_01">
            <div>
                <div class="swiper-container swiper_number_01">
                    <div class="swiper-wrapper">
                        @foreach($recommendData as $key => $articleData)
                        <div class="swiper-slide">
                            <div class="swiper-slide_inner">
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
                    var mySwiper01 = new Swiper('.swiper_number_01', {
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
    </div>
    <div class="relative_category">
        @if(isset($categoryRelativeData) && count($categoryRelativeData) > 0)
        <div class="relative_title">同じcategory001の記事</div>
        <div class="pick_up patern_01">
            <div>
                <div class="swiper-container swiper_number_02">
                    <div class="swiper-wrapper">
                        @foreach($categoryRelativeData as $key => $articleData)
                        <div class="swiper-slide">
                            <div class="swiper-slide_inner">
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
    </div>
    <div class="relative_tag">
        @if(isset($tagsRelativeData) && count($tagsRelativeData) > 0)
        <div class="relative_title">同じタグの記事</div>
        <div class="pick_up patern_01">
            <div>
                <div class="swiper-container swiper_number_03">
                    <div class="swiper-wrapper">
                        @foreach($tagsRelativeData as $key => $articleData)
                        <div class="swiper-slide">
                            <div class="swiper-slide_inner">
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
    </div>
</section>
@endif

</div>
</div>
@endsection