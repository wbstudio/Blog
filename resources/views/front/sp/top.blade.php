@extends('front.sp.include.layout')
@section('title', 'topページ')
@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{ asset('css/front/sp/list.css') }}">
<link rel="stylesheet" href="{{ asset('css/front/sp/auther.css') }}">
@endsection

@section('content')
<a href="{{ route('thisblogis') }}">
    <video src="{{ asset('images/front/top_link/top_image_1_sp.mp4') }}" width="100%" muted autoplay loop playsinline></video>
</a>
<div class="container">
<div id="top_page" class="">
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
                            @if(isset($pickup->eyecatch))
                            <img src="{{ asset('images/admin/article/eyecatch/' .$pickup->eyecatch)}}" class="">
                            @else
                            <img src="{{ asset('images/admin/article/eyecatch/no_image.png')}}" class="">
                            @endif
                            <div class="title">{{$pickup -> title}}</div>
                        </a>
                        <div class="auther"><span>著者</span><a href="{{ route('list.onlyAuther', ['auther_id' => $pickup->auther]) }}">{{config("auther.$pickup->auther.name")}}</a></div>
                        <div class="category"><span>カテゴリー</span><a href="{{ route('list.bothAutherAndCategory', ['auther_id'=>$pickup->auther,'category_id'=>$pickup->auther_category,'page'=>1]) }}">{{config("auther.$pickup->auther.category.$pickup->auther_category.name")}}</a></div>
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
<div class="section_separater"></div>
<section>
    <h2>Blogger</h2>
    @foreach(Config::get('auther') as $keyAuther => $confAuther)
    <div class="auther_mass">
        <img src="{{ asset('images/front/introduct/'.$confAuther['imgPath']) }}" class="face_pic">
        <div class="auther_name">{{$confAuther['name']}}</div>
        <div class="auther_profile_area">
            <div class="auther_category_title">よく書くこと</div>
            <ul class="auther_category_title_list">
                @foreach($confAuther["category"] as $keyCategory => $autherCategory)
                <li><a href="{{ route('list.bothAutherAndCategory', ['auther_id' => $keyAuther,'category_id' => $keyCategory,'page'=>1]) }}">・{{$autherCategory["name"]}}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="to_auther_link"><a href="{{ route('list.onlyAuther', ['auther_id' => $keyAuther]) }}">{{$confAuther['name']}}の部屋へ</a></div>
    </div>
    @endforeach
</section>

<div class="section_separater_half"></div>
<section>
    <h2>Category</h2>

    @foreach(Config::get('category') as $keyCategory => $confCategory)
    <div class="category_list">
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
                    <a href="{{ route('list.onlyAuther', ['auther_id' => 0]) }}">{{$confAuther["name"]}}</a>
                </td>
            </tr>
            @endif
            @endforeach
        </table>
    </div>
    @endforeach

</section>


<div class="section_separater"></div>
<section>
    <h2>How to use</h2>
    <div>
    ・軽く説明<br>
    ・りんく<br>
    </div>
</section>


<section>
    <h2>お問い合わせ</h2>
    <div>
    ・loginが必要<br>
    ・誰宛か選べる<br>
    ・りんく<br>
    </div>
</section>


</div>
</div>
@endsection