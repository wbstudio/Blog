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
    <form method="POST" action="{{route('articleInsert')}}" class="regist_place"  enctype="multipart/form-data">
    @csrf
        <table>
        <tr>
                <th>auther<br>auther_category</th>
                <td>
                <select class="auther" name="auther">
                        <option value="">著者</option>
                        @foreach(Config::get('auther') as $key => $auther)
                            <option value="{{$key}}" @if(isset($autherhidden) && $autherhidden == $key) selected @endif>{{$auther["name"]}}</option>
                        @endforeach
                    </select>
                    <select class="auther_category"  name="auther_category" disabled>
                        <option value="">著者内カテゴリー</option>
                        @foreach(Config::get('auther') as $key => $auther)
                            @foreach($auther["category"] as $idx => $auther_category)
                                <option value="{{$idx}}" class="auther_{{$key}}" @if(isset($authercategoryhidden) && $authercategoryhidden == $idx) selected @endif>{{$auther_category["name"]}}</option>
                            @endforeach    
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <th>category</th>
                <td>
                <select class="category" name="main_category">
                        <option value="">全体でのカテゴリー</option>
                        @foreach(Config::get('category') as $key => $category)
                            <option value="{{$key}}" @if(isset($categoryhidden) && $categoryhidden == $key) selected @endif>{{$category["name"]}}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <th>tag</th>
                <td>
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
                        @foreach(Config::get('status.article') as $key => $status)
                            <option value="{{$key}}">{{$status}}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <th>release_at</th>
                <td>
                    <div class="release">
                        <select class="datetime" name="release_year">
                            @foreach(Config::get('date.year') as $key => $year)
                                <option value="{{$key}}">{{$year}}</option>
                            @endforeach
                        </select>
                        年
                        <select class="datetime" name="release_month">
                            @foreach(Config::get('date.month') as $key => $month)
                                <option value="{{$key}}">{{$month}}</option>
                            @endforeach
                        </select>
                        月
                        <select class="datetime" name="release_day">
                            @foreach(Config::get('date.year') as $key => $year)
                                <option value="{{$key}}">{{$year}}</option>
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