<html>
    <head>
        <title> - @yield('title')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, user-scalable=yes">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" id="paddle-fonts-css" href="https://fonts.googleapis.com/css?family=Montserrat%3A400%2C700" type="text/css" media="all">
        <link href="https://fonts.googleapis.com/css2?family=RocknRoll+One&family=Stick&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/othersite_test/common.css') }}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="{{ asset('js/test/common.js') }}"></script>
        @yield('head')
    </head>
    <body>

        <main>
        <div id="content" class="content">
            @yield('content')
        </div>
        </main>
        
        <footer>
            <ul>
                <li><a href="#" class="logo_area"><img src="{{ asset('images/test/logo_white.png') }}" class="menu_logo"></a></li>
                <li><a href="#">Service</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="#">Philosophy</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Blog</a></li>
            </ul>
        </footer>
    </body>
</html>