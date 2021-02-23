@extends('front.pc.include.toplayout')
@section('title', 'topページ')
@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="{{ asset('css/front/pc/top.css') }}">
@endsection

@section('content')
<div class="container">
    <div id="top_page" class="">
    <section id="blogger">
    <h2>Blogger</h2>
    <div class="blogger_odd">
        <img src="{{ asset('images/front/top_link/face_test.png') }}" class="">
        <div class="blogger_name">名前テスト</div>
        <div class="blogger_explain">
        <div class="blogger_explain_title">plofile</div>
            <p class="blogger_explain_detail">
                テストテキストテストテキストテストテキストテストテキストテストテキストテストテキテキストテストテキストテストスト<br>
                テストテキストテストテキストテストテキストテストテキストテストテキストテストテキテキストテストテキストテストスト<br>
                テストテキストテストテキストテストテキストテストテキスト
            </p>
            <div class="blogger_explain_title">plofile</div>
            <p class="blogger_explain_detail">
                テストテキストテストテキストテストテキストテストテキストテストテキストテストテキストテストテキストテストテキスト<br>
                テストテキストテストテキストテストテキストテストテキストテストテキストテストテキストテストテキストテストテキスト<br>
                テストテキストテストテキストテストテキストテストテキスト
            </p>
        </div>
        <div class="to_blogger_category"><a href="{{ route('list.onlyAuther', ['auther_id' => 0]) }}">名前テストのカテゴリー一覧へ</a></div>
    </div>
    <div class="blogger_even">
    <img src="{{ asset('images/front/top_link/face_test.png') }}" class="">
        <div class="blogger_name">名前テスト</div>
        <div class="blogger_explain">
        <div class="blogger_explain_title">plofile</div>
            <p class="blogger_explain_detail">
                テストテキストテストテキストテストテキストテストテキストテストテキストテストテキテキストテストテキストテストスト<br>
                テストテキストテストテキストテストテキストテストテキストテストテキストテストテキテキストテストテキストテストスト<br>
                テストテキストテストテキストテストテキストテストテキスト
            </p>
            <div class="blogger_explain_title">plofile</div>
            <p class="blogger_explain_detail">
                テストテキストテストテキストテストテキストテストテキストテストテキストテストテキストテストテキストテストテキスト<br>
                テストテキストテストテキストテストテキストテストテキストテストテキストテストテキストテストテキストテストテキスト<br>
                テストテキストテストテキストテストテキストテストテキスト
            </p>
        </div>
        <div class="to_blogger_category"><a href="{{ route('list.onlyAuther', ['auther_id' => 0]) }}">名前テストのカテゴリー一覧へ</a></div>
    </div>
    <div class="blogger_odd">
        <img src="{{ asset('images/front/top_link/face_test.png') }}" class="">
        <div class="blogger_name">名前テスト</div>
        <div class="blogger_explain">
        <div class="blogger_explain_title">plofile</div>
            <p class="blogger_explain_detail">
                テストテキストテストテキストテストテキストテストテキストテストテキストテストテキテキストテストテキストテストスト<br>
                テストテキストテストテキストテストテキストテストテキストテストテキストテストテキテキストテストテキストテストスト<br>
                テストテキストテストテキストテストテキストテストテキスト
            </p>
            <div class="blogger_explain_title">plofile</div>
            <p class="blogger_explain_detail">
                テストテキストテストテキストテストテキストテストテキストテストテキストテストテキストテストテキストテストテキスト<br>
                テストテキストテストテキストテストテキストテストテキストテストテキストテストテキストテストテキストテストテキスト<br>
                テストテキストテストテキストテストテキストテストテキスト
            </p>
        </div>
        <div class="to_blogger_category"><a href="{{ route('list.onlyAuther', ['auther_id' => 0]) }}">名前テストのカテゴリー一覧へ</a></div>
    </div>
    <div class="blogger_even">
    <img src="{{ asset('images/front/top_link/face_test.png') }}" class="">
        <div class="blogger_name">名前テスト</div>
        <div class="blogger_explain">
        <div class="blogger_explain_title">plofile</div>
            <p class="blogger_explain_detail">
                テストテキストテストテキストテストテキストテストテキストテストテキストテストテキテキストテストテキストテストスト<br>
                テストテキストテストテキストテストテキストテストテキストテストテキストテストテキテキストテストテキストテストスト<br>
                テストテキストテストテキストテストテキストテストテキスト
            </p>
            <div class="blogger_explain_title">plofile</div>
            <p class="blogger_explain_detail">
                テストテキストテストテキストテストテキストテストテキストテストテキストテストテキストテストテキストテストテキスト<br>
                テストテキストテストテキストテストテキストテストテキストテストテキストテストテキストテストテキストテストテキスト<br>
                テストテキストテストテキストテストテキストテストテキスト
            </p>
        </div>
        <div class="to_blogger_category"><a href="{{ route('list.onlyAuther', ['auther_id' => 0]) }}">名前テストのカテゴリー一覧へ</a></div>
    </div>

    </section>

    <div class="section_separation"></div>

    <section id="category">
    <h2>Category</h2>
    <div class="category_inner">
        <div class="category_mass">
            <div class="category_title_area">
                <div class="to_category_link">
                    <a href="{{ route('list.onlyCategory', ['category_id' => 0]) }}">
                        category001
                        <img src="{{ asset('images/front/icon_link.svg') }}">
                    </a>
                </div>
                <div class="category_title">
                    <a href="{{ route('list.onlyCategory', ['category_id' => 0]) }}">category001</a>
                </div>
            </div>
            <table>
                <tbody>
                    <tr>
                        <td class="single_category_title"><a href="{{ route('list.bothAutherAndCategory', ['auther_id' => 0,'category_id' => 0]) }}">カテゴリー著者絞り</a></td>
                        <td class="single_category_auther"><a href="{{ route('list.onlyAuther', ['auther_id' => 0]) }}">名前テスト</a></td>
                        <td class="single_category_update"><span class="last_title">最終更新日</span><span class="last_date">2020/00/00</span></td>
                    </tr>
                    <tr>
                        <td class="single_category_title"><a href="{{ route('list.bothAutherAndCategory', ['auther_id' => 0,'category_id' => 0]) }}">カテゴリー著者絞り</a></td>
                        <td class="single_category_auther"><a href="{{ route('list.onlyAuther', ['auther_id' => 0]) }}">名前テスト</a></td>
                        <td class="single_category_update"><span class="last_title">最終更新日</span><span class="last_date">2020/00/00</span></td>
                    </tr>
                </tbody> 
            </table>
        </div>
        <div class="category_mass">
            <div class="category_title_area">
                <div class="to_category_link">
                    <a href="{{ route('list.onlyCategory', ['category_id' => 0]) }}">
                        category001
                        <img src="{{ asset('images/front/icon_link.svg') }}">
                    </a>
                </div>
                <div class="category_title">
                    <a href="{{ route('list.onlyCategory', ['category_id' => 0]) }}">category001</a>
                </div>
            </div>
            <table>
                <tbody>
                    <tr>
                        <td class="single_category_title"><a href="{{ route('list.bothAutherAndCategory', ['auther_id' => 0,'category_id' => 0]) }}">カテゴリー著者絞り</a></td>
                        <td class="single_category_auther"><a href="{{ route('list.onlyAuther', ['auther_id' => 0]) }}">名前テスト</a></td>
                        <td class="single_category_update"><span class="last_title">最終更新日</span><span class="last_date">2020/00/00</span></td>
                    </tr>
                    <tr>
                        <td class="single_category_title"><a href="{{ route('list.bothAutherAndCategory', ['auther_id' => 0,'category_id' => 0]) }}">カテゴリー著者絞り</a></td>
                        <td class="single_category_auther"><a href="{{ route('list.onlyAuther', ['auther_id' => 0]) }}">名前テスト</a></td>
                        <td class="single_category_update"><span class="last_title">最終更新日</span><span class="last_date">2020/00/00</span></td>
                    </tr>
                </tbody> 
            </table>
        </div>
        <div class="category_mass">
            <div class="category_title_area">
                <div class="to_category_link">
                    <a href="{{ route('list.onlyCategory', ['category_id' => 0]) }}">
                        category001
                        <img src="{{ asset('images/front/icon_link.svg') }}">
                    </a>
                </div>
                <div class="category_title">
                    <a href="{{ route('list.onlyCategory', ['category_id' => 0]) }}">category001</a>
                </div>
            </div>
            <table>
                <tbody>
                    <tr>
                        <td class="single_category_title"><a href="{{ route('list.bothAutherAndCategory', ['auther_id' => 0,'category_id' => 0]) }}">カテゴリー著者絞り</a></td>
                        <td class="single_category_auther"><a href="{{ route('list.onlyAuther', ['auther_id' => 0]) }}">名前テスト</a></td>
                        <td class="single_category_update"><span class="last_title">最終更新日</span><span class="last_date">2020/00/00</span></td>
                    </tr>
                    <tr>
                        <td class="single_category_title"><a href="{{ route('list.bothAutherAndCategory', ['auther_id' => 0,'category_id' => 0]) }}">カテゴリー著者絞り</a></td>
                        <td class="single_category_auther"><a href="{{ route('list.onlyAuther', ['auther_id' => 0]) }}">名前テスト</a></td>
                        <td class="single_category_update"><span class="last_title">最終更新日</span><span class="last_date">2020/00/00</span></td>
                    </tr>
                </tbody> 
            </table>
        </div>
        <div class="category_mass">
            <div class="category_title_area">
                <div class="to_category_link">
                    <a href="{{ route('list.onlyCategory', ['category_id' => 0]) }}">
                        category001
                        <img src="{{ asset('images/front/icon_link.svg') }}">
                    </a>
                </div>
                <div class="category_title">
                    <a href="{{ route('list.onlyCategory', ['category_id' => 0]) }}">category001</a>
                </div>
            </div>
            <table>
                <tbody>
                    <tr>
                        <td class="single_category_title"><a href="{{ route('list.bothAutherAndCategory', ['auther_id' => 0,'category_id' => 0]) }}">カテゴリー著者絞り</a></td>
                        <td class="single_category_auther"><a href="{{ route('list.onlyAuther', ['auther_id' => 0]) }}">名前テスト</a></td>
                        <td class="single_category_update"><span class="last_title">最終更新日</span><span class="last_date">2020/00/00</span></td>
                    </tr>
                    <tr>
                        <td class="single_category_title"><a href="{{ route('list.bothAutherAndCategory', ['auther_id' => 0,'category_id' => 0]) }}">カテゴリー著者絞り</a></td>
                        <td class="single_category_auther"><a href="{{ route('list.onlyAuther', ['auther_id' => 0]) }}">名前テスト</a></td>
                        <td class="single_category_update"><span class="last_title">最終更新日</span><span class="last_date">2020/00/00</span></td>
                    </tr>
                </tbody> 
            </table>
        </div>
        <div class="category_mass">
            <div class="category_title_area">
                <div class="to_category_link">
                    <a href="{{ route('list.onlyCategory', ['category_id' => 0]) }}">
                        category001
                        <img src="{{ asset('images/front/icon_link.svg') }}">
                    </a>
                </div>
                <div class="category_title">
                    <a href="{{ route('list.onlyCategory', ['category_id' => 0]) }}">category001</a>
                </div>
            </div>
            <table>
                <tbody>
                    <tr>
                        <td class="single_category_title"><a href="{{ route('list.bothAutherAndCategory', ['auther_id' => 0,'category_id' => 0]) }}">カテゴリー著者絞り</a></td>
                        <td class="single_category_auther"><a href="{{ route('list.onlyAuther', ['auther_id' => 0]) }}">名前テスト</a></td>
                        <td class="single_category_update"><span class="last_title">最終更新日</span><span class="last_date">2020/00/00</span></td>
                    </tr>
                    <tr>
                        <td class="single_category_title"><a href="{{ route('list.bothAutherAndCategory', ['auther_id' => 0,'category_id' => 0]) }}">カテゴリー著者絞り</a></td>
                        <td class="single_category_auther"><a href="{{ route('list.onlyAuther', ['auther_id' => 0]) }}">名前テスト</a></td>
                        <td class="single_category_update"><span class="last_title">最終更新日</span><span class="last_date">2020/00/00</span></td>
                    </tr>
                </tbody> 
            </table>
        </div>
    </div>
    </section>

    <div class="section_separation"></div>

    <section id="how_to">
    <h2>How to use</h2>
    </section>

    <div class="section_separation"></div>

    <section id="inquiry">
    <h2>問い合わせ</h2>
    </section>

</div>
</div>
@endsection