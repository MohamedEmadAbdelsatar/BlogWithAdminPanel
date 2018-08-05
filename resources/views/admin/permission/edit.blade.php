@extends('admin/layouts/app')

@section('main-content')
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Permission</h3>

            </div>
            <!-- /.box-header -->
            <!-- form start -->
            @include('includes.messeges')
            <form role="form" action="{{ route('permission.update',$permission->id)}}" method="post">
              {{ csrf_field()}}
              {{method_field('PUT')}}
              <div class="box-body">
              	<div class="col-lg-offset-4 col-lg-4">
              		<div class="form-group">
                  <label for="name">permission title</label>
                  <input type="text" class="form-control" name="name" id="name" value="{{$permission->name}}" placeholder="Enter permission" autocomplete="off">
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