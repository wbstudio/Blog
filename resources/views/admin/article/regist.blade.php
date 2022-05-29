@extends('admin.layout')
@section('title', 'Page Title')
@section('head')
<link rel="stylesheet" href="{{ asset('css/admin/article.css') }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.ckeditor.com/4.14.0/full/ckeditor.js"></script>
<script src="{{ asset('js/admin/article.js') }}"></script>
<script src="{{ asset('js/admin/selectdate.js') }}"></script>
@endsection

@section('content')
<div class="container">
    <h2>記事登録ページ</h2>
    <form method="POST" action="{{route('article.insert')}}" class="regist_place"  enctype="multipart/form-data">
    @csrf
        <table>
            <colgroup>
                <col style="width: 15%;">
                <col style="width: 85%;">
            </colgroup>
            <tr>
                <th>auther</th>
                <td>
                    <select class="auther" name="auther">
                        <option value="">著者</option>
                        @foreach ($autherDataList as $id => $auther)
                            <option value="{{ $id }}" data-category="{{ $auther['category'] }}">{{ $auther['name'] }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <th>カテゴリー</th>
                <td>
                    <select class="category" name="category" disabled>
                        <option value="">カテゴリー</option>
                            @foreach ($categoryNameList as $id => $name)
                                <option value="{{ $id }}">{{ $name }}</option>
                            @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <th>tag</th>
                <td>
                <div class="tag_list">
                    @foreach ($tagList as $tagData)
                        <div class="tag_detail">
                            {{ $tagData->name }}
                            <input type="checkbox" name="tag[]" value="{{ $tagData->id }}">
                        </div>
                    @endforeach
                </div>
                </td>
            </tr>
            <tr>
                <th>title</th>
                <td><input type="text" name="title" class="inp_text"></td>
            </tr>
            <tr>
                <th>main</th>
                <td>
                <textarea name="main" id="editor">
                </textarea>
                <script>
                    window.onload=function(){
                        CKEDITOR.replace('editor',{
                            filebrowserBrowseUrl:filemanager.ckBrowseUrl
                        })
                    }
                    CKEDITOR.config.height=800;
                </script>
                </td>
            </tr>
            <tr>
                <th>eyecatch</th>
                <td><input type="file" name="eyecatch"></td>
            </tr>
            <tr>
                <th>heading</th>
                <td>
                    <textarea name="heading"></textarea>
                </td>
            </tr>
            <tr>
                <th>status</th>
                <td>
                    <select class="" name="status">
                        @foreach (Config::get('status.article') as $key => $status)
                            <option value="{{ $key }}">{{ $status }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <th>release_at</th>
                <td>
                    <div class="release">
                        <select class="datetime" name="release_year">
                            @foreach (Config::get('date.year') as $key => $year)
                                <option value="{{ $key }}">{{ $year }}</option>
                            @endforeach
                        </select>
                        年
                        <select class="datetime" name="release_month">
                            @foreach (Config::get('date.month') as $key => $month)
                                <option value="{{ $key }}">{{ $month }}</option>
                            @endforeach
                        </select>
                        月
                        <select class="datetime" name="release_day">
                            @foreach (Config::get('date.year') as $key => $year)
                                <option value="{{ $key }}">{{ $year }}</option>
                            @endforeach
                        </select>
                        日
                        <select class="datetime" name="release_hour">
                            @foreach(Config::get('date.hour') as $key => $hour)
                                <option value="{{$key}}">{{$hour}}</option>
                            @endforeach
                        </select>:
                        <select class="datetime" name="release_minute">
                            @foreach(Config::get('date.minute') as $key => $minute)
                                <option value="{{$key}}">{{$minute}}</option>
                            @endforeach
                        </select>
                    </div>
                </td>
            </tr>
            <tr>
            <th>endStatus</th>
            <td><input type="checkbox" name="endstatus">チェックを入れると公開終了時間を設定できます。</td>
            </tr>
            <tr>
                <th>end_at</th>
                <td>
                <div class="end_at">
                        <select class="datetime" name="end_year">
                            @foreach(Config::get('date.year') as $key => $year)
                                <option value="{{$key}}">{{$year}}</option>
                            @endforeach
                        </select>
                        年
                        <select class="datetime" name="end_month">
                            @foreach(Config::get('date.month') as $key => $month)
                                <option value="{{$key}}">{{$month}}</option>
                            @endforeach
                        </select>
                        月
                        <select class="datetime" name="end_day">
                            @foreach(Config::get('date.year') as $key => $year)
                                <option value="{{$key}}">{{$year}}</option>
                            @endforeach
                        </select>
                        日
                        <select class="datetime" name="end_hour">
                            @foreach(Config::get('date.hour') as $key => $hour)
                                <option value="{{$key}}">{{$hour}}</option>
                            @endforeach
                        </select>:
                        <select class="datetime" name="end_minute">
                            @foreach(Config::get('date.minute') as $key => $minute)
                                <option value="{{$key}}">{{$minute}}</option>
                            @endforeach
                        </select>
                    </div>
                </td>
            </tr>
        </table>
        <div class="submitPlace">
            <input type="submit" value="submit">
        </div>
    </form>
</div>

@endsection