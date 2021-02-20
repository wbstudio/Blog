<html>
    <head>
        <title> - @yield('title')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, user-scalable=yes">
        <link rel="stylesheet" href="{{ asset('css/front/pc/common.css') }}">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" id="paddle-fonts-css" href="https://fonts.googleapis.com/css?family=Montserrat%3A400%2C700" type="text/css" media="all">        @yield('head')
    </head>
    <body>
        <header>
            <div class="header_first_area">
                <div class="header_title_area">
                    <a href="">
                        <img src="{{ asset('images/front/test_logo.png') }}" height="45px">
                    </a>
                </div>
                <div class="header_btn_area">
                    <form method="POST" action="{{route('list.searchWordList')}}">
                    @csrf
                        <input type="text" name="search_word">
                        <input type="image" class="search" src="{{ asset('images/front/icon_search_button.svg') }}">
                    </form>
                    <a href="" class="login">ログイン</a>
                    <a href="" class="regist_member">新規登録</a>
                </div>
            </div>
            <div class="header_second_area">
                <a href=""><img src="{{ asset('images/front/top_link/test_link.png') }}" width="72px" height="30px"></a>
                <a href=""><img src="{{ asset('images/front/top_link/test_link.png') }}" width="72px" height="30px"></a>
                <a href=""><img src="{{ asset('images/front/top_link/test_link.png') }}" width="72px" height="30px"></a>
                <a href=""><img src="{{ asset('images/front/top_link/test_link.png') }}" width="72px" height="30px"></a>
                <a href=""><img src="{{ asset('images/front/top_link/test_link.png') }}" width="72px" height="30px"></a>
                <a href=""><img src="{{ asset('images/front/top_link/test_link.png') }}" width="72px" height="30px"></a>
                <a href=""><img src="{{ asset('images/front/top_link/test_link.png') }}" width="72px" height="30px"></a>
                <a href=""><img src="{{ asset('images/front/top_link/test_link.png') }}" width="72px" height="30px"></a>
            </div>
        </header>

        <div id="site_intro">
            <a href="">
                <img  src="{{ asset('images/front/top_link/wakuwakutoha.png') }}" width="100%">
            </a>
        </div>

        <div id="top_page_main">
            <div id=side_navi class="content">
                <div class="side_news">
                    <div class="side_title">news</div>
                    <ul>
                        <li>
                            <a href=""><span class="side_navi_date">11月11日(newIcon)</span>
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
                            <a href=""><span class="side_navi_date">11月11日(newIcon)</span>
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
                            <a href=""><span class="side_navi_date">11月11日(newIcon)</span>
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
                            <a href=""><span class="side_navi_date">11月11日(newIcon)</span>
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
                            <a href=""><span class="side_navi_date">11月11日(newIcon)</span>
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
                            <a href=""><span class="side_navi_date">11月11日(newIcon)</span>
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
                            <a href=""><span class="side_navi_date">11月11日(newIcon)</span>
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
                            <a href=""><span class="side_navi_date">11月11日(newIcon)</span>
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
                            <a href=""><span class="side_navi_date">11月11日(newIcon)</span>
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
                            <a href=""><span class="side_navi_date">11月11日(newIcon)</span>
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
            new-blog管理画面
        </footer>
    </body>
</html>