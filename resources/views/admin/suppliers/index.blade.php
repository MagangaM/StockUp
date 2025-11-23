@extends('adminlte::page')

@section('content_header')
    <nav aria-label="breadcrumb" style="font-size: 15pt">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/admin') }}" style="color:#ff9204">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/admin/suppliers') }}" style="color:#ff9204">Suppliers</a></li>
            <li class="breadcrumb-item active" aria-current="page">List of Suppliers</li>
        </ol>
    </nav>
    <hr>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-orange">
              <div class="card-header">
                <h3 class="card-title"><b>Suppliers Contracted</b></h3>

                <div class="card-tools">
                  <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" style="border-color: #ff8800 ;background-color: #ff8800; color: rgb(0, 0, 0);" data-toggle="modal" data-target="#ModalCreate">
                    <b>Add New</b>
                    </button>


                    <!-- Modal -->
                    <div class="modal fade" id="ModalCreate" tabindex="-1" aria-labelledby="ModalCreateLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header" style="border-color: #ff8800 ;background-color: #ff8800; color: white;">
                            <h5 class="modal-title" id="ModalCreateLabel"><b>Add a new supplier</b></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ url('/admin/supplier/create') }}" method="POST">
                            @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Company Name</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-industry"></i></span>
                                                    </div>
                                                    <input type="text" value="{{ old ('company') }}" class="form-control" id="company" name="company" placeholder="Enter the name of the company" required>
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
                                                    <input type="text" value="{{ old ('address') }}" class="form-control" id="address" name="address" placeholder="Enter the address of the company" required>
                                                    @error ('address')
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
                                                    <input type="text" value="{{ old ('name') }}" class="form-control" id="name" name="name" placeholder="Enter the name of the supplier" required>
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
                                                    <input type="text" value="{{ old ('phonenumber') }}" class="form-control" id="phonenumber" name="phonenumber" placeholder="Enter the phone number of the supplier" required>
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
                                                    <input type="text" value="{{ old ('email') }}" class="form-control" id="email" name="email" placeholder="Enter the email of the supplier" required>
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
                                            <a href="{{ url('/admin/suppliers') }}" class="btn btn-default">Cancel</a>
                                            <button type="submit" class="btn btn-primary" style="border-color: #ff8800 ;background-color: #ff8800; color: white;">Register</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        </div>
                    </div>
                    </div>
                 
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
                    <div class="card-body table-responsive" style="display: block;">
                        <div class="card-body" style="display: block;">
                            <table id="example1" class="table table-striped table-hover table-bordered table-sm">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Company</th>
                                        <th>Address</th>
                                        <th>Name</th>
                                        <th>Phone Number</th>
                                        <th>Email</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($suppliers as $supplier )
                                    <tr>
                                        <td style="text-align: center ">{{ $loop->iteration }}</td>
                                        <td>{{ $supplier->company }}</td>
                                        <td>{{ $supplier->address }}</td>
                                        <td>{{ $supplier->name }}</td>
                                        <td>{{ $supplier->phonenumber }}</td>
                                        <td>{{ $supplier->email }}</td>
                                        <td>
                                            <div class="btn-group-sm" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#ModalShow{{ $supplier->id }}">
                                                    <i class="fas fa-eye"> View</i>
                                                </button>


                                                <!-- Modal -->
                                                <div class="modal fade" id="ModalShow{{ $supplier->id }}" tabindex="-1" aria-labelledby="ModalShowLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                    <div class="modal-header" style="border-color: #ff0048 ;background-color: #ff0048; color: rgb(0, 0, 0);">
                                                        <h5 class="modal-title" id="ModalShowLabel"><b>Details about this particular supplier</b></h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="name">Company Name</label>
                                                                        <div class="input-group mb-3">
                                                                            <div class="input-group-prepend">
                                                                                <span class="input-group-text"><i class="fas fa-industry"></i></span>
                                                                            </div>
                                                                            <input type="text" value="{{ $supplier->company }}" class="form-control" id="company" name="company" placeholder="Enter the name of the company" readonly>
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
                                                                            <input type="text" value="{{ $supplier->address }}" class="form-control" id="address" name="address" placeholder="Enter the address of the company" readonly>
                                                                            @error ('address')
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
                                                                            <input type="text" value="{{ $supplier->name }}" class="form-control" id="name" name="name" placeholder="Enter the name of the supplier" readonly>
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
                                                                            <input type="text" value="{{ $supplier->phonenumber }}" class="form-control" id="phonenumber" name="phonenumber" placeholder="Enter the phone number of the supplier" readonly>
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
                                                                            <input type="text" value="{{ $supplier->email }}" class="form-control" id="email" name="email" placeholder="Enter the email of the supplier" readonly>
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
                                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>
                                                <a href="{{ url('/admin/supplier/'.$supplier->id.'/edit') }}" class="btn btn-success"><i class="fas fa-pencil-alt"> Edit</i></a>
                                                                                                   
                                            
                                                <form action="{{ url('/admin/supplier/'.$supplier->id) }}" id= "myform{{ $supplier->id }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger" onclick="myask{{ $supplier->id }}(event)">
                                                        <i class="fas fa-trash-alt"> Delete</i>
                                                     <script>{function myask{{ $supplier->id }}(event){
                                                        event.preventDefault();
                                                        Swal.fire({
                                                        title: "Are you sure you want to delete this supplier?",
                                                        text: "",
                                                        icon: "question",
                                                        showCancelButton: true,
                                                        confirmButtonColor: "#3085d6",
                                                        cancelButtonColor: "#d33",
                                                        confirmButtonText: "Yes, Delete it!",
                                                        cancelButtonText: "No, Cancel!"
                                                        }).then((result) => {
                                                        if (result.isConfirmed) {
                                                            document.getElementById('myform{{ $supplier->id }}').submit();
                                                        }
                                                        });
                                                    }}
                                                     </script>
                                                    </button>
                                                </form>                                         
                                                </div>
                                            </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                    </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>    
    </div> 
    
@stop

@section('css')
    <style>
    
    #example1_wrapper .dt-buttons {
        background-color: transparent;
        box-shadow: none;
        border: none;
        display: flex;
        justify-content: center; 
        gap: 10px; 
        margin-bottom: 15px; 
    }

    
    #example1_wrapper .btn {
        color: #fff; 
        border-radius: 4px; 
        padding: 5px 15px; 
        font-size: 14px; 
    }

    .btn-danger { background-color: #dc3545; border: none; }
    .btn-success { background-color: #28a745; border: none; }
    .btn-info { background-color: #17a2b8; border: none; }
    .btn-warning { background-color: #ffc107; color: #212529; border: none; }
    .btn-default { background-color: #6e7176; color: #212529; border: none; }
</style>
@stop

@section('js')
        <script>  $(function () {
            $("#example1").DataTable({
                "pageLength": 15,
                "responsive": true,
                "lengthChange": true,
                "autoWidth": false,
                buttons: [
                    { text: '<i class="fas fa-copy"></i> COPY', extend: 'copy', className: 'btn btn-default' },
                    { text: '<i class="fas fa-file-pdf"></i> PDF', extend: 'pdf', className: 'btn btn-danger' },
                    { text: '<i class="fas fa-file-csv"></i> CSV', extend: 'csv', className: 'btn btn-info' },
                    { text: '<i class="fas fa-file-excel"></i> EXCEL', extend: 'excel', className: 'btn btn-success' },
                    { text: '<i class="fas fa-print"></i> PRINT', extend: 'print', className: 'btn btn-warning' }
                ]
            }).buttons().container().appendTo('#example1_wrapper .row:eq(0)');
        });

        function myask{{ $supplier->id }}(event){
            event.preventDefault();
            Swal.fire({
            title: "Are you sure you want to delete this supplier?",
            text: "",
            icon: "question",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, Delete it!",
            cancelButtonText: "No, Cancel!"
            }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('myform{{ $supplier->id }}').submit();
            }
            });
        }
    </script>
@stop