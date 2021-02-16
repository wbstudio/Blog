@extends('front.pc.include.toplayout')
@section('title', 'topページ')
@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
@endsection

@section('content')
<div class="container">
    <h2></h2>
    <div class="card-body">
     @if (session('status'))
         <div class="alert alert-success" role="alert">
             {{ session('status') }}
         </div>
     @endif
     <div class="">
     a<br>
     a<br>
     a<br>
     a<br>
     a<br>
     a<br>
     a<br>
     a<br>
     a<br>
     a<br>
     a<br>
     a<br>
     a<br>
     a<br>
     a<br>
     a<br>
     a<br>
     a<br>
     a<br>
     a<br>
     a<br>
     a<br>
     a<br>
     a<br>
     a<br>
     a<br>
     a<br>
     a<br>
     a<br>
     a<br>
     a<br>
     a<br>
     a<br>
     a<br>
     a<br>
     </div>
    </div>
</div>
@endsection