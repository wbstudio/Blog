@extends('front.sp.include.layout')
@section('title', 'topページ')
@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{ asset('css/front/sp/list.css') }}">
@endsection

@section('content')
<div class="container">
<div id="article_list" class="">
<section>
    <h2 class="first_h2 ja before_list">記事一覧</h2>
    <div class="search_list">
    <div class="title">検索結果:</div>
    <div class="inner">
        <p>{{$addTitle}}</p>
    </div>

    <div class="article_list_area">
        @if(isset($articles) && is_countable($articles))
        @foreach($articles as $article)
        <div class="article_list_mass">
            <a href="{{ route('detail.article', ['article_id' => $article->id]) }}">
				@if(isset($article->eyecatch))
                <img src="{{ asset('images/admin/article/eyecatch/' .$article->eyecatch)}}">
                @else
                <img src="{{ asset('images/admin/article/eyecatch/no_image.png')}}" class="">
                @endif
                <div class="title">
                    <p>{{$article->title}}</p>
                </div>
                <div class="auther">{{config("auther.".$article->auther.".name")}}</div>
            </a>
        </div>
        @endforeach
		@else
		<div>記事がないです</div>
		@endif
    </div>

    <div id="pagenator">
		@isset($pagenator -> firstPageNum)
		<a href="{{route('topPage')}}/{{$baseUrl}}{{$pagenator -> firstPageNum}}">最初</a>
		@endisset
		@isset($pagenator -> prePageNum)
		<a href="{{route('topPage')}}/{{$baseUrl}}{{$pagenator -> prePageNum}}">前へ</a>
		@endisset
		@isset($pagenator -> firstPageNum)
		...
		@endisset
		@isset($pagenator -> linkNum)
			@foreach($pagenator -> linkNum as $key => $Num)
			@if($page == $Num)
			<span style="background:#FF0;">{{$Num}}</span>
			@else
			<a href="{{route('topPage')}}/{{$baseUrl}}{{$Num}}">{{$Num}}</a>
			@endif
			@endforeach
		@endisset
		@isset($pagenator -> lastPageNum)
		...
		@endisset
		@isset($pagenator -> nextPageNum)
		<a href="{{route('topPage')}}/{{$baseUrl}}{{$pagenator -> nextPageNum}}">次へ</a>
		@endisset
		@isset($pagenator -> lastPageNum)
		<a href="{{route('topPage')}}/{{$baseUrl}}{{$pagenator -> lastPageNum}}">最後</a>
		@endisset
	</div>


</section>

</div>
</div>
@endsection