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
    <form method="POST" action="{{ route('article.update') }}" class="edit_place"  enctype="multipart/form-data">
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
                                <option value="{{ $id }}" data-category="{{ $auther['category'] }}" @if (!empty($articlesData->auther) && $articlesData->auther == $id) selected @endif>{{ $auther['name'] }}</option>
                            @endforeach
                    </select>
                    <input type="hidden" name="initial_auther" value="{{ $articlesData->auther }}">
                </td>
            </tr>
            <tr>
                <th>category</th>
                <td>
                    <select class="category" name="category">
                        <option value="">カテゴリー</option>
                            @foreach ($categoryNameList as $id => $name)
                                <option value="{{ $id }}" @if (!empty($articlesData->category) && $articlesData->category == $id) selected @endif>{{ $name }}</option>
                            @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <th>tag</th>
                <td>
                <div class="tag_list">
                    @foreach ($tagList as $tag)
                        <div class="tag_detail">
                            {{ $tag->name }}
                            <input type="checkbox" name="tag[]" value="{{ $tag->id }}" @if (is_array($articlesData->tagsData) && in_array($tag->id, $articlesData->tagsData)) checked @endif>
                        </div>
                    @endforeach
                </div>
                </td>
            </tr>
            <tr>
                <th>title</th>
                <td><input type="text" name="title" class="inp_text" value="{{ $articlesData->title }}"></td>
            </tr>
            <tr>
                <th>main</th>
                <td>
                <textarea name="main" id="editor">
                    {!! $articlesData->main !!}
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
                <td><input type="file" name="eyecatch"><br>
                @if (!empty($articlesData->eyecatch))
                    <img src="{{ asset('images/admin/article/eyecatch/' . $articlesData->eyecatch) }}">
                @endif
            </td>
            </tr>
            <tr>
                <th>heading</th>
                <td>
                    <textarea name="heading">{!! $articlesData->heading !!}</textarea>
                </td>
            </tr>
            <tr>
                <th>status</th>
                <td>
                    <select class="" name="status">
                        @foreach(Config::get('status.article') as $key => $status)
                            <option value="{{ $key }}" @if(isset($articlesData->status) && $articlesData->status == $key) selected @endif>{{ $status }}</option>
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
                <td>
                    <input type="checkbox" name="endstatus"  @if(isset($articlesData->editEndFlag) && $articlesData->editEndFlag == 1) checked @endif>
                    チェックを入れると公開終了時間を設定できます。
                </td>
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
        <input type="hidden" name="hiddenreleaseDate" value="{{ $articlesData->release_at}}">
        <input type="hidden" name="hiddenendDate" value="{{$articlesData->end_at}}">
        <input type="hidden" name="hiddenrelease" value=1>
        @if(isset($article->editEndFlag) && $article->editEndFlag == 1) 
            <input type="hidden" name="hiddenend" value=1>
        @endif
        <input type="hidden" name="id" value="{{ $articlesData->id }}">
        <div class="submitPlace">
            <input type="submit" value="submit">
        </div>
    </form>
</div>

@endsection