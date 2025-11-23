@extends('adminlte::page')

@section('content_header')
    <nav aria-label="breadcrumb" style="font-size: 15pt">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/admin') }}" style="color:#ff9204">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/admin/suppliers') }}" style="color:#ff9204">Suppliers</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit supplier details</li>
        </ol>
    </nav>
    <hr>
@stop

@section('content')
    <div class="row">
        <div class="col-md-5">
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title"><b>Edit the supplier details below</b></h3>
               
                <!-- /.card-tools -->
            </div>
              <!-- /.card-header -->
                <div class="card-body" style="display:block">
                    <!-- Button trigger modal -->
                    <form action="{{ url('/admin/supplier/'.$supplier->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Company Name</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-industry"></i></span>
                                                    </div>
                                                    <input type="text" value="{{ $supplier->company }}" class="form-control" id="company" name="company" placeholder="Enter the name of the company" required>
                                                    @error ('company')
                                                        <small style="color: red">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                        </div>
                                        
                                    </div>
                                    
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Company Address</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-map"></i></span>
                                                    </div>
                                                    <input type="text" value="{{ $supplier->address }}" class="form-control" id="address" name="address" placeholder="Enter the address of the company" required>
                                                    @error ('name')
                                                        <small style="color: red">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                        </div>
                                        
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Supplier's Name</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                    </div>
                                                    <input type="text" value="{{ $supplier->name }}" class="form-control" id="name" name="name" placeholder="Enter the name of the supplier" required>
                                                    @error ('name')
                                                        <small style="color: red">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                        </div>
                                        
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Supplier's Phone Number</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-phone-alt"></i></span>
                                                    </div>
                                                    <input type="text" value="{{ $supplier->phonenumber }}" class="form-control" id="phonenumber" name="phonenumber" placeholder="Enter the phone number of the supplier" required>
                                                    @error ('phonenumber')
                                                        <small style="color: red">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                        </div>
                                        
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Supplier's Email</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                                    </div>
                                                    <input type="text" value="{{ $supplier->email }}" class="form-control" id="email" name="email" placeholder="Enter the email of the supplier" required>
                                                    @error ('email')
                                                        <small style="color: red">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                                <hr>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            
                                            <a href="{{ url('/admin/suppliers') }}" class="btn btn-danger">Cancel</a>
                                            <button type="submit" class="btn btn-success">Update</button>

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