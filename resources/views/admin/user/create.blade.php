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
              <h3 class="box-title">Add Admin</h3>

            </div>
            <!-- /.box-header -->
            <!-- form start -->
            @include('includes.messeges')
            <form role="form" action="{{ route('user.store')}}" method="post">
              {{ csrf_field()}}
              <div class="box-body">
                
              	<div class="col-lg-offset-4 col-lg-4">
              		<div class="form-group">
                  <label for="name">User name</label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="User name" autocomplete="off">
                </div>
                
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" >
                </div>

                <div class="form-group">
                  <label for="phone">Phone number</label>
                  <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone number" autocomplete="off">
                </div>

                <div class="form-group">
                  <label for="password">password</label>
                  <input type="password" class="form-control" name="password" id="password" placeholder="password" autocomplete="off">
                </div>

                <div class="form-group">
                  <label for="password_confirmation">confirm password</label>
                  <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="confirm password">
                </div>

                <div class="form-group">
                  <label for="confirm password">status</label>
                <div class="checkbox">
                  <label><input type="checkbox" name="status" value="1">status</label>
                </div>
              </div>

                <div class="form-group">
                <label>select roles</label>
                <select class="form-control select2" multiple="multiple" data-placeholder="Select role"
                        style="width: 100%;" name="role[]">
                  @foreach($roles as $role)
                    <option value="{{$role->id}}">{{$role->name}}</option>
                  @endforeach
                </select>
              </div>

                <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-success" href="{{ route('user.index')}}">Back</a>
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