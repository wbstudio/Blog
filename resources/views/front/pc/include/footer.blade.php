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

                @foreach(Config::get('auther') as $keyAuther => $confAuther)
                <div class="blog_auther">
                    <h4><a href="{{ route('list.onlyAuther', ['auther_id' => $keyAuther]) }}">{{$confAuther["name"]}}</a></h4>
                    <ul>
                        @foreach($confAuther["category"] as $keyCategory => $confAutherCategory)
                        <li><a href="{{ route('list.bothAutherAndCategory', ['auther_id' => $keyAuther,'category_id' => $keyCategory,'page'=>1]) }}">{{$confAutherCategory["name"]}}</a></li>
                        @endforeach
                    </ul>
                </div>
                @endforeach

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
                フォロー・チャンネル登録等よろしくお願いします。
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
