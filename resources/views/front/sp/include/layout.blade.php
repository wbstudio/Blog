<html>
    <head>
        <title> - @yield('title')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, user-scalable=yes">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" id="paddle-fonts-css" href="https://fonts.googleapis.com/css?family=Montserrat%3A400%2C700" type="text/css" media="all">        
        <link rel="stylesheet" href="{{ asset('css/front/sp/common.css') }}">
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script src="{{ asset('js/front/sp/common.js') }}"></script>
        <script src="{{ asset('js/front/tools/readmore.min.js') }}"></script>
        @yield('head')
    </head>
    <body>
        <header>
            <div>
                <a href="">
                    <img src="{{ asset('images/front/test_logo.png') }}" height="45px">
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
            new-blog管理画面
        </footer>
    </body>
</html>