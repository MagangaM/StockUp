

<?php $__env->startSection('content_header'); ?>
    <nav aria-label="breadcrumb" style="font-size: 15pt">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo e(url('/admin')); ?>" style="color:#ff9204">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo e(url('/admin/categories')); ?>" style="color:#ff9204">Products</a></li>
            <li class="breadcrumb-item active" aria-current="page">List of Products</li>
        </ol>
    </nav>
    <hr>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-orange">
              <div class="card-header">
                <h3 class="card-title"><b>Products Available</b></h3>

                <div class="card-tools">
                  <a class="btn bg-orange" href="<?php echo e(url('/admin/products/create')); ?>" style="color:#090908"> <b>Add New</b> </a>
                 
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
                                        <th>Image</th>
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
                                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td style="text-align: center "><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($product->code); ?></td>
                                        <td><?php echo e($product->name); ?></td>
                                        <td><?php echo e($product->description); ?></td>
                                        <td><?php echo e($product->image); ?></td>
                                        <td><?php echo e($product->purchase_price); ?></td>
                                        <td><?php echo e($product->sale_price); ?></td>
                                        <td><?php echo e($product->minimum_stock); ?></td>
                                        <td><?php echo e($product->maximum_stock); ?></td>
                                        <td><?php echo e($product->unit_of_measurement); ?></td>
                                         <td style="text-align: center">
                                            <?php if($product->status == '1'): ?>
                                                <span class="badge badge-success">In Stock</span>
                                            <?php else: ?>
                                                <span class="badge badge-danger">Out of Stock</span>
                                            <?php endif; ?>
                                        </td>

                                        <td style="text-align: center">
                                            <div class="btn-group-sm" role="group" aria-label="Basic example">
                                                <a href="<?php echo e(url('/admin/product/'.$product->id)); ?>" class="btn btn-info"><i class="fas fa-eye"> View</i></a>
                                                <a href="<?php echo e(url('/admin/product/'.$product->id.'/edit')); ?>" class="btn btn-success"><i class="fas fa-pencil-alt"> Edit</i></a>
                                                <form action="<?php echo e(url('/admin/product/'.$product->id)); ?>" id= "myform<?php echo e($product->id); ?>" method="POST" class="d-inline">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" class="btn btn-danger" onclick="myask<?php echo e($product->id); ?>(event)">
                                                        <i class="fas fa-trash-alt"> Delete</i>
                                                     <script>{function myask<?php echo e($product->id); ?>(event){
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
                                                            document.getElementById('myform<?php echo e($product->id); ?>').submit();
                                                        }
                                                        });
                                                    }}</script>
                                                    </button>
                                                </form>                                         
                                                </div>
                                            </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                    </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>    
    </div> 
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
        <script>  $(function () {
            $("#example1").DataTable({
                "pageLength": 20,
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

        function myask<?php echo e($product->id); ?>(event){
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
                document.getElementById('myform<?php echo e($product->id); ?>').submit();
            }
            });
        }
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\wamp64\www\Stockup\resources\views/admin/products/index.blade.php ENDPATH**/ ?>