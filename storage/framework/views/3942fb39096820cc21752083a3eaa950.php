

<?php $__env->startSection('content_header'); ?>
    <nav aria-label="breadcrumb" style="font-size: 15pt">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo e(url('/admin')); ?>" style="color:#ff9204">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo e(url('/admin/branches')); ?>" style="color:#ff9204">Branches</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Branch</li>
        </ol>
    </nav>
    <hr>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-5">
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title"><b>Fill in the form data</b></h3>
               
                <!-- /.card-tools -->
            </div>
              <!-- /.card-header -->
                <div class="card-body" style="display:block">
                    <form action="<?php echo e(url('/admin/branch/'.$branch->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Branch Name</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-building"></i></span>
                                            </div>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter the name of the branch" value="<?php echo e($branch->name); ?>" required>
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
                            
                            <div class="col-md-13">
                                <div class="form-group">
                                    <label for="name">Branch Address</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-map"></i></span>
                                            </div>
                                            <input type="text" value="<?php echo e($branch->address); ?>" class="form-control" id="address" name="address" placeholder="Enter the address of the branch" required>
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

                            <div class="col-md-14">
                                <div class="form-group">
                                    <label for="name">Branch Phone Number</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-phone-alt"></i></span>
                                            </div>
                                            <input type="text" value="<?php echo e($branch->phonenumber); ?>" class="form-control" id="phonenumber" name="phonenumber" placeholder="Enter the phone number of the branch" required>
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

                            <div class="col-md-15">
                                <div class="form-group">
                                    <label for="name">Branch Status</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-toggle-on"></i></span>
                                        </div>
                                        <select name="active" id="active" class="form-control" required>
                                            <option value="Select an option">Select an option</option>
                                            <option value="1" <?php echo e($branch->active == '1'? 'selected':''); ?>>Active</option>
                                            <option value="0" <?php echo e($branch->active == '0'? 'selected':''); ?>>Inactive</option>
                                        </select>
                                    </div>
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

                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <a href="<?php echo e(url('/admin/branches')); ?>" class="btn btn-danger">Cancel</a>
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
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
   
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\wamp64\www\Stockup\resources\views/admin/branches/edit.blade.php ENDPATH**/ ?>