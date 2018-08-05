@extends('user/app')
@section('bg-img',asset('user/img/home-bg.jpg'))
@section('title','MyBlog')
@section('subHeading','the best blog ever')
@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
  @section('main-content')
<!-- Main Content -->
<div class="container">
  <div class="row" id="app">
    <div class="col-lg-8 col-md-10 mx-auto">
      <posts
      v-for='value in blog'
      :title=value.title
      :subtitle=value.subtitle
      :created_at=value.created_at
      :slug=value.slug
      :key=value.index
      :post-id=value.id
      :login ="@if(Auth::check()){{Auth::check()}}@else 0 @endif"
      :likes=value.likes.length></posts>
      <br>
      <!-- Pager -->
      <div class="clearfix">
        <center>{{$posts->links()}}</center>
      </div>
    </div>
  </div>
</div>

    <hr>
    @endsection
@section('footer')
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="{{ asset('js/app.js')}}"></script>
@endsection