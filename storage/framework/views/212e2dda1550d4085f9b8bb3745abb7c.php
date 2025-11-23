

<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Dashboard</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <p>Welcome</p>
<hr>

<div class="row">

    <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <a href="<?php echo e(url('admin/branches')); ?>" class="info-box-icon">
                <span class="info-box-icon bg-warning">
                <img src="<?php echo e(url('img/supermarket.gif')); ?>"  alt="">
                </span>
              </a>

              <div class="info-box-content">
                <span class="info-box-text"><b>Branches</b></span>
                <span class="info-box-number"><?php echo e($total_branches); ?> Branches</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
    </div>

    <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <a href="<?php echo e(url('admin/categories')); ?>" class="info-box-icon">
                <span class="info-box-icon bg-warning">
                <img src="<?php echo e(url('img/list.gif')); ?>"  alt="">
                </span>
              </a>

              <div class="info-box-content">
                <span class="info-box-text"><b>Categories</b></span>
                <span class="info-box-number"><?php echo e($total_categories); ?> Categories</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
    </div>

    <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <a href="<?php echo e(url('admin/products')); ?>" class="info-box-icon">
                <span class="info-box-icon bg-warning">
                <img src="<?php echo e(url('img/responsive.gif')); ?>"  alt="">
                </span>
              </a>

              <div class="info-box-content">
                <span class="info-box-text"><b>Products</b></span>
                <span class="info-box-number"><?php echo e($total_products); ?> Products</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
    </div>

    <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <a href="<?php echo e(url('admin/suppliers')); ?>" class="info-box-icon">
                <span class="info-box-icon bg-warning">
                <img src="<?php echo e(url('img/pickup-truck.gif')); ?>"  alt="">
                </span>
              </a>

              <div class="info-box-content">
                <span class="info-box-text"><b>Suppliers</b></span>
                <span class="info-box-number"><?php echo e($total_suppliers); ?> Suppliers</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
    </div>

</div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\wamp64\www\Stockup\resources\views/admin/index.blade.php ENDPATH**/ ?>