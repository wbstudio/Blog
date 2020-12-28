@extends('admin.layout')
@section('title', 'Page Title')
@section('head')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="{{ asset('js/administer/article.js') }}"></script>
<script src="https://cdn.ckeditor.com/4.14.0/full/ckeditor.js"></script>
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
                    <select>
                    </select>
                    <select>
                    </select>
                </td>
            </tr>
            <tr>
                <th>category</th>
                <td></td>
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
                </script>
                </td>
            </tr>
            <tr>
                <th></th>
                <td></td>
            </tr>
            <tr>
                <th>eyecatch</th>
                <td><input type="file" name="eyecatch"></td>
            </tr>
            <tr>
                <th></th>
                <td></td>
            </tr>
        </table>
        <input type="submit" value="submit">
    </form>
</div>

@endsection