@extends('user/app')
@section('bg-img',asset('user/img/contact-bg.jpg'))

@section('title','Welcome to Home')
@section('subHeading','')
@section('main-content')

<!-- Post Content -->
    <article>
      <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                welcome {{Auth::user()->name}}
            </div>
        </div>
      </div>
    </article>

    <hr>

@endsection
@section('footer')

@endsection



{{--

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
--}}