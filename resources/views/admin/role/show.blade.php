@extends('admin/layouts/app')

@section('headsection')
  <link rel="stylesheet" href="{{ asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection

@section('main-content')
	<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Roles page
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Roles</a></li>
        
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Roles</h3>
          <a class="btn btn-primary" href="{{ route('role.create')}}">ADD NEW Role</a>
          
        </div>
        <div class="box-body">
          
            
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.NO</th>
                  <th>Role name</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($roles as $role)
                  <tr>
                  <td>{{$loop->index+1}}</td>
                  <td>{{$role->name}}</td>
                  <td><a href="{{ route('role.edit',$role->id)}}"><span class="glyphicon glyphicon-edit"></span></a></td>
                  <td>
                    <form id="delete-form-{{$role->id}}" method="post" action="{{ route('role.destroy',$role->id)}}" style="display: none;">
                      {{csrf_field()}}
                      {{method_field('DELETE')}}
                      
                    </form>
                    <a  onclick="
                                    if(confirm('are you sure')){
                                      event.preventDefault();
                                      console.log('delete-form-{{$role->id}}');
                                      document.getElementById('delete-form-{{$role->id}}').submit();
                                    }else{
                                      event.preventDefault();
                                    }"><span class="glyphicon glyphicon-trash"></span></a></td>
                </tr>
                @endforeach
                
                
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <!-- /.box-body -->
       
      
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection

@section('footersection')
<script src="{{ asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script>
  $(function () {
    
    $('#example1').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : false,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
@endsection