@extends('admin.layout')
@section('title', 'Page Title')
@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="{{ asset('css/admin/pickup.css') }}">

@endsection

@section('content')
<div class="container">
    <h2>pickup一覧</h2>
    <div class="card-body">
     @if (session('status'))
         <div class="alert alert-success" role="alert">
             {{ session('status') }}
         </div>
     @endif
     </div>
     <form action="{{ route('admin.pickup.registInsert')}}" method="post">
     @csrf
     @if(isset($status) && $status == "duplicate")
     <p>著者とカテゴリーが両方かぶってる</p>
     @endif
     <table class="formTable">
        <tbody>
            <tr>
                <th>なまえ(便宜上) </th>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <th>auther</th>
                <td>
                    <select class="auther" name="auther_id">
                        <option value="9999" selected>著者</option>
                        @foreach(Config::get('auther') as $key => $auther)
                            <option value="{{$key}}">{{$auther["name"]}}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <th>category</th>
                <td>
                    <select class="category" name="category_id">
                        <option value="9999" selected>category</option>
                        @foreach(Config::get('category') as $key => $category)
                            <option value="{{$key}}">{{$category["name"]}}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <th>kiji01</th>
                <td>
                    <select class="article" name="article[]">
                        <option value="">kiji</option>
                        @foreach($articles as $key => $article)
                            <option value="{{$article->id}}">{{$article->title}}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <th>kiji02</th>
                <td>
                    <select class="article" name="article[]">
                        <option value="">kiji</option>
                        @foreach($articles as $key => $article)
                            <option value="{{$article->id}}">{{$article->title}}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <th>kiji03</th>
                <td>
                    <select class="article" name="article[]">
                        <option value="">kiji</option>
                        @foreach($articles as $key => $article)
                            <option value="{{$article->id}}">{{$article->title}}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <th>kiji04</th>
                <td>
                    <select class="article" name="article[]">
                        <option value="">kiji</option>
                        @foreach($articles as $key => $article)
                            <option value="{{$article->id}}">{{$article->title}}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <th>kiji05</th>
                <td>
                    <select class="article" name="article[]">
                        <option value="">kiji</option>
                        @foreach($articles as $key => $article)
                            <option value="{{$article->id}}">{{$article->title}}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <th>kiji06</th>
                <td>
                    <select class="article" name="article[]">
                        <option value="">kiji</option>
                        @foreach($articles as $key => $article)
                            <option value="{{$article->id}}">{{$article->title}}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <th>kiji07</th>
                <td>
                    <select class="article" name="article[]">
                        <option value="">kiji</option>
                        @foreach($articles as $key => $article)
                            <option value="{{$article->id}}">{{$article->title}}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <th>kiji08</th>
                <td>
                    <select class="article" name="article[]">
                        <option value="">kiji</option>
                        @foreach($articles as $key => $article)
                            <option value="{{$article->id}}">{{$article->title}}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
         </tbody>
     </table>

     <div class="buuton_area">
        <div class="resgist">
            <button type="submit">Regist</button>
        </div>
    </div>
     </form>
</div>
@endsection