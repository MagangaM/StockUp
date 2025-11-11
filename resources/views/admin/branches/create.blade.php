@extends('adminlte::page')

@section('content_header')
    <nav aria-label="breadcrumb" style="font-size: 15pt">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/admin') }}" style="color:#ff9204">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/admin/branches') }}" style="color:#ff9204">Branches</a></li>
            <li class="breadcrumb-item active" aria-current="page">Creation of Branches</li>
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
                <div class="card-body" style="display:block">
                    <form action="{{ url('/admin/branches/create') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Branch Name</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-building"></i></span>
                                            </div>
                                            <input type="text" value="{{ old ('name') }}" class="form-control" id="name" name="name" placeholder="Enter the name of the branch" required>
                                            @error ('name')
                                                <small style="color: red">{{ $message }}</small>
                                            @enderror
<<<<<<< HEAD
=======
                                        </div>
>>>>>>> 266a7f8076f74ebcf3f2f6276464a62f87608007
                                </div>
                                
                            </div>
                            
<<<<<<< HEAD
                            <div class="col-md-13">
=======
                            <div class="col-md-12">
>>>>>>> 266a7f8076f74ebcf3f2f6276464a62f87608007
                                <div class="form-group">
                                    <label for="name">Branch Address</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-map"></i></span>
                                            </div>
                                            <input type="text" value="{{ old ('address') }}" class="form-control" id="address" name="address" placeholder="Enter the address of the branch" required>
                                            @error ('name')
                                                <small style="color: red">{{ $message }}</small>
                                            @enderror
<<<<<<< HEAD
=======
                                        </div>
>>>>>>> 266a7f8076f74ebcf3f2f6276464a62f87608007
                                </div>
                                
                            </div>

<<<<<<< HEAD
                            <div class="col-md-14">
=======
                            <div class="col-md-12">
>>>>>>> 266a7f8076f74ebcf3f2f6276464a62f87608007
                                <div class="form-group">
                                    <label for="name">Branch Phone Number</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-phone-alt"></i></span>
                                            </div>
                                            <input type="text" value="{{ old ('phonenumber') }}" class="form-control" id="phonenumber" name="phonenumber" placeholder="Enter the phone number of the branch" required>
                                            @error ('name')
                                                <small style="color: red">{{ $message }}</small>
                                            @enderror
<<<<<<< HEAD
=======
                                        </div>
>>>>>>> 266a7f8076f74ebcf3f2f6276464a62f87608007
                                </div>
                                
                            </div>

<<<<<<< HEAD
                            <div class="col-md-15">
=======
                            <div class="col-md-12">
>>>>>>> 266a7f8076f74ebcf3f2f6276464a62f87608007
                                <div class="form-group">
                                    <label for="name">Branch Status</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-toggle-on"></i></span>
<<<<<<< HEAD
                                        </div>
=======
                                            </div>
>>>>>>> 266a7f8076f74ebcf3f2f6276464a62f87608007
                                        <select name="active" id="active" class="form-control" required>
                                            <option value="Select an option">Select an option</option>
                                            <option value="1" {{ old('active') == '1'? 'selected':'' }}>Active</option>
                                            <option value="0" {{ old('active') == '0'? 'selected':'' }}>Inactive</option>
                                        </select>
<<<<<<< HEAD
                                    </div>
                                            @error ('name')
                                                <small style="color: red">{{ $message }}</small>
                                            @enderror
=======
                                            @error ('name')
                                                <small style="color: red">{{ $message }}</small>
                                            @enderror
                                        </div>
>>>>>>> 266a7f8076f74ebcf3f2f6276464a62f87608007
                                </div>
                                
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <a href="{{ url('/admin/branches') }}" class="btn btn-default">Cancel</a>
<<<<<<< HEAD
                                    <button type="submit" class="btn bg-orange">Save</button>
=======
                                    <button type="submit" class="btn bg-orange">Register</button>
>>>>>>> 266a7f8076f74ebcf3f2f6276464a62f87608007
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