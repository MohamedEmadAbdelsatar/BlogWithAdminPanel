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
              <h3 class="box-title">Edit Role</h3>

            </div>
            <!-- /.box-header -->
            <!-- form start -->
            @include('includes.messeges')
            <form role="form" action="{{ route('role.update',$role->id)}}" method="post">
              {{ csrf_field()}}
              {{method_field('PUT')}}
              <div class="box-body">
              	<div class="col-lg-offset-3 col-lg-5 text-center">
              		<div class="form-group">
                  <label for="name">role title</label>
                  <input type="text" class="form-control" name="name" id="name" value="{{$role->name}}" placeholder="Enter role" autocomplete="off">
                </div>
                <div class="row">
                <div class="col-lg-4">
                  <label for="name">Posts permissions</label>
                <select class="form-control select2" multiple="multiple" data-placeholder="Select permission"
                        style="width: 100%;" name="permission[]">
                  @foreach($permissions as $permission)
                    @if($permission->for == 'post')
                    <option value="{{$permission->id}}"
                      @foreach($role->permissions as $permit)
                        @if($permit->id == $permission->id) selected @endif
                      @endforeach
                      >{{$permission->name}}</option>
                    @endif
                  @endforeach
                </select>
              </div>
                
                <div class="col-lg-4">
                  <label for="name">User permissions</label>
                  <select class="form-control select2" multiple="multiple" data-placeholder="Select permission"
                        style="width: 100%;" name="permission[]">
                  @foreach($permissions as $permission)
                    @if($permission->for == 'user')
                    <option value="{{$permission->id}}"
                      @foreach($role->permissions as $permit)
                        @if($permit->id == $permission->id) selected @endif
                      @endforeach
                      >{{$permission->name}}</option>
                    @endif
                  @endforeach
                </select>
                   
                </div>

                <div class="col-lg-4">
                  <label for="name">other permissions</label>
                <select class="form-control select2" multiple="multiple" data-placeholder="Select permission"
                        style="width: 100%;" name="permission[]">
                  @foreach($permissions as $permission)
                    @if($permission->for == 'other')
                    <option value="{{$permission->id}}"
                      @foreach($role->permissions as $permit)
                        @if($permit->id == $permission->id) selected @endif
                      @endforeach
                      >{{$permission->name}}</option>
                    @endif
                  @endforeach
                </select>
              </div>
                </div>
                <br>
                
                <div class="form-group">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a class="btn btn-success" href="{{ route('role.index')}}">Back</a>
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