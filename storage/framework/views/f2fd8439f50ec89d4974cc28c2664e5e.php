

<?php $__env->startSection('content_header'); ?>
    <nav aria-label="breadcrumb" style="font-size: 15pt">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo e(url('/admin')); ?>" style="color:#ff9204">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo e(url('/admin/purchases')); ?>" style="color:#ff9204">Purchases</a></li>
            <li class="breadcrumb-item active" aria-current="page">Adding a a new purchase</li>
        </ol>
    </nav>
    <hr>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header bg-orange">
                    <h3 class="card-title"><b>Fill in the details of the purchase | Step 1</b></h3>
                </div>

                <div class="card-body" style="display:block;">
                    <form action="<?php echo e(url('/admin/purchases/create')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <!-- Left section -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="supplier_id">Suppliers</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-users"></i></span>
                                        </div>
                                        <select name="supplier_id" id="supplier_id" class="form-control" required>
                                            <option value="">Select a supplier...</option>
                                            <?php $__currentLoopData = $suppliers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $supplier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($supplier->id); ?>" <?php echo e(old('supplier_id') == $supplier->id ? 'selected' : ''); ?>>
                                                    <?php echo e($supplier->name . " | " . $supplier->company); ?>

                                                </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <?php $__errorArgs = ['supplier_id'];
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
                                    <label for="date">Date of Purchase</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                        </div>
                                        <input type="date" value="<?php echo e(old('date')); ?>" class="form-control" id="date" name="date" placeholder="Enter the date when the purchase was made" required>
                                    </div>
                                    <?php $__errorArgs = ['date'];
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
                                    <label for="date">Observations</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-pen-fancy"></i></span>
                                        </div>
                                        <input type="text" value="<?php echo e(old('observations')); ?>" class="form-control" id="observations" name="observations" placeholder="Enter the observations made during the purchase">
                                    </div>
                                    <?php $__errorArgs = ['observations'];
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
                                    <a href="<?php echo e(url('/admin/purchases')); ?>" class="btn btn-default">Cancel</a>
                                    <button type="submit" class="btn bg-orange">Create purchase record</button>
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

<?php echo $__env->make('adminlte::page', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\wamp64\www\Stockup\resources\views/admin/purchases/create.blade.php ENDPATH**/ ?>