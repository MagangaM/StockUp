@extends('adminlte::page')

@section('content_header')
    <nav aria-label="breadcrumb" style="font-size: 15pt">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/admin') }}" style="color:#ff9204">Home</a></li>
<<<<<<< HEAD
            <li class="breadcrumb-item"><a href="{{ url('/admin/categories') }}" style="color:#ff9204">Products</a></li>
=======
            <li class="breadcrumb-item"><a href="{{ url('/admin/products') }}" style="color:#ff9204">Products</a></li>
>>>>>>> 266a7f8076f74ebcf3f2f6276464a62f87608007
            <li class="breadcrumb-item active" aria-current="page">List of Products</li>
        </ol>
    </nav>
    <hr>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-orange">
              <div class="card-header">
<<<<<<< HEAD
                <h3 class="card-title"><b>Products Available</b></h3>
=======
                <h3 class="card-title"><b>Products Catalog</b></h3>
>>>>>>> 266a7f8076f74ebcf3f2f6276464a62f87608007

                <div class="card-tools">
                  <a class="btn bg-orange" href="{{ url('/admin/products/create') }}" style="color:#090908"> <b>Add New</b> </a>
                 
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
                                        <th>Code</th>
                                        <th>Name</th>
<<<<<<< HEAD
                                        <th>Image</th>
=======
                                        <th>Description</th>
                                        <th style="text-align: center">Image</th>
>>>>>>> 266a7f8076f74ebcf3f2f6276464a62f87608007
                                        <th>Purchase Price</th>
                                        <th>Sale Price</th>
                                        <th>Minimum Stock</th>
                                        <th>Maximum Stock</th>
                                        <th>Unit of Measurement</th>
                                        <th>Status</th>
                                        <th>Category ID</th>
                                        <th>Actions</th>

                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($products as $product )
                                    <tr>
                                        <td style="text-align: center ">{{ $loop->iteration }}</td>
<<<<<<< HEAD
                                        <td>{{ $product->code}}</td>
                                        <td>{{ $product->name}}</td>
                                        <td>{{ $product->description}}</td>
                                        <td>{{ $product->image}}</td>
                                        <td>{{ $product->purchase_price }}</td>
                                        <td>{{ $product->sale_price }}</td>
                                        <td>{{ $product->minimum_stock}}</td>
                                        <td>{{ $product->maximum_stock}}</td>
                                        <td>{{ $product->unit_of_measurement}}</td>
=======
                                        <td>{{ $product->code }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>{!! $product->description !!}</td>
                                        <td style="text-align: center">
                                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="img-thumbnail" style="width: 50%; height: auto;">
                                        </td>
                                        <td>{{ $product->purchase_price }}</td>
                                        <td>{{ $product->sale_price }}</td>
                                        <td>{{ $product->minimum_stock }}</td>
                                        <td>{{ $product->maximum_stock }}</td>
                                        <td>{{ $product->unit_of_measurement }}</td>
>>>>>>> 266a7f8076f74ebcf3f2f6276464a62f87608007
                                         <td style="text-align: center">
                                            @if($product->status == '1')
                                                <span class="badge badge-success">In Stock</span>
                                            @else
                                                <span class="badge badge-danger">Out of Stock</span>
                                            @endif
                                        </td>
<<<<<<< HEAD

=======
                                        <td>{{ $product->category->name}}</td>
>>>>>>> 266a7f8076f74ebcf3f2f6276464a62f87608007
                                        <td style="text-align: center">
                                            <div class="btn-group-sm" role="group" aria-label="Basic example">
                                                <a href="{{ url('/admin/product/'.$product->id) }}" class="btn btn-info"><i class="fas fa-eye"> View</i></a>
                                                <a href="{{ url('/admin/product/'.$product->id.'/edit') }}" class="btn btn-success"><i class="fas fa-pencil-alt"> Edit</i></a>
                                                <form action="{{ url('/admin/product/'.$product->id) }}" id= "myform{{ $product->id }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger" onclick="myask{{ $product->id }}(event)">
                                                        <i class="fas fa-trash-alt"> Delete</i>
                                                     <script>{function myask{{ $product->id }}(event){
                                                        event.preventDefault();
                                                        Swal.fire({
                                                        title: "Are you sure you want to delete this Product?",
                                                        text: "",
                                                        icon: "question",
                                                        showCancelButton: true,
                                                        confirmButtonColor: "#3085d6",
                                                        cancelButtonColor: "#d33",
                                                        confirmButtonText: "Yes, Delete it!",
                                                        cancelButtonText: "No, Cancel!"
                                                        }).then((result) => {
                                                        if (result.isConfirmed) {
                                                            document.getElementById('myform{{ $product->id }}').submit();
                                                        }
                                                        });
<<<<<<< HEAD
                                                    }}</script>
=======
                                                    }}
                                                     </script>
>>>>>>> 266a7f8076f74ebcf3f2f6276464a62f87608007
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
<<<<<<< HEAD
                "pageLength": 20,
=======
                "pageLength": 15,
>>>>>>> 266a7f8076f74ebcf3f2f6276464a62f87608007
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

        function myask{{ $product->id }}(event){
            event.preventDefault();
            Swal.fire({
            title: "Are you sure you want to delete this Product?",
            text: "",
            icon: "question",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, Delete it!",
            cancelButtonText: "No, Cancel!"
            }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('myform{{ $product->id }}').submit();
            }
            });
        }
    </script>
@stop