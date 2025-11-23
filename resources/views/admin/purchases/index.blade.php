@extends('adminlte::page')

@section('content_header')
    <nav aria-label="breadcrumb" style="font-size: 15pt">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/admin') }}" style="color:#ff9204">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/admin/purchases') }}" style="color:#ff9204">Purchases</a></li>
            <li class="breadcrumb-item active" aria-current="page">List of purchases</li>
        </ol>
    </nav>
    <hr>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-orange">
              <div class="card-header">
                <h3 class="card-title"><b>Recent Purchases</b></h3>

                <div class="card-tools">
                  <a class="btn bg-orange" href="{{ url('/admin/purchases/create') }}" style="color:#090908"> <b>Add New</b> </a>
                 
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
                                        <th>Supplier</th>
                                        <th>Date</th>
                                        <th>Total</th>
                                        <th>Status</th>
                                        <th>Observations</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>

                                <tbody>
                                @foreach ($purchases as $purchase)
                                    <tr>
                                        <td style="text-align: center ">{{ $loop->iteration }}</td>

                                        <td>{{ $purchase->supplier->name ?? 'Unknown Supplier' }}</td>

                                        <td>{{ $purchase->date->format('Y-m-d H:i') }}</td>

                                        <td>{{ number_format($purchase->total, 2) }}</td>

                                        <td style="text-align: center">
                                            @if ($purchase->status === 'pending')
                                                <span class="badge badge-warning">Pending</span>
                                            @elseif ($purchase->status === 'completed')
                                                <span class="badge badge-success">Completed</span>
                                            @elseif ($purchase->status === 'cancelled')
                                                <span class="badge badge-danger">Cancelled</span>
                                            @else
                                                <span class="badge badge-secondary">{{ ucfirst($purchase->status) }}</span>
                                            @endif
                                        </td>

                                        <td>{!! $purchase->observations ?? '-' !!}</td>
                                        <td style="text-align: center">
                                            <div class="btn-group-sm" role="group" aria-label="Basic example">
                                                <a href="{{ url('/admin/purchase/'.$purchase->id) }}" class="btn btn-info"><i class="fas fa-eye"> View</i></a>
                                                <a href="{{ url('/admin/purchase/'.$purchase->id.'/edit') }}" class="btn btn-success"><i class="fas fa-pencil-alt"> Edit</i></a>
                                                <form action="{{ url('/admin/purchase/'.$purchase->id) }}" id= "myform{{ $purchase->id }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger" onclick="myask{{ $purchase->id }}(event)">
                                                        <i class="fas fa-trash-alt"> Delete</i>
                                                     <script>{function myask{{ $purchase->id }}(event){
                                                        event.preventDefault();
                                                        Swal.fire({
                                                        title: "Are you sure you want to delete this purchase?",
                                                        text: "",
                                                        icon: "question",
                                                        showCancelButton: true,
                                                        confirmButtonColor: "#3085d6",
                                                        cancelButtonColor: "#d33",
                                                        confirmButtonText: "Yes, Delete it!",
                                                        cancelButtonText: "No, Cancel!"
                                                        }).then((result) => {
                                                        if (result.isConfirmed) {
                                                            document.getElementById('myform{{ $purchase->id }}').submit();
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

       
    </script>
@stop