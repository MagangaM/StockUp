@extends('adminlte::page')

@section('content_header')
    <nav aria-label="breadcrumb" style="font-size: 15pt">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/admin') }}" style="color:#ff9204">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/admin/categories') }}" style="color:#ff9204">Categories</a></li>
            <li class="breadcrumb-item active" aria-current="page">Creation of Categories</li>
        </ol>
    </nav>
    <hr>
@stop

@section('content')
    <div class="row">
        <div class="col-md-5">
            <div class="card card-primary">
              <div class="card-header bg-orange">
                <h3 class="card-title"><b>Fill in the form data</b></h3>
               
                <!-- /.card-tools -->
            </div>
              <!-- /.card-header -->
                <div class="card-body" style="display: block;">
                    <form action="{{ url('/admin/categories/create') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Category Name</label>
                                        <input type="text" value="{{ old ('name') }}" class="form-control" id="name" name="name" placeholder="Enter the name of the category" required>
                                        @error ('name')
                                            <small style="color: red">{{ $message }}</small>
                                        @enderror
                                </div>
                                
                            </div>
                            
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Category's Description <b>(Optional)</b> </label>
                                        <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter a brief description of the category">{{ old ('description') }}</textarea>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <a href="{{ url('/admin/categories') }}" class="btn btn-default">Cancel</a>
                                    <button type="submit" class="btn bg-orange">Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>    
    </div> 
    
@stop

@section('css')
   
@stop

@section('js')
    
@stop