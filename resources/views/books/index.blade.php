@extends('layouts.master')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <h1>
        {{ ucfirst(request()->segment(1)) }}
        <small>Manage Books</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Books</li>
    </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Books Listing</h3>
    
                  <div class="box-tools">
                    <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                      <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
    
                      <div class="input-group-btn">
                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th>S.N.</th>
                      <th>Title</th>
                      <th>Description</th>
                      <th>Author</th>
                      <th>Availability</th>
                    </tr>
                    @php($i = 0)
                    @foreach($books as $book)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->description }}</td>
                            <td>{{ $book->author }}</td>
                            <td>{!! $book->availability == true ? "<span class='label label-success'>Available</span>" : "<span class='label label-danger'>Unavailable</span>" !!}</td>
                        </tr>
                    @endforeach
                  </table>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
          </div>
        <!-- /.box -->
  
      </section>
      <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection