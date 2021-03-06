<html>
    <head>
        <title> - @yield('title')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, user-scalable=yes">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script src="{{ asset('js/front/pc/common.js') }}"></script>
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
        <link rel="stylesheet" href="{{ asset('css/front/pc/common.css') }}">
        <link rel="stylesheet" href="{{ asset('css/front/pc/list.css') }}">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" id="paddle-fonts-css" href="https://fonts.googleapis.com/css?family=Montserrat%3A400%2C700" type="text/css" media="all">
        @yield('head')
    </head>
    <body>
        <header>
            <div class="header_first_area">
                <div class="header_title_area">
                    <a href="{{ route('topPage') }}">
                        <img src="{{ asset('images/front/logo03.png') }}" height="45px">
                    </a>
                </div>
                <div class="header_btn_area">
                    <form method="POST" action="{{route('list.searchWordList')}}">
                    @csrf
                        <input type="text" name="search_word">
                        <input type="image" class="search" src="{{ asset('images/front/icon_search_button.svg') }}">
                    </form>
                    @auth
                        <a href="{{ route('member.index') }}" class="login">会員ページ</a>
                    @else
                        <a href="{{ route('login') }}" class="login">ログイン</a>
                        <a href="{{ route('register') }}" class="regist_member">新規登録</a>
                    @endauth
                </div>
            </div>
            <div class="header_second_area">
            <!--8つまでこのCSSでいけるはず-->
            <ul class="header_second_area_list">
                <li class="header_second_area_mass has-sub">
                    <a href="{{ route('autherList') }}">Blogger</a>
                    <ul class="sub narrow">
                        @foreach(Config::get('auther') as $keyAuther => $confAuther)
                        <li><a href="{{ route('list.onlyAuther', ['auther_id' => $keyAuther]) }}">{{$confAuther["name"]}}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li class="header_second_area_mass has-sub">
                    <a href="{{ route('categoryList') }}">Category</a>
                    <ul class="sub">
                        @foreach(Config::get('category') as $keyCategory => $confCategory)
                        <li><a href="{{ route('list.onlyCategory', ['category_id' => $keyCategory]) }}">{{$confCategory["name"]}}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li class="header_second_area_mass no-sub">
                    <a href="{{ route('inquiry.showForm') }}">Contact</a>
                    </li>
                <li class="header_second_area_mass no-sub">
                    <a href="{{ route('howtouse') }}">How to use</a>
                    </li>
                <li class="header_second_area_mass no-sub">
                    <a href="{{ route('thisblogis') }}">This Blog is...</a>
                </li>
            </ul>
            </div>
        </header>

        <div id="site_intro">
            <a href="{{ route('thisblogis') }}">
                @if($test_id > 9)
                <video src="{{ asset('images/front/top_link/top_image_'.$test_id.'_pc.mp4') }}" width="100%" muted autoplay loop></video>
                @else
                <img  src="{{ asset('images/front/top_link/top_image_'.$test_id.'_pc.png') }}" width="100%">
                @endif
            </a>
        </div>

        <div id="top_page_main">
            @if(isset($pickupList) && is_countable($pickupList))
            <div class="pick_up patern_01 top_area">
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
                                    <div class="category"><span>カテゴリー:</span><a href="{{ route('list.bothAutherAndCategory', ['auther_id'=>$pickup->auther,'category_id'=>$pickup->auther_category,'page'=>1]) }}">{{config("auther.$pickup->auther.category.$pickup->auther_category.name")}}</a></div>
                                    <div class="update_date">更新日:{{$pickup->release_at->format('Y/m/d')}}</div>
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

            <div id=side_navi class="content">
                @if(isset($newsList) && is_countable($newsList))
                <div class="side_news">
                    <div class="side_title">News</div>
                    <ul>
                        @foreach($newsList as $index => $news)
                        <li>
                            <a href="{{ route('detail.article', ['article_id' => $news->id]) }}">
                                <span class="side_navi_date">
                                    {{ $news->release_at->format('Y/m/d') }}
                                    @if($news->release_at > $threeDaysAgo)
                                    <img src="{{ asset('images/front/icon_new.png') }}" width="34px">
                                    @endif
                                </span>
                                <p title="{{$news->title}}" class="side_navi_title">
                                    {{$news->title}}
                                </p>
                            </a>
                            <div class="side_navi_auther">
                            @if(isset($news->auther))
                                <span style="color:#ccc;">筆者:</span>
                                <a href="{{ route('list.onlyAuther', ['auther_id' => $news->auther]) }}">{{config("auther.$news->auther.name")}}</a>
                            @endif
                            </div>
                            <div class="side_navi_category">
                            @if(isset($news->category_id))
                                <span style="color:#ccc;">カテゴリー:</span>
                                <a href="{{ route('list.bothAutherAndCategory', ['auther_id' => $news->auther,'category_id' => $news->auther_category,'page'=>1]) }}">{{config("auther.$news->auther.category.$news->auther_category.name")}}</a>
                            @endif
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endif


                @if(isset($newArticlesList) && is_countable($newArticlesList))
                <div class="side_recently">
                    <div class="side_title">Update</div>
                    <ul>
                        @foreach($newArticlesList as $index => $newArticle)
                        <li>
                            <a href="{{ route('detail.article', ['article_id' => $newArticle->id]) }}">
                                <span class="side_navi_date">
                                    {{ $newArticle->release_at->format('Y/m/d') }}
                                    @if($newArticle->release_at > $threeDaysAgo)
                                    <img src="{{ asset('images/front/icon_new.png') }}" width="34px">
                                    @endif
                                </span>
                                <p title="{{$newArticle->title}}" class="side_navi_title">
                                    {{$newArticle->title}}
                                </p>
                            </a>
                            <div class="side_navi_auther">
                                <span style="color:#ccc;">筆者:</span>
                                <a href="{{ route('list.onlyAuther', ['auther_id' => $newArticle->auther]) }}">{{config("auther.$newArticle->auther.name")}}</a>
                            </div>
                            <div class="side_navi_category">
                                <span style="color:#ccc;">カテゴリー:</span>
                                <a href="{{ route('list.bothAutherAndCategory', ['auther_id' => $newArticle->auther,'category_id' => $newArticle->auther_category,'page'=>1]) }}">{{config("auther.$newArticle->auther.category.$newArticle->auther_category.name")}}</a>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endif


                @if(isset($rankingList) && is_countable($rankingList))
                <div class="side_ranking">
                    <div class="side_title">Ranking</div>
                    <ul>
                        @foreach($rankingList as $index => $ranking)
                        <li>
                            <a href="{{ route('detail.article', ['article_id' => $ranking->id]) }}">
                                @if($index < 3)
                                <img src="{{ asset('images/front/icon_rank'.$index.'.png') }}" style="vertical-align: bottom;width:30px;">
                                @elseif($index == 3)
                                <span class="ranking">4位</span>
                                @else
                                <span class="ranking">5位</span>
                                @endif
                                <span class="side_navi_date">
                                    {{ $ranking->release_at->format('Y/m/d') }}
                                </span>
                                <p title="{{$ranking->title}}" class="side_navi_title">
                                    {{$ranking->title}}
                                </p>
                            </a>
                            <div class="side_navi_auther">
                                <span style="color:#ccc;">筆者:</span>
                                <a href="{{ route('list.onlyAuther', ['auther_id' => $ranking->auther]) }}">{{config("auther.$ranking->auther.name")}}</a>
                            </div>
                            <div class="side_navi_category">
                                <span style="color:#ccc;">カテゴリー:</span>
                                <a href="{{ route('list.bothAutherAndCategory', ['auther_id' => $ranking->auther,'category_id' => $ranking->auther_category,'page'=>1]) }}">{{config("auther.$ranking->auther.category.$ranking->auther_category.name")}}</a>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endif

            </div>
            <div id="content" class="content">
                @yield('content')
            </div>
        </div>
        
        <footer>
            @include('front.pc.include.footer')
        </footer>
    </body>
</html>