@extends('admin.layout')
@section('title', 'Page Title')
@section('head')
<link rel="stylesheet" href="{{ asset('css/adminArticle.css') }}">
<meta name="csrf-token" content="{{ csrf_token() }}">
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
         <a href="{{ route('article.regist') }}" class="regist_link">{{ __('新規作成') }}</a>
        <form method="POST" action="{{ route('article.list') }}" class="narrow_down">
        @csrf
            <div id="narrow_down">
                <div class="nd_article">
                    <select class="auther" name="auther">
                        <option value="">著者</option>
                        @foreach($autherNameList as $id => $name)
                            <option value="{{ $id }}" @if ($arrayRequest['auther'] == $id) selected @endif>{{ $name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="nd_article">
                    <select class="auther"  name="category">
                        <option value="">著者内カテゴリー</option>
                        @foreach($categoryNameList as $id => $name)
                            <option value="{{ $id }}" @if ($arrayRequest['category'] == $id) selected @endif>{{ $name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="nd_article">
                    <input type="submit" value="絞り込む">
                </div>
            </div>
        </form>
     </div>
    <form action="{{ route('article.delete') }}" method="POST">
        @csrf
        @if ($articleList->isNotEmpty())
            <table class="list" border="1">
                <colgroup>
                    <col style="width: 10%;">
                    <col style="width: 15%;">
                    <col style="width: 15%;">
                    <col style="width: 15%;">
                    <col style="width: 45%;">
                    <col style="width: 10%;">
                </colgroup>
                <thead>
                    <tr>
                        <th>id</th>
                        <th>ステータス</th>
                        <th>筆者</th>
                        <th>カテゴリー</th>
                        <th class="max">タイトル</th>
                        <th>削除</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($articleList as $index => $article)
                        <tr>
                            <td>
                                <a href="{{ route('article.edit', $article->id) }}">
                                    {{ $article -> id }}
                                </a>
                            </td>
                            <td>
                                <div class="status_{{$article -> status}}">
                                    {{ config('status.article.'.$article->status) }}
                                </div>
                            </td>
                            <td>
                                {{ $article -> auther_name }}
                            </td>
                            <td>
                                {{ $article -> category_name }}
                            </td>
                            <td class="title">
                                <p>
                                    <a href="{{ route('article.edit', $article->id) }}">
                                        {{$article -> title}}
                                    </a>
                                </p>
                            </td>
                            <td>
                                <input type="checkbox" value="{{$article -> id}}" name="delete[]">
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <input type="submit" value="checkしたものを消す" id="delete">
        @else
            <p>
            記事が一つもありません！！！
            </p>
        @endif
    </form>
    <div id="pagination">
        {{ $articleList->links('admin.particle.pagination') }}
    </div>
</div>
@endsection