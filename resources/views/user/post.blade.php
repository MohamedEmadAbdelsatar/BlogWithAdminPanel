@extends('user/app')
@section('bg-img',Storage::disk('local')->url($post->image))
@section('head')
<link rel="stylesheet" type="text/css" href="{{asset('user/css/prism.css')}}">
@endsection
@section('title',$post->title)
@section('subHeading',$post->subtitle)
@section('main-content')
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.1&appId=516418308804091&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- Post Content -->
    <article>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <small>created at {{$post->created_at}}</small>
            
            @foreach($post->categories as $category)
            <small class="pull-right" style="margin-right:7px "><a href="category/{{$category->slug}}">{{$category->name}}</a></small>
            @endforeach
            
            {!! htmlspecialchars_decode($post->body) !!}
            <h3>Tags</h3>
            @foreach($post->tags as $tag)
            <small class="pull-left" style="margin-right:7px;border-radius: 5px; border: 1px solid gray;padding: 4px "><a href="tag/{{$tag->slug}}">{{$tag->name}}</a></small>
            @endforeach
            <br>
            <hr>
            <div class="fb-comments" data-href="{{ Request::url()}}" data-numposts="6"></div>
          </div>
        </div>
      </div>
    </article>

    <hr>

@endsection
@section('footer')
<script type="text/javascript" src="{{asset('user/js/prism.js')}}"></script>
@endsection