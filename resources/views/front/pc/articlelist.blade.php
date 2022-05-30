@extends('front.pc.include.layout')
@section('title', 'topページ')
@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!--変更--><link rel="stylesheet" href="{{ asset('css/front/pc/list.css') }}"><!--変更-->
@endsection

@section('content')
<div class="container">
	<div id="article_list">
		<section id="category">
			<h2 class="ja">「<span class="add_area" style="font-size:50px;">{{$addTitle}}</span>」の記事一覧</h2>
			<div class="section_inner">

			@if(isset($articles) && is_countable($articles))
				@foreach($articles as $article)
				<div class="article_list_mass">
					<div class="article_list_image_area">
						<a href="{{ route('detail.article', ['article_id' => $article->id]) }}">
							@if(isset($article->eyecatch))
							<img src="{{ asset('images/admin/article/eyecatch/' .$article->eyecatch)}}">
                            @else
                            <img src="{{ asset('images/admin/article/eyecatch/no_image.png')}}" class="">
                            @endif
						</a>
						<div class="article_list_base">
							<div class="article_list_auther">著者:<a href="{{ route('list.onlyAuther', ['auther_id' => $article->auther]) }}">{{config("auther.".$article->auther.".name")}}</a></div>
							<div class="article_list_category">カテゴリー:<a href="{{ route('list.bothAutherAndCategory', ['auther_id' => $article->auther,'category_id' => $article->auther_category,'page' => 1]) }}">{{config("auther.".$article->auther.".category.".$article->auther_category.".name")}}</a></div>
							<div class="article_list_update">更新日時:{{$article->release_at->format('Y/m/d')}}</div>
						</div>
					</div>
					<div class="article_list_explain_area" style="width:100%;">
						<div class="article_list_title"><a href="{{ route('detail.article', ['article_id' => $article->id]) }}">{{$article->title}}</a></div>
						<div class="article_list_explain"> <a href="{{ route('detail.article', ['article_id' => $article->id]) }}">{{$article->heading}}</a> </div>
						<div class="article_list_tag_list">
						@if(isset($article->tag))
							@foreach($article->tagObj as $containTag)
								@if(isset($allTagData[$containTag]))
									<a href="{{ route('list.tagArticleList', ['tag_id' => $containTag,'page' => 1]) }}"><div class="tag_single">{{$allTagData[$containTag]}}</div></a>
								@endif
							@endforeach
						@endif
						</div>
						<div class="article_list_view_count">閲覧数:{{$article->count}}</div>
					</div>
				</div>
				@endforeach
			@else
			<div>記事がないです</div>
			@endif


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





            </div>
	    </section>
    </div>
</div>
@endsection