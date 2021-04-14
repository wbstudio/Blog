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
     <form action="{{ route('admin.pickup.editUpdate',['id' => $pickups->id])}}" method="post">
     @csrf
     @if(isset($status) && $status == "duplicate")
     <p>へんこうしたため著者とカテゴリーが両方かぶってる</p>
     @endif
     <table class="formTable">
        <tbody>
            <tr>
                <th>なまえ(便宜上) </th>
                <td><input type="text" name="name">{{$pickups -> name}}</td>
            </tr>
            <tr>
                <th>auther</th>
                <td>
                    <select class="auther" name="auther_id">
                        <option value="9999" @if($pickups -> auther_id == 9999) selected @endif>著者</option>
                        @foreach(Config::get('auther') as $key => $auther)
                            <option value="{{$key}}" @if($pickups -> auther_id == $key) selected @endif>{{$auther["name"]}}</option>
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
                            <option value="{{$key}}" @if($pickups -> category_id == $key) selected @endif>{{$category["name"]}}</option>
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
                            <option value="{{$article->id}}" @if(isset($pickups -> articles[0]) && $pickups -> articles[0] == $article->id) selected @endif>{{$article->title}}</option>
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
                            <option value="{{$article->id}}" @if(isset($pickups -> articles[1]) && $pickups -> articles[1] == $article->id) selected @endif>{{$article->title}}</option>
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
                            <option value="{{$article->id}}" @if(isset($pickups -> articles[2]) && $pickups -> articles[2] == $article->id) selected @endif>{{$article->title}}</option>
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
                            <option value="{{$article->id}}" @if(isset($pickups -> articles[3]) && $pickups -> articles[3] == $article->id) selected @endif>{{$article->title}}</option>
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
                            <option value="{{$article->id}}" @if(isset($pickups -> articles[4]) && $pickups -> articles[4] == $article->id) selected @endif>{{$article->title}}</option>
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
                            <option value="{{$article->id}}" @if(isset($pickups -> articles[5]) && $pickups -> articles[5] == $article->id) selected @endif>{{$article->title}}</option>
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
                            <option value="{{$article->id}}" @if(isset($pickups -> articles[6]) && $pickups -> articles[6] == $article->id) selected @endif>{{$article->title}}</option>
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
                            <option value="{{$article->id}}" @if(isset($pickups -> articles[7]) && $pickups -> articles[7] == $article->id) selected @endif>{{$article->title}}</option>
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
    <input type="hidden" name="hidden_auther" value="{{$pickups -> auther_id}}">
    <input type="hidden" name="hidden_category" value="{{$pickups -> category_id}}">
     </form>
</div>
@endsection