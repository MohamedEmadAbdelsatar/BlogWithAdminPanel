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
              <h3 class="box-title">Titles</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
              	<div class="col-lg-6">
              		<div class="form-group">
                  <label for="name">Category title</label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="Enter Category" autocomplete="off">
                </div>
                
                <div class="form-group">
                  <label for="slug">Category slug</label>
                  <input type="text" class="form-control" name="slug" id="slug" placeholder="Enter slug" autocomplete="off">
                </div>
              	</div>
                
              	
          </div>
          
            
          <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
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