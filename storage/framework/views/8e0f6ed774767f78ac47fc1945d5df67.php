

<?php $__env->startSection('content_header'); ?>
    <nav aria-label="breadcrumb" style="font-size: 15pt">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo e(url('/admin')); ?>" style="color:#ff9204">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo e(url('/admin/products')); ?>" style="color:#ff9204">Products</a></li>
            <li class="breadcrumb-item active" aria-current="page">Creation of a new Product</li>
        </ol>
    </nav>
    <hr>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header bg-orange">
                    <h3 class="card-title"><b>Fill in the details of the product</b></h3>
                </div>

                <div class="card-body" style="display:block;">
                    <form action="<?php echo e(url('/admin/products/create')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <!-- Left section -->
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="category_id">Category</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-tags"></i></span>
                                                </div>
                                                <select name="category_id" id="category_id" class="form-control" required>
                                                    <option value="">Select a category...</option>
                                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($category->id); ?>" <?php echo e(old('category_id') == $category->id ? 'selected' : ''); ?>>
                                                            <?php echo e($category->name); ?>

                                                        </option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                            <?php $__errorArgs = ['category_id'];
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

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="code">Code</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-barcode"></i></span>
                                                </div>
                                                <input type="text" value="<?php echo e(old('code')); ?>" class="form-control" id="code" name="code" placeholder="Enter the code for the product" required>
                                            </div>
                                            <?php $__errorArgs = ['code'];
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

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-box"></i></span>
                                                </div>
                                                <input type="text" value="<?php echo e(old('name')); ?>" class="form-control" id="name" name="name" placeholder="Enter the name for the product" required>
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
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <div class="input-group mb-3">
                                                <div class="editor-wrapper">
                                                    <textarea id="description" name="description"></textarea>
                                                </div>
                                            </div>
                                            <?php $__errorArgs = ['description'];
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
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="purchase_price">Purchase Price</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-money-bill-wave"></i></span>
                                                </div>
                                                <input type="number" value="<?php echo e(old('purchase_price')); ?>" class="form-control" id="purchase_price" name="purchase_price" placeholder="Enter the purchase price for the product" required>
                                            </div>
                                            <?php $__errorArgs = ['purchase_price'];
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

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="sale_price">Sale Price</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-money-bill-wave"></i></span>
                                                </div>
                                                <input type="number" value="<?php echo e(old('sale_price')); ?>" class="form-control" id="sale_price" name="sale_price" placeholder="Enter the sale price for the product" required>
                                            </div>
                                            <?php $__errorArgs = ['sale_price'];
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

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="unit_of_measurement">Unit of Measurement</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-balance-scale"></i></span>
                                                </div>
                                                <select name="unit_of_measurement" id="unit_of_measurement" class="form-control" required>
                                                    <option value="">Select an option</option>
                                                    <option value="unit">Unit</option>
                                                    <option value="kilogram">Kilogram</option>
                                                    <option value="gram">Gram</option>
                                                    <option value="litre">Litre</option>
                                                    <option value="millilitre">Millilitre</option>
                                                </select>
                                            </div>
                                            <?php $__errorArgs = ['unit_of_measurement'];
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
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="minimum_stock">Minimum Stock</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-arrow-down"></i></span>
                                                </div>
                                                <input type="number" value="<?php echo e(old('minimum_stock')); ?>" class="form-control" id="minimum_stock" name="minimum_stock" placeholder="Enter the minimum stock for the product" required>
                                            </div>
                                            <?php $__errorArgs = ['minimum_stock'];
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

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="maximum_stock">Maximum Stock</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-arrow-up"></i></span>
                                                </div>
                                                <input type="number" value="<?php echo e(old('maximum_stock')); ?>" class="form-control" id="maximum_stock" name="maximum_stock" placeholder="Enter the sale price for the product" required>
                                            </div>
                                            <?php $__errorArgs = ['maximum_stock'];
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

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="status">Product Status</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-check-circle"></i></span>
                                                </div>
                                                <select name="status" id="status" class="form-control" required>
                                                    <option value="">Select an option</option>
                                                    <option value="1" <?php echo e(old('status') == '1' ? 'selected' : ''); ?>>In Stock</option>
                                                    <option value="0" <?php echo e(old('status') == '0' ? 'selected' : ''); ?>>Out of Stock</option>
                                                </select>
                                            </div>
                                            <?php $__errorArgs = ['status'];
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
                                </div>
                            </div>

                            <!-- Right section (Image preview) -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-image"></i></span>
                                        </div>
                                        <input type="file" class="form-control" id="image" name="image" accept="image/*" onchange="previewImage(event)" required>
                                    </div>
                                    <img id="img-preview" src="#" alt="Image Preview" style="display:none; width:100%; border-radius:8px; margin-top:10px;">
                                    <?php $__errorArgs = ['image'];
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
                        </div>

                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <a href="<?php echo e(url('/admin/products')); ?>" class="btn btn-default">Cancel</a>
                                    <button type="submit" class="btn bg-orange">Register</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<style>
    .editor-wrapper,
    .ck.ck-editor,
    .ck-editor__editable_inline {
        width: 100% !important;
        max-width: 100% !important;
        box-sizing: border-box;
    }

    .input-group .ck.ck-editor {
        flex: 1 1 auto;
        display: block;
    }

    .ck-editor__editable {
        min-height: 300px !important;
        width: 100% !important;
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script>
    function previewImage(event) {
        const input = event.target;
        const file = input.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const imgPreview = document.getElementById('img-preview');
                imgPreview.src = e.target.result;
                imgPreview.style.display = 'block';
            };
            reader.readAsDataURL(file);
        }
    }
</script>

<script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
<script>
   ClassicEditor.create(document.querySelector('#description'), {
       toolbar: {
           items: [
               'heading', '|',
               'bold', 'italic', 'underline', 'strikethrough', 'subscript', 'superscript', '|',
               'link', 'bulletedList', 'numberedList', '|',
               'outdent', 'indent', '|',
               'alignment', '|',
               'blockQuote', 'insertTable', 'mediaEmbed', '|',
               'undo', 'redo', '|',
               'fontBackgroundColor', 'fontColor', 'fontSize', 'fontFamily', '|',
               'code', 'codeBlock', 'htmlEmbed', '|',
               'sourceEditing'
           ],
           shouldNotGroupWhenFull: true
       },
       language: 'en'
   }).then(editor => {
       const editorEl = editor.ui.view.element;
       editorEl.style.width = '100%';
       editorEl.querySelector('.ck-editor__editable').style.width = '100%';
   }).catch(error => {
       console.error(error);
   });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\wamp64\www\Stockup\resources\views/admin/products/create.blade.php ENDPATH**/ ?>