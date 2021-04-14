<html>
    <head>
        <title> - @yield('title')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, user-scalable=yes">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
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
                        <img src="{{ asset('images/front/logo.png') }}" height="45px">
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
                <a href=""><img src="{{ asset('images/front/top_link/test_link.png') }}"></a>
                <a href=""><img src="{{ asset('images/front/top_link/test_link.png') }}"></a>
                <a href=""><img src="{{ asset('images/front/top_link/test_link.png') }}"></a>
                <a href=""><img src="{{ asset('images/front/top_link/test_link.png') }}"></a>
                <a href=""><img src="{{ asset('images/front/top_link/test_link.png') }}"></a>
                <a href=""><img src="{{ asset('images/front/top_link/test_link.png') }}"></a>
                <a href=""><img src="{{ asset('images/front/top_link/test_link.png') }}"></a>
                <a href=""><img src="{{ asset('images/front/top_link/test_link.png') }}"></a>
            </div>
        </header>

        <div id="site_intro">
            <a href="">
                <img  src="{{ asset('images/front/top_link/test_image_1920_550.png') }}" width="100%">
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
                                    <div class="category"><span>カテゴリー:</span><a href="{{ route('list.bothAutherAndCategory', ['auther_id'=>$pickup->auther,'category_id'=>0]) }}">{{config("auther.$pickup->auther.category.$pickup->auther_category.name")}}</a></div>
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


            <div id=side_navi class="content">
                <div class="side_news">
                    <div class="side_title">news</div>
                    <ul>
                        <li>
                            <a href="{{ route('detail.article', ['article_id' => 0]) }}"><span class="side_navi_date">11月11日(newIcon)</span>
                                <p title="aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa" class="side_navi_title">
                                    リンクリンクリンク
                                </p>
                            </a>
                            <div class="side_navi_auther">
                                <span style="color:#ccc;">筆者:</span>
                                <a href="{{ route('list.onlyAuther', ['auther_id' => 0]) }}">名前テスト</a>
                            </div>
                            <div class="side_navi_category">
                                <span style="color:#ccc;">カテゴリー:</span>
                                <a href="{{ route('list.bothAutherAndCategory', ['auther_id' => 0,'category_id' => 0]) }}">名前テスト</a>
                            </div>
                        </li>
                        <li>
                            <a href="{{ route('detail.article', ['article_id' => 0]) }}"><span class="side_navi_date">11月11日(newIcon)</span>
                                <p title="aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa" class="side_navi_title">
                                    リンクリンクリンクリンクリンクリンクリンクリンクリンクリンクリンクリンクリンクリンクリンクリンク
                                </p>
                            </a>
                            <div class="side_navi_auther">
                                <span style="color:#ccc;">筆者:</span>
                                <a href="{{ route('list.onlyAuther', ['auther_id' => 0]) }}">名前テスト</a>
                            </div>
                            <div class="side_navi_category">
                                <span style="color:#ccc;">カテゴリー:</span>
                                <a href="{{ route('list.bothAutherAndCategory', ['auther_id' => 0,'category_id' => 0]) }}">名前テスト</a>
                            </div>
                        </li>
                        <li>
                            <a href="{{ route('detail.article', ['article_id' => 0]) }}"><span class="side_navi_date">11月11日(newIcon)</span>
                                <p title="aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa" class="side_navi_title">
                                    リンクリンクリンクリンクリンクリンクリンクリンクリンクリンクリンクリンクリンクリンクリンクリンク
                                </p>
                            </a>
                            <div class="side_navi_auther">
                                <span style="color:#ccc;">筆者:</span>
                                <a href="{{ route('list.onlyAuther', ['auther_id' => 0]) }}">名前テスト</a>
                            </div>
                            <div class="side_navi_category">
                                <span style="color:#ccc;">カテゴリー:</span>
                                <a href="{{ route('list.bothAutherAndCategory', ['auther_id' => 0,'category_id' => 0]) }}">名前テスト</a>
                            </div>
                        </li>
                        <li>
                            <a href="{{ route('detail.article', ['article_id' => 0]) }}"><span class="side_navi_date">11月11日(newIcon)</span>
                                <p title="aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa" class="side_navi_title">
                                    リンクリンクリンクリンクリンクリンクリンクリンクリンクリンクリンクリンクリンクリンクリンクリンク
                                </p>
                            </a>
                            <div class="side_navi_auther">
                                <span style="color:#ccc;">筆者:</span>
                                <a href="{{ route('list.onlyAuther', ['auther_id' => 0]) }}">名前テスト</a>
                            </div>
                            <div class="side_navi_category">
                                <span style="color:#ccc;">カテゴリー:</span>
                                <a href="{{ route('list.bothAutherAndCategory', ['auther_id' => 0,'category_id' => 0]) }}">名前テスト</a>
                            </div>
                        </li>
                        <li>
                            <a href="{{ route('detail.article', ['article_id' => 0]) }}"><span class="side_navi_date">11月11日(newIcon)</span>
                                <p title="aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa" class="side_navi_title">
                                    リンクリンクリンクリンクリンクリンクリンクリンクリンクリンクリンクリンクリンクリンクリンクリンク
                                </p>
                            </a>
                            <div class="side_navi_auther">
                                <span style="color:#ccc;">筆者:</span>
                                <a href="{{ route('list.onlyAuther', ['auther_id' => 0]) }}">名前テスト</a>
                            </div>
                            <div class="side_navi_category">
                                <span style="color:#ccc;">カテゴリー:</span>
                                <a href="{{ route('list.bothAutherAndCategory', ['auther_id' => 0,'category_id' => 0]) }}">名前テスト</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="side_recently">
                    <div class="side_title">topics</div>
                    <ul>
                        <li>
                            <a href="{{ route('detail.article', ['article_id' => 0]) }}"><span class="side_navi_date">11月11日(newIcon)</span>
                                <p title="aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa" class="side_navi_title">
                                    リンクリンクリンクリンクリンクリンクリンクリンクリンクリンクリンクリンクリンクリンクリンクリンク
                                </p>
                            </a>
                            <div class="side_navi_auther">
                                <span style="color:#ccc;">筆者:</span>
                                <a href="{{ route('list.onlyAuther', ['auther_id' => 0]) }}">名前テスト</a>
                            </div>
                            <div class="side_navi_category">
                                <span style="color:#ccc;">カテゴリー:</span>
                                <a href="{{ route('list.bothAutherAndCategory', ['auther_id' => 0,'category_id' => 0]) }}">名前テスト</a>
                            </div>
                        </li>
                        <li>
                            <a href="{{ route('detail.article', ['article_id' => 0]) }}"><span class="side_navi_date">11月11日(newIcon)</span>
                                <p title="aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa" class="side_navi_title">
                                    リンクリンクリンクリンクリンクリンクリンクリンクリンクリンクリンクリンクリンクリンクリンクリンク
                                </p>
                            </a>
                            <div class="side_navi_auther">
                                <span style="color:#ccc;">筆者:</span>
                                <a href="{{ route('list.onlyAuther', ['auther_id' => 0]) }}">名前テスト</a>
                            </div>
                            <div class="side_navi_category">
                                <span style="color:#ccc;">カテゴリー:</span>
                                <a href="{{ route('list.bothAutherAndCategory', ['auther_id' => 0,'category_id' => 0]) }}">名前テスト</a>
                            </div>
                        </li>
                        <li>
                            <a href="{{ route('detail.article', ['article_id' => 0]) }}"><span class="side_navi_date">11月11日(newIcon)</span>
                                <p title="aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa" class="side_navi_title">
                                    リンクリンクリンクリンクリンクリンクリンクリンクリンクリンクリンクリンクリンクリンクリンクリンク
                                </p>
                            </a>
                            <div class="side_navi_auther">
                                <span style="color:#ccc;">筆者:</span>
                                <a href="{{ route('list.onlyAuther', ['auther_id' => 0]) }}">名前テスト</a>
                            </div>
                            <div class="side_navi_category">
                                <span style="color:#ccc;">カテゴリー:</span>
                                <a href="{{ route('list.bothAutherAndCategory', ['auther_id' => 0,'category_id' => 0]) }}">名前テスト</a>
                            </div>
                        </li>
                        <li>
                            <a href="{{ route('detail.article', ['article_id' => 0]) }}"><span class="side_navi_date">11月11日(newIcon)</span>
                                <p title="aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa" class="side_navi_title">
                                    リンクリンクリンクリンクリンクリンクリンクリンクリンクリンクリンクリンクリンクリンクリンクリンク
                                </p>
                            </a>
                            <div class="side_navi_auther">
                                <span style="color:#ccc;">筆者:</span>
                                <a href="{{ route('list.onlyAuther', ['auther_id' => 0]) }}">名前テスト</a>
                            </div>
                            <div class="side_navi_category">
                                <span style="color:#ccc;">カテゴリー:</span>
                                <a href="{{ route('list.bothAutherAndCategory', ['auther_id' => 0,'category_id' => 0]) }}">名前テスト</a>
                            </div>
                        </li>
                        <li>
                            <a href="{{ route('detail.article', ['article_id' => 0]) }}"><span class="side_navi_date">11月11日(newIcon)</span>
                                <p title="aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa" class="side_navi_title">
                                    リンクリンクリンクリンクリンクリンクリンクリンクリンクリンクリンクリンクリンクリンクリンクリンク
                                </p>
                            </a>
                            <div class="side_navi_auther">
                                <span style="color:#ccc;">筆者:</span>
                                <a href="{{ route('list.onlyAuther', ['auther_id' => 0]) }}">名前テスト</a>
                            </div>
                            <div class="side_navi_category">
                                <span style="color:#ccc;">カテゴリー:</span>
                                <a href="{{ route('list.bothAutherAndCategory', ['auther_id' => 0,'category_id' => 0]) }}">名前テスト</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="side_ranking">
                    <div class="side_title">ランキング</div>
                    <ul>
                        <li><a href="{{ route('list.onlyAuther', ['auther_id' => 0]) }}">Top</a></li>
                        <li><a href="{{route('articleList')}}">記事管理</a></li>
                        <li><a href="{{route('memberList')}}">会員管理</a></li>
                        <li><a href="{{route('inquiryList')}}">問い合わせ管理</a></li>
                        <li><a href="{{route('tagList')}}">タグ管理</a></li>
                    </ul>
                </div>
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