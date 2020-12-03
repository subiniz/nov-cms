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
              <!-- Below included files generates Error Messages -->
              @include('errors.error') 
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Books Listing</h3>
                  <a href="/books/create" class="btn btn-xs btn-primary">Add New</a>

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
                      <th>Action</th>
                    </tr>
                    @php($i = 0)
                    @foreach($books as $book)
                        <tr>
                          <td>{{ ++$i }}</td>
                          <td>{{ $book->title }}</td>
                          <td>{{ $book->description }}</td>
                          <td>{{ $book->author }}</td>
                          <td>{!! $book->availability == true ? "<span class='label label-success'>Available</span>" : "<span class='label label-danger'>Unavailable</span>" !!}</td>
                          <td>
                            <a href={{ "/books/$book->id/edit" }} class="btn btn-primary btn-sm">Edit</a>
                            {{-- DELETE METHOD start --}}
                            <form method="post" action="/books/{{ $book->id }}" class='form-delete'>
                              @csrf
                              @method('delete')
                              <button class="btn btn-danger btn-sm submit-delete">Delete</button>
                            </form>
                            {{-- DELETE METHOD end --}}
                          </td>
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

        {{-- Delete Confirmation Modal Box start--}}
        <div class="modal fade" id="modal-delete">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Delete Confirmation</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Are You Sure?</p>
              </div>
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary" id="delete-submit">Ok</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        {{-- Delete Confirmation Modal Box end--}}


        {{-- JQuery to control the modal box --}}
        <script>
          $(document).on('click', '.form-delete', function(e) {
            e.preventDefault();
            var form = $(this);
            $('#modal-delete').modal().on('click', '#delete-submit', function() {
              form.submit();
            });
          })
        </script>

      </section>
      <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection