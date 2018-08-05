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
              <h3 class="box-title">Tags</h3>

            </div>
            <!-- /.box-header -->
            <!-- form start -->
            @include('includes.messeges')
            <form role="form" action="{{ route('tag.store')}}" method="post">
              {{ csrf_field()}}
              <div class="box-body">
              	<div class="col-lg-6">
              		<div class="form-group">
                  <label for="name">Tag title</label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="Enter tag" autocomplete="off">
                </div>
                
                <div class="form-group">
                  <label for="slug">Tag slug</label>
                  <input type="text" class="form-control" name="slug" id="slug" placeholder="Enter slug" autocomplete="off">
                </div>
              	</div>
              
                
              	
          </div>
          
            
          <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-success" href="{{ route('tag.index')}}">Back</a>
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