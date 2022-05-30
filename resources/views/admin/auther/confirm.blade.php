@extends('admin.layout')
@section('title', 'Page Title')
@section('head')
<link rel="stylesheet" href="{{ asset('css/adminAuther.css') }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.ckeditor.com/4.14.0/full/ckeditor.js"></script>
<script src="{{ asset('js/admin/article.js') }}"></script>
<script src="{{ asset('js/admin/selectdate.js') }}"></script>
@endsection

@section('content')
<div class="container">
    <h2>記事登録ページ</h2>
    @isset ($inputData['id'])
        <form method="POST" action="{{route('auther.edit.update')}}" class="regist_place"  enctype="multipart/form-data">
    @else
        <form method="POST" action="{{route('auther.regist.insert')}}" class="regist_place"  enctype="multipart/form-data">
    @endisset
    @csrf
        <table class="confirm">
            <colgroup>
                <col style="width:20%;">
                <col style="width:80%;">
            </colgroup>
            <tr>
                <th>名前</th>
                <td>
                    {{ $inputData['name'] }}
                    <input type="hidden" name="name" value="{{ $inputData['name'] }}">
                </td>
            </tr>
            <tr>
                <th>カテゴリー</th>
                <td>
                    @isset ($inputData['category'])
                        @foreach ($inputData['category'] as $category)
                            {{ $categoryList[$category] }}
                            <input type="hidden" name="category[]" value="{{ $category }}">
                            @if(!$loop->last) , @endif
                        @endforeach
                    @endisset
                </td>
            </tr>
            <tr>
                <th>紹介</th>
                <td>
                    {!! nl2br(e($inputData ['explain'])) !!}
                    <input type="hidden" value="{{ $inputData['explain'] }}" name="explain">
                </td>
            </tr>
            <tr>
                <th>画像</th>
                <td>
                    @if (!empty($inputData['image']))
                        <img src="{{ asset('images/profile/'.$inputData['image']) }}">
                    @endif
                    <input type="hidden" value="{{ $inputData['image'] }}" name="image">
                </td>
            </tr>
        </table>
        <div class="submit_place">
            <button type="submit" name="action" value="submit">
                登録
            </button>
            <button type="submit" name="action" value="back">
                戻る
            </button>
        </div>
        @isset ($inputData['id'])
            <input type="hidden" name="id" value="{{ $inputData['id'] }}">
        @endisset
    </form>
</div>

@endsection