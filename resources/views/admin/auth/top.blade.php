@extends('admin.layout')
@section('title', 'Page Title')
@section('head')
@endsection

@section('content')
<div class="container">
    <h2>管理TOP</h2>
    <div class="card-body">
     @if (session('status'))
         <div class="alert alert-success" role="alert">
             {{ session('status') }}
         </div>
     @endif
    </div>
</div>
@endsection