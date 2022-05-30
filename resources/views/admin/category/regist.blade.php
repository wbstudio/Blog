@extends('admin.layout')
@section('title', 'Page Title')
@section('head')
<link rel="stylesheet" href="{{ asset('css/adminCategory.css') }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.ckeditor.com/4.14.0/full/ckeditor.js"></script>
@endsection

@section('content')
<div class="container">
    <h2>記事登録ページ</h2>
    <form method="POST" action="{{route('category.regist.confirm')}}" class="regist_place"  enctype="multipart/form-data">
    @csrf
        @if ($errors->first('name'))   <!-- ここ追加 -->
            <p class="validation">※{{$errors->first('name')}}</p>
        @endif
        <table class="form">
            <colgroup>
                <col style="width:20%;">
                <col style="width:80%;">
            </colgroup>
            <tr>
                <th>名前</th>
                <td>
                    <input type="text" name="name" value="{{ old('name') }}">
                </td>
            </tr>
        </table>
        <div class="submit_place">
            <button type="submit" name="action" value="submit">
                確認画面へ
            </button>
        </div>
    </form>
</div>

@endsection