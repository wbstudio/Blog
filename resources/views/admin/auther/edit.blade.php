@extends('admin.layout')
@section('title', 'Page Title')
@section('head')
<link rel="stylesheet" href="{{ asset('css/adminAuther.css') }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.ckeditor.com/4.14.0/full/ckeditor.js"></script>
<script src="{{ asset('js/admin/common.js') }}"></script>
@endsection

@section('content')
<div class="container">
    <h2>記事登録ページ</h2>
    <form method="POST" action="{{route('auther.edit.confirm')}}" class="regist_place"  enctype="multipart/form-data">
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
                    <input type="text" name="name" value="@if (!empty(old('name'))) {{ old('name') }} @else {{ $autherData->name }} @endif">
                </td>
            </tr>
            <tr>
                <th>カテゴリー</th>
                <td>
                    @foreach ($categoryList as $id => $name)
                        <label for="category_{{ $id }}">
                            <input type="checkbox" name="category[]" value="{{ $id }}" id="category_{{ $id }}" @if (!empty(old('category'))) @if (in_array($id, old('category'))) checked @endif @else @if (in_array($id, $autherData->category))) checked @endif @endif>
                            {{ $name }}
                        </label>
                    @endforeach
                </td>
            </tr>
            <tr>
                <th>説明</th>
                <td>
                    <textarea name="explain">@if (!empty(old('explain'))){{ old('explain') }}@else{{ $autherData->explain }}@endif</textarea>
                </td>
            </tr>
            <tr>
                <th>画像</th>
                <td>
                    <label class="img">
                        <input type="file" name="image" id="profile">
                        画像を選択
                    </label>
                    <p class="img_name">選択されていません</p>
                    <img id="sumb" style="display: none;">
                    <input type="hidden" value="@if(!empty(old('image'))){{ old('image') }}@else{{ $autherData->image }}@endif" id="profile_old" name="profile_old" data-url="@if (!empty($autherData->image)) {{ route('ajax.delete.profile.image', $autherData->image)}} @endif">
                </td>
            </tr>
        </table>
        <div class="submit_place">
            <button type="submit" name="action" value="submit">
                確認画面へ
            </button>
        </div>
        <input type="hidden" name="id" value="{{ $autherData->id }}">
    </form>
</div>

@endsection