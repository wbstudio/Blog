@extends('admin.layout')
@section('title', 'Page Title')
@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="{{ asset('js/admin/article.js') }}"></script>
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
     <form action="{{ route('admin.pickup.delete')}}" method="post">
     @csrf
     <table class="listTable">
        <thead>
            <tr>
                <th>ID</th>
                <th>なまえ</th>
                <th>著者</th>
                <th>カテゴリー</th>
                <th>削除</th>
            </tr>
        </thead>
        <tbody>
            @if(isset($pickups) && count($pickups) > 0)
            @foreach($pickups as $index => $pickup)
            <tr>
                <td class="right narrow"><a href="{{ route('admin.pickup.editShowForm', ['pickup_id' => $pickup->id,'status' => 'fresh']) }}">{{ $pickup -> id }}</td>
                <td class="left wide">@if(!isset($pickup->name))NoName @else{{ $pickup -> name }}@endif</td>
                <td class="center middle">@if(isset($pickup->auther_id) && $pickup->auther_id == 9999) - @else {{config("auther.$pickup->auther_id.name")}}@endif</td>
                <td class="center middle">@if(isset($pickup->category_id) && $pickup->category_id == 9999)-@else {{config("category.$pickup->category_id.name")}}@endif</td>
                <td class="center narrow"><input type="checkbox" value="{{ $pickup -> id }}" name="delete_id[]"></td>
            </tr>
            @endforeach
            @endif
         </tbody>
     </table>

     <div class="buuton_area">
        <div class="add">
            <a href="{{ route('admin.pickup.registShowForm',['status' => 'fresh']) }}">+New</a>
        </div>
        <div class="remove">
            <button type="submit">checkしたものを削除</button>
        </div>
    </div>
     </form>
</div>
@endsection