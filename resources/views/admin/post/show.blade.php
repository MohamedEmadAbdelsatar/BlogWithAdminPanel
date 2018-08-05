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
        Posts page
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Posts</a></li>
        
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Posts</h3>
          @can('posts.create', Auth::user())
          <a class="btn btn-primary" href="{{ route('post.create')}}">ADD NEW POST</a>
          @endcan
          
        </div>
        
        
            
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.NO</th>
                  <th>title</th>
                  <th>subtitle</th>
                  <th>Slug</th>
                  <th>Like</th>
                  <th>created_at</th>
                  @can('posts.update',Auth::user())
                  <th>Edit</th>
                  @endcan
                  @can('posts.delete', Auth::user())
                  <th>Delete</th>
                  @endcan
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                  <tr>
                  <td>{{$loop->index+1}}</td>
                  <td>{{$post->title}}</td>
                  <td>{{$post->subtitle}}</td>
                  <td>{{$post->slug}}</td>
                  <td><?php $cnt = 0 ?>@foreach($likes as $like) @if($like->post_id == $post->id) <?php $cnt++ ?> @endif @endforeach {{$cnt}} </td>
                  <td>{{$post->created_at}}</td>
                  @can('posts.update',Auth::user())
                  <td><a href="{{ route('post.edit',$post->id)}}"><span class="glyphicon glyphicon-edit"></span></a></td>
                  @endcan
                  @can('posts.delete', Auth::user())
                  <td>
                    <form id="delete-form-{{$post->id}}" method="post" action="{{ route('post.destroy',$post->id)}}" style="display: none;">
                      {{csrf_field()}}
                      {{method_field('DELETE')}}
                      
                    </form>
                    <a  onclick="
                                    if(confirm('are you sure')){
                                      event.preventDefault();
                                      console.log('delete-form-{{$post->id}}');
                                      document.getElementById('delete-form-{{$post->id}}').submit();
                                    }else{
                                      event.preventDefault();
                                    }"><span class="glyphicon glyphicon-trash"></span></a></td>
                  @endcan
                </tr>
                @endforeach
                
                
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        <!-- /.box-footer-->
      </div>
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