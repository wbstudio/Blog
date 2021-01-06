<html>
    <head>
        <title>サイト名 - @yield('title')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{ asset('css/admin/common.css') }}">
        @yield('head')
        @FilemanagerScript
    </head>
    <body>
        <header>
            new-blog管理画面
        </header>

        <main>
            <div id=sidenavi class="content">
                <ol>
                    <a href="{{route('adminTop')}}"><li>Top</li></a>
                    <a href="{{route('articleList')}}"><li>記事管理</li></a>
                    <a href="{{route('memberList')}}"><li>会員管理</li></a>
                    <a href="{{route('inquiryList')}}"><li>問い合わせ管理</li></a>
                    <a href="{{route('tagList')}}"><li>タグ管理</li></a>
                </ol>
            </div>
            <div id="content" class="content">
                @yield('content')
            </div>
        </main>

        <footer>
            new-blog管理画面
        </footer>
    </body>
</html>