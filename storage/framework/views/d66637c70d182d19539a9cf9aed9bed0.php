

<?php $__env->startSection('content_header'); ?>
    <nav aria-label="breadcrumb" style="font-size: 15pt">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo e(url('/admin')); ?>" style="color:#ff9204">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo e(url('/admin/categories')); ?>" style="color:#ff9204">Categories</a></li>
            <li class="breadcrumb-item active" aria-current="page">Creation of Categories</li>
        </ol>
    </nav>
    <hr>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-5">
            <div class="card card-primary">
              <div class="card-header bg-orange">
                <h3 class="card-title"><b>Fill in the form data</b></h3>
               
                <!-- /.card-tools -->
            </div>
              <!-- /.card-header -->
                <div class="card-body" style="display: block;">
                    <form action="<?php echo e(url('/admin/categories/create')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Category Name</label>
                                        <input type="text" value="<?php echo e(old ('name')); ?>" class="form-control" id="name" name="name" placeholder="Enter the name of the category" required>
                                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <small style="color: red"><?php echo e($message); ?></small>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    
                                </div>
                                
                            </div>
                            
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Category's Description <b>(Optional)</b> </label>
                                        <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter a brief description of the category"><?php echo e(old ('description')); ?></textarea>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <a href="<?php echo e(url('/admin/categories')); ?>" class="btn btn-default">Cancel</a>
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
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
   
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\wamp64\www\Stockup\resources\views/admin/categories/create.blade.php ENDPATH**/ ?>