

<?php $__env->startSection('content_header'); ?>
    <nav aria-label="breadcrumb" style="font-size: 15pt">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo e(url('/admin')); ?>" style="color:#ff9204">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo e(url('/admin/categories')); ?>" style="color:#ff9204">Categories</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data for the different Categories</li>
        </ol>
    </nav>
    <hr>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-5">
            <div class="card card-primary">
              <div class="card-header bg-orange" >
                <h3 class="card-title"><b>Form data</b></h3>
               
                <!-- /.card-tools -->
            </div>
              <!-- /.card-header -->
                <div class="card-body" style="display: block;">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Category Name</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter the name of the category" value="<?php echo e($category->name); ?>" readonly>
                                        
                                </div>
                                
                            </div>
                            
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Category's Description</label>
                                        <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter a brief description of the category" readonly><?php echo e($category->description); ?></textarea>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <a href="<?php echo e(url('/admin/categories')); ?>" class="btn btn-default">Go Back</a>
                                </div>
                            </div>
                        </div>
                </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>    
    </div> 
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
   
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\wamp64\www\Stockup\resources\views/admin/categories/show.blade.php ENDPATH**/ ?>