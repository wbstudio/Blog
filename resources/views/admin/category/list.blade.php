@extends('admin.layout')
@section('title', 'Page Title')
@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{ asset('css/adminCategory.css') }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="{{ asset('js/admin/common.min.js') }}"></script>
@endsection

@section('content')
<div class="container">
    <h2>筆者一覧</h2>
    <div class="card-body">
     @if (session('status'))
         <div class="alert alert-success" role="alert">
             {{ session('status') }}
         </div>
     @endif
     <div class="list_top_area">
         <a href="{{route('category.regist.form')}}" class="regist_link">{{ __('新規作成') }}</a>
     </div>
    <form action="{{route('category.delete')}}" method="POST">
        @csrf
        @if(isset($categoryList) && count($categoryList) > 0)
        <table class="list" border="1">
            <colgroup>
                <col style="width:10%;">
                <col style="width:30%;">
                <col style="width:50%;">
                <col style="width:10%;">
            </colgroup>
            <thead>
                <tr>
                    <th>id</th>
                    <th class="max">名前</th>
                    <th>該当筆者</th>
                    <th>削除</th>
                </tr>
            </thead>
            @foreach ($categoryList as $index => $category)
            <tr>
                <td><a href="{{ route('category.edit.form', $category->id) }}">{{ $category->id }}</a></td>
                <td>{{ $category->name }}</td>
                <td>
                    @isset ($category->auther)
                        @foreach ($category->auther as $id)
                            @isset ($autherList[$id])
                                {{ $autherList[$id] }}
                            @endisset
                        @endforeach
                    @endisset
                </td>
                <td>
                    <input type="checkbox" value="{{ $category -> id }}" name="delete_id[]">
                </td>
            </tr>
            @endforeach
        </table>
        <div class="submit_place">
            <button type="submit" class="delete_button">削除</button>
        </div>
        @else
        <p>
        記事が一つもありません！！！
        </p>
        @endif
    </form>
</div>
@endsection