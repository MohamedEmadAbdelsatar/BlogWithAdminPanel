@extends('admin/layouts/app')

@section('headsection')
  <link rel="stylesheet" href="{{ asset('admin/bower_components/select2/dist/css/select2.min.css')}}">
@endsection

@section('main-content')

<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Titles</h3>
              @include('includes.messeges')
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ route('post.store')}}" method="post" enctype="multipart/form-data">
              {{ csrf_field()}}
              <div class="box-body">
              	<div class="col-lg-6">
              		<div class="form-group">
                  <label for="title">Post title</label>
                  <input type="text" class="form-control" name = "title" id="title" placeholder="Enter title" autocomplete="off">
                </div>
                
                <div class="form-group">
                  <label for="subtitle">Post subtitle</label>
                  <input type="text" class="form-control" name = "subtitle" id="subtitle" placeholder="Enter subtitle" autocomplete="off">
                </div>

                <div class="form-group">
                  <label for="slug">slug</label>
                  <input type="text" class="form-control"  name = "slug" id="slug" placeholder="Enter slug" autocomplete="off">
                </div>
              	</div>
                
              	<div class="col-lg-6">
                <div class="form-group">
                  <label for="image">image</label>
                  <input type="file" id="image" name="image">
                </div>
                
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="status" value="1"> Publish
                  </label>
                </div>
                <div class="form-group">
                <label>select tags</label>
                <select class="form-control select2" multiple="multiple" data-placeholder="Select Tag"
                        style="width: 100%;" name="tags[]">
                        @foreach($tags as $tag)
                          <option value="{{$tag->id}}">{{$tag->name}}</option>
                        @endforeach
                </select>
              </div>
              <div class="form-group">
                <label>select category</label>
                <select class="form-control select2" multiple="multiple" data-placeholder="Select category"
                        style="width: 100%;" name="categories[]">
                        @foreach($categories as $category)
                          <option value="{{$category->id}}" >{{$category->name}}</option>
                        @endforeach
                </select>
              </div>
              </div>
              <!-- /.box-body -->

              
          </div>
          
            <div class="box-header">
              <h3 class="box-title">Body</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              
                <textarea name="body" id="editor1"
                          style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
              
            </div>
          
          <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-success" href="{{ route('post.index')}}">Back</a>
              </div>
            </form>
          </div>
          <!-- /.box -->

          
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
 
</div> 
 @endsection
 @section('footersection')


 <script src="{{ asset('admin/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
 <script type="text/javascript">
   $(document).ready(function(){
    $('.select2').select2();
   });
 </script>
  
 @endsection