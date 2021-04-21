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
        @foreach(Config::get('auther') as $key => $confAuther)
        <div class="@if($loop->index%2 != 0) blogger_even @else blogger_odd @endif">
            <img src="{{ asset('images/front/introduct/'.$confAuther['imgPath']) }}" class="">
            <div class="blogger_name">{{$confAuther['name']}}</div>
            <div class="blogger_explain">
            <div class="blogger_explain_title">plofile</div>
                <p class="blogger_explain_detail">{{$confAuther['profile']}}</p>
                <div class="blogger_explain_title">Greeting</div>
                <p class="blogger_explain_detail">{{$confAuther['greeting']}}</p>
            </div>
            <div class="to_blogger_category"><a href="{{ route('list.onlyAuther', ['auther_id' => $key]) }}">{{$confAuther['name']}}の部屋へ</a></div>
        </div>
        @endforeach
    </section>

    <div class="section_separation"></div>

    <section id="category">
    <h2>Category</h2>
    <div class="category_inner">

        @foreach(Config::get('category') as $keyCategory => $confCategory)
        <div class="category_mass">
            <div class="category_title_area">
                <div class="to_category_link">
                    <a href="{{ route('list.onlyCategory', ['category_id' => $keyCategory]) }}">
                        {{$confCategory["name"]}}
                        <img src="{{ asset('images/front/icon_link.svg') }}">
                    </a>
                </div>
                <div class="category_title">
                    <a href="{{ route('list.onlyCategory', ['category_id' => $keyCategory]) }}">{{$confCategory["name"]}}</a>
                </div>
            </div>
            <table>
                <tbody>
                    @foreach(Config::get('auther') as $keyAuther => $confAuther)
                    @if(isset($confAuther["category"][$keyCategory]))
                    <tr>
                        <td class="single_category_title"><a href="{{ route('list.bothAutherAndCategory', ['auther_id' => $keyAuther,'category_id' => $keyCategory,'page'=>1]) }}">{{$confAuther["category"][$keyCategory]["name"]}}</a></td>
                        <td class="single_category_auther"><a href="{{ route('list.onlyAuther', ['auther_id' => 0]) }}">{{$confAuther["name"]}}</a></td>
                        <!-- <td class="single_category_update"><span class="last_title">最終更新日</span><span class="last_date">2020/00/00</span></td> -->
                    </tr>
                    @endif
                    @endforeach
                </tbody> 
            </table>
        </div>
        @endforeach


    </div>
    </section>

    <div class="section_separation"></div>

    <section id="how_to">
    <h2>How to use</h2>
    </section>

    <div class="section_separation"></div>

    <section id="inquiry">
    <h2 class="ja">問い合わせ</h2>
    </section>

</div>
</div>
@endsection