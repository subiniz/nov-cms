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
        <li class="active">Edit Book</li>
    </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Edit A Book</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form method="POST" action={{ "/books/$books->id" }} enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                  <div class="box-body">
                    <div class="form-group">
                      <label for="title">Title</label>
                      <input type="text" name="title" class="form-control" id="title" 
                      placeholder="Enter title" value={{ $books->title }} required>
                    </div>
                    <div class="form-group">
                      <label for="description">Description</label>
                      <textarea name="description" class="form-control" id="description" cols="30" rows="10" required>{{ $books->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="author">Author</label>
                        <input type="text" name="author" class="form-control" id="author" 
                        placeholder="Enter author name" value={{ $books->author }} required>
                    </div>
                    <div class="form-group">
                        <label for="edition">Edition</label>
                        <input type="text" name="edition" class="form-control" id="edition" 
                        placeholder="Enter author name" value={{ $books->edition }}>
                    </div>
                    <div class="form-group">
                        <label for="datepicker">Published Date</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" name="published_date" class="form-control" 
                            data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" value={{ $books->published_date }} required>
                          </div>
                    </div>
                    <div class="form-group">
                      <label for="image">Book Thumbnail</label>
                      <input type="file" name="image" id="image">
    
                      {{-- <p class="help-block">Example block-level help text here.</p> --}}
                    </div>
                    <div class="form-group"> 
                        <label for="exampleInputPassword1">Availability</label>                      
                        <div class="radio">
                            <label>
                            <input type="radio" name="availability" id="optionsRadios1" value="1" @if($books->availability) {{ 'checked' }} @endif>
                            Available
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                            <input type="radio" name="availability" id="optionsRadios2" value="0" @if(!$books->availability) {{ 'checked' }} @endif>
                            Unavailable
                            </label>
                        </div>
                    </div>
                  </div>
                  <!-- /.box-body -->
    
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
            </div>
        </div>
      </section>
      <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection