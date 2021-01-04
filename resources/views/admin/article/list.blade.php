@extends('admin.layout')
@section('title', 'Page Title')
@section('head')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="{{ asset('js/admin/article.js') }}"></script>
@endsection

@section('content')
<div class="container">
    <h2>記事一覧</h2>
    <div class="card-body">
     @if (session('status'))
         <div class="alert alert-success" role="alert">
             {{ session('status') }}
         </div>
     @endif
     <div class="list_top_area">
         <a href="{{route('articleRegist')}}" class="regist_link">{{ __('新規作成') }}</a>
        <form method="POST" action="{{route('articleList')}}" class="narrow_down">
        @csrf
            <div id="narrow_down">
                <div class="nd_article">
                    <select class="auther" name="auther">
                        <option value="">著者</option>
                        @foreach(Config::get('auther') as $key => $auther)
                            <option value="{{$key}}" @if(isset($autherhidden) && $autherhidden == $key) selected @endif>{{$auther["name"]}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="nd_article">
                    <select class="auther_category"  name="auther_category" disabled>
                        <option value="">著者内カテゴリー</option>
                        @foreach(Config::get('auther') as $key => $auther)
                            @foreach($auther["category"] as $idx => $auther_category)
                                <option value="{{$idx}}" class="auther_{{$key}}" @if(isset($authercategoryhidden) && $authercategoryhidden == $idx) selected @endif>{{$auther_category["name"]}}</option>
                            @endforeach    
                        @endforeach
                    </select>
                </div>
                <div class="nd_article">
                    <input type="submit" value="絞り込む">
                    @isset($autherhidden)
                    <input type="hidden" name="autherhidden" value="{{$autherhidden}}">
                    @endisset
                    @isset($authercategoryhidden)
                    <input type="hidden" name="authercategoryhidden" value="{{$authercategoryhidden}}">
                    @endisset
                </div>
            </div>
        </form>
     </div>
    <form action="{{route('articleDelete')}}" method="POST">
        @csrf
        @if(isset($articles) && count($articles) > 0)
        <table class="list" border="1">
            <tr>
                <th>id</th>
                <th>status</th>
                <th>course</th>
                <th class="category">category</th>
                <th class="max">title</th>
                <th>delete</th>
            </tr>
            @foreach ($articles as $index => $article)
            <tr>
            <td><a href="edit/{{ $article -> id}}">{{$article -> id}}</a></td>
            <td><div class="status_{{$article -> status}}">{{config("status.$article->status")}}</div></td>
            <td>{{config("course.$article->course.name")}}</td>
            <td class="category">{{config("course.$article->course.category.$article->category")}}</td>
            <td class="title"><a href="edit/{{ $article -> id}}">{{$article -> title}}</a></td>
            <td><input type="checkbox" value="{{$article -> id}}" name="del_id[]"></td>
            </tr>
            @endforeach
        </table>
        <input type="submit" value="checkしたものを消す" id="delete">
        @else
        <p>
        記事が一つもありません！！！
        </p>
        @endif
    </form>
    <div id="pagenator">
        @isset($pagenator -> firstPageNum)
         <a href="{{route("articleList")}}/{{$baseurl}}{{$pagenator -> firstPageNum}}">最初</a>
         @endisset
         @isset($pagenator -> prePageNum)
         <a href="{{route("articleList")}}/{{$baseurl}}{{$pagenator -> prePageNum}}">前へ</a>
         @endisset
         @isset($pagenator -> firstPageNum)
         ...
         @endisset
         @isset($pagenator -> linkNum)
             @foreach($pagenator -> linkNum as $key => $Num)
             @if($page == $Num)
             <span style="background:#FF0;">{{$Num}}</span>
             @else
             <a href="{{route("articleList")}}/{{$baseurl}}{{$Num}}">{{$Num}}</a>
             @endif
             @endforeach
         @endisset
         @isset($pagenator -> lastPageNum)
         ...
         @endisset
         @isset($pagenator -> nextPageNum)
         <a href="{{route("articleList")}}/{{$baseurl}}{{$pagenator -> nextPageNum}}">次へ</a>
         @endisset
         @isset($pagenator -> lastPageNum)
         <a href="{{route("articleList")}}/{{$baseurl}}{{$pagenator -> lastPageNum}}">最後</a>
         @endisset
    </div>
</div>
@endsection