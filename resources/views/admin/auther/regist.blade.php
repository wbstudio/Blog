@extends('admin.layout')
@section('title', 'Page Title')
@section('head')
<link rel="stylesheet" href="{{ asset('css/adminAuther.css') }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.ckeditor.com/4.14.0/full/ckeditor.js"></script>
<script src="{{ asset('js/admin/common.js') }}"></script>
<!-- <script src="{{ asset('js/admin/common.min.js') }}"></script> -->
@endsection

@section('content')
<div class="container">
    <h2>記事登録ページ</h2>
    <form method="POST" action="{{route('auther.regist.confirm')}}" class="regist_place"  enctype="multipart/form-data">
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
            <tr>
                <th>カテゴリー</th>
                <td>
                    @foreach ($categoryList as $id => $name)
                        <label for="category_{{ $id }}" class="chk">
                            <input type="checkbox" name="category[]" value="{{ $id }}" id="category_{{ $id }}" @if (!empty(old('category')) && in_array($id, old('category'))) checked @endif>
                            {{ $name }}
                        </label>
                    @endforeach
                </td>
            </tr>
            <tr>
                <th>説明</th>
                <td>
                    <textarea name="explain">{{ old('explain') }}</textarea>
                </td>
            </tr>
            <tr>
                <th>画像</th>
                <td>
                    <label class="img">
                        <input type="file" name="image" value="{{ old('image') }}" id="profile">
                        画像を選択
                    </label>
                    <p class="img_name">選択されていません</p>
                    <img id="sumb" style="display: none;">
                    <input type="hidden" value="{{ old('image') }}" id="profile_old" name="profile_old">
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