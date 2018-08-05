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
              <h3 class="box-title">Permissions</h3>

            </div>
            <!-- /.box-header -->
            <!-- form start -->
            @include('includes.messeges')
            <form role="form" action="{{ route('permission.store')}}" method="post">
              {{ csrf_field()}}
              <div class="box-body">
              	<div class="col-lg-offset-4 col-lg-4">
              		<div class="form-group">
                  <label for="name">permission title</label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="Enter permission" autocomplete="off">
                </div>

                
                <div class="form-group">
                  <label for="for">permission for</label>
                  <select name="for" ìd="for" class="form-control">
                    <option class="form-control" selected disabled>select permission for</option>
                    <option class="form-control" value="post">post</option>
                    <option class="form-control" value="user">user</option>
                    <option class="form-control" value="other">other</option>
                  </select>
                </div>
                
                <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-success" href="{{ route('permission.index')}}">Back</a>
              </div>
              	</div>
              
                
              	
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