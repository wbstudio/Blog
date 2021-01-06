@extends('admin.layout')
@section('title', 'Page Title')
@section('head')
<link rel="stylesheet" href="{{ asset('css/admin/tag.css') }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="{{ asset('js/admin/tag.js') }}"></script>
@endsection

@section('content')
<div class="container">
    <h2>TagList</h2>
    <div class="card-body">
     @if (session('status'))
         <div class="alert alert-success" role="alert">
             {{ session('status') }}
         </div>
     @endif
     <div class="list_top_area">
        <form method="POST" action="{{route('tagRegist')}}" class="">
        @csrf
        <input type="text" name="name">
        <input type="submit" value="新規追加">
        </form>
     </div>
    <form action="{{route('tagDelete')}}" method="POST">
        @csrf
        <div class="tag_list">
        @if(isset($tags) && count($tags) > 0)
            @foreach($tags as $tag)
            <div class="tag_detail">
                <img src="../../images/admin/common/pencil.svg" class="pencil">
                <span class="nametext">{{$tag->name}}</span>
                <input type="checkbox" name="delete[]" value="{{$tag->id}}" class="namecheck">
                <input type="text" name="name" value="{{$tag->name}}"  style="display:none;" class="replacetext" id="{{$tag->id}}">
                <input type="button" value="p"  style="display:none;" class="replacesubmit">
                        
            </div>
            @endforeach
        @endif
        </div>
        <div>
            <input type="submit" value="checkしたものを消す">
        </div>
    </form>
    </div>
</div>
@endsection