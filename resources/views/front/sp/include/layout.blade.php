<html>
    <head>
        <title> - @yield('title')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, user-scalable=yes">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" id="paddle-fonts-css" href="https://fonts.googleapis.com/css?family=Montserrat%3A400%2C700" type="text/css" media="all">        
        <link rel="stylesheet" href="{{ asset('css/front/sp/common.css') }}">
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script src="{{ asset('js/front/sp/common.js') }}"></script>
        <script src="{{ asset('js/front/tools/readmore.js') }}"></script>
        @yield('head')
    </head>
    <body>
        <header>
            <div>
                <a href="">
                    <img src="{{ asset('images/front/logo.png') }}" height="45px">
                </a>
                <div class="menu_icon">
                    <img src="{{ asset('images/front/icon_humberger.svg') }}">
                </div>
            </div>
        </header>
        @include('front.sp.include.modal.menu')
        <main>
        <div id="content" class="content">
            @yield('content')
        </div>
        </main>
        
        <footer>
            <div class="footter_iiner">
                <div class="site_title_area">
                    <a href="{{ route('topPage') }}">
                        <img src="{{ asset('images/front/logo.png') }}">
                    </a>
                </div>
                <div class="site_contents_area">
                    <div class="site_contents_blog">
                        <h3>Blog</h3>
                        <div class="footer_blog_area">
                            <div class="blog_auther">
                                <h4 class="footer_accordion"><a href="">テスト名前</a></h4>
                                <ul>
                                    <li><a href="">カテゴリー名前(大カテゴリー)</a></li>
                                    <li><a href="">カテゴリー名前(大カテゴリー)</a></li>
                                    <li><a href="">カテゴリー名前(大カテゴリー)</a></li>
                                    <li><a href="">カテゴリー名前(大カテゴリー)</a></li>
                                    <li><a href="">カテゴリー名前(大カテゴリー)</a></li>
                                </ul>
                            </div>
                            <div class="blog_auther">
                                <h4 class="footer_accordion"><a href="">テスト名前</a></h4>
                                <ul>
                                    <li><a href="">カテゴリー名前(大カテゴリー)</a></li>
                                    <li><a href="">カテゴリー名前(大カテゴリー)</a></li>
                                    <li><a href="">カテゴリー名前(大カテゴリー)</a></li>
                                    <li><a href="">カテゴリー名前(大カテゴリー)</a></li>
                                    <li><a href="">カテゴリー名前(大カテゴリー)</a></li>
                                </ul>
                            </div>
                            <div class="blog_auther">
                                <h4 class="footer_accordion"><a href="">テスト名前</a></h4>
                                <ul>
                                    <li><a href="">カテゴリー名前(大カテゴリー)</a></li>
                                    <li><a href="">カテゴリー名前(大カテゴリー)</a></li>
                                    <li><a href="">カテゴリー名前(大カテゴリー)</a></li>
                                    <li><a href="">カテゴリー名前(大カテゴリー)</a></li>
                                    <li><a href="">カテゴリー名前(大カテゴリー)</a></li>
                                </ul>
                            </div>
                            <div class="blog_auther">
                                <h4 class="footer_accordion"><a href="">テスト名前</a></h4>
                                <ul>
                                    <li><a href="">カテゴリー名前(大カテゴリー)</a></li>
                                    <li><a href="">カテゴリー名前(大カテゴリー)</a></li>
                                    <li><a href="">カテゴリー名前(大カテゴリー)</a></li>
                                    <li><a href="">カテゴリー名前(大カテゴリー)</a></li>
                                    <li><a href="">カテゴリー名前(大カテゴリー)</a></li>
                                </ul>
                            </div>
                            <div class="blog_auther">
                                <h4 class="footer_accordion"><a href="">テスト名前</a></h4>
                                <ul>
                                    <li><a href="">カテゴリー名前(大カテゴリー)</a></li>
                                    <li><a href="">カテゴリー名前(大カテゴリー)</a></li>
                                    <li><a href="">カテゴリー名前(大カテゴリー)</a></li>
                                    <li><a href="">カテゴリー名前(大カテゴリー)</a></li>
                                    <li><a href="">カテゴリー名前(大カテゴリー)</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="anothersite_link_area">
                    <div class="snslink_area">
                        <a href=""><img src="{{ asset('images/front/Facebook_black.svg') }}"></a>
                        <a href=""><img src="{{ asset('images/front/Instagram_black.svg') }}"></a>
                        <a href=""><img src="{{ asset('images/front/Twitter_black.svg') }}"></a>
                        <a href=""><img src="{{ asset('images/front/Youtube_black.svg') }}"></a>
                        <div class="cheer">
                            wakuwakuBlog公式SNSもやっています。<br>
                            フォロー・＝＝＝よろしくお願いします。
                        </div>
                    </div>
                    <div class="wblink_area">
                        <a href=""><img src="{{ asset('images/front/top_link/logo_test.png') }}"></a>
                        <div class="footer_summary">
                            <div class="footer_summary_item"><a href="">wakuwakublogとは？</a></div>
                            <div class="footer_summary_item"><a href="">お問い合わせ</a></div>
                            <div class="footer_summary_item"><a href="">運営会社</a></div>
                            <div class="footer_summary_item"><a href="">利用規約</a></div>
                            <div class="footer_summary_item"><a href="">個人情報保護方針</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_base">
                &copy; 2017 o-saka
            </div>
        </footer>
    </body>
</html>