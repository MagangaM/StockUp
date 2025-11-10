

<?php $__env->startSection('content_header'); ?>
    <nav aria-label="breadcrumb" style="font-size: 15pt">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo e(url('/admin')); ?>" style="color:#ff9204">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo e(url('/admin/suppliers')); ?>" style="color:#ff9204">Suppliers</a></li>
            <li class="breadcrumb-item active" aria-current="page">List of Suppliers</li>
        </ol>
    </nav>
    <hr>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
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
                            <form action="<?php echo e(url('/admin/supplier/create')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Company Name</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-industry"></i></span>
                                                    </div>
                                                    <input type="text" value="<?php echo e(old ('company')); ?>" class="form-control" id="company" name="company" placeholder="Enter the name of the company" required>
                                                    <?php $__errorArgs = ['company'];
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
                                    
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Company Address</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-map"></i></span>
                                                    </div>
                                                    <input type="text" value="<?php echo e(old ('address')); ?>" class="form-control" id="address" name="address" placeholder="Enter the address of the company" required>
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

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Supplier's Name</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                    </div>
                                                    <input type="text" value="<?php echo e(old ('name')); ?>" class="form-control" id="name" name="name" placeholder="Enter the name of the supplier" required>
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

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Supplier's Phone Number</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-phone-alt"></i></span>
                                                    </div>
                                                    <input type="text" value="<?php echo e(old ('phonenumber')); ?>" class="form-control" id="phonenumber" name="phonenumber" placeholder="Enter the phone number of the supplier" required>
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

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Supplier's Email</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                                    </div>
                                                    <input type="text" value="<?php echo e(old ('email')); ?>" class="form-control" id="email" name="email" placeholder="Enter the email of the supplier" required>
                                                    <?php $__errorArgs = ['email'];
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
                                
                                <hr>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <a href="<?php echo e(url('/admin/suppliers')); ?>" class="btn btn-default">Cancel</a>
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
                                <?php $__currentLoopData = $suppliers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $supplier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td style="text-align: center "><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($supplier->company); ?></td>
                                        <td><?php echo e($supplier->address); ?></td>
                                        <td><?php echo e($supplier->name); ?></td>
                                        <td><?php echo e($supplier->phonenumber); ?></td>
                                        <td><?php echo e($supplier->email); ?></td>
                                        <td>
                                            <div class="btn-group-sm" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#ModalShow<?php echo e($supplier->id); ?>">
                                                    <i class="fas fa-eye"> View</i>
                                                </button>


                                                <!-- Modal -->
                                                <div class="modal fade" id="ModalShow<?php echo e($supplier->id); ?>" tabindex="-1" aria-labelledby="ModalShowLabel" aria-hidden="true">
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
                                                                            <input type="text" value="<?php echo e($supplier->company); ?>" class="form-control" id="company" name="company" placeholder="Enter the name of the company" readonly>
                                                                            <?php $__errorArgs = ['company'];
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
                                                            
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="name">Company Address</label>
                                                                        <div class="input-group mb-3">
                                                                            <div class="input-group-prepend">
                                                                                <span class="input-group-text"><i class="fas fa-map"></i></span>
                                                                            </div>
                                                                            <input type="text" value="<?php echo e($supplier->address); ?>" class="form-control" id="address" name="address" placeholder="Enter the address of the company" readonly>
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

                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="name">Supplier's Name</label>
                                                                        <div class="input-group mb-3">
                                                                            <div class="input-group-prepend">
                                                                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                                            </div>
                                                                            <input type="text" value="<?php echo e($supplier->name); ?>" class="form-control" id="name" name="name" placeholder="Enter the name of the supplier" readonly>
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

                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="name">Supplier's Phone Number</label>
                                                                        <div class="input-group mb-3">
                                                                            <div class="input-group-prepend">
                                                                                <span class="input-group-text"><i class="fas fa-phone-alt"></i></span>
                                                                            </div>
                                                                            <input type="text" value="<?php echo e($supplier->phonenumber); ?>" class="form-control" id="phonenumber" name="phonenumber" placeholder="Enter the phone number of the supplier" readonly>
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

                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="name">Supplier's Email</label>
                                                                        <div class="input-group mb-3">
                                                                            <div class="input-group-prepend">
                                                                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                                                            </div>
                                                                            <input type="text" value="<?php echo e($supplier->email); ?>" class="form-control" id="email" name="email" placeholder="Enter the email of the supplier" readonly>
                                                                            <?php $__errorArgs = ['email'];
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
                                                        
                                                        <hr>

                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <a href="<?php echo e(url('/admin/suppliers')); ?>" class="btn btn-default">Cancel</a>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#ModalEdit<?php echo e($supplier->id); ?>">
                                                <i class="fas fa-pencil-alt"> Edit</i>
                                                </button>


                                                <!-- Modal -->
                                                <div class="modal fade" id="ModalEdit<?php echo e($supplier->id); ?>" tabindex="-1" aria-labelledby="ModalEditLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                    <div class="modal-header" style="border-color: #00ff55 ;background-color: #00ff55; color: white;">
                                                        <h5 class="modal-title" id="ModalEditLabel"><b>Edit supplier details</b></h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="<?php echo e(url('/admin/supplier/'.$supplier->id)); ?>" method="POST" enctype="multipart/form-data">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('PUT'); ?>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="name">Company Name</label>
                                                                            <div class="input-group mb-3">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text"><i class="fas fa-industry"></i></span>
                                                                                </div>
                                                                                <input type="text" value="<?php echo e(old ('company', $supplier->company)); ?>" class="form-control" id="company" name="company" placeholder="Enter the name of the company" required>
                                                                                <?php $__errorArgs = ['company'];
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
                                                                
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="name">Company Address</label>
                                                                            <div class="input-group mb-3">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text"><i class="fas fa-map"></i></span>
                                                                                </div>
                                                                                <input type="text" value="<?php echo e(old ('address', $supplier->address)); ?>" class="form-control" id="address" name="address" placeholder="Enter the address of the company" required>
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

                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="name">Supplier's Name</label>
                                                                            <div class="input-group mb-3">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                                                </div>
                                                                                <input type="text" value="<?php echo e(old ('name', $supplier->name)); ?>" class="form-control" id="name" name="name" placeholder="Enter the name of the supplier" required>
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

                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="name">Supplier's Phone Number</label>
                                                                            <div class="input-group mb-3">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text"><i class="fas fa-phone-alt"></i></span>
                                                                                </div>
                                                                                <input type="text" value="<?php echo e(old ('phonenumber', $supplier->phonenumber)); ?>" class="form-control" id="phonenumber" name="phonenumber" placeholder="Enter the phone number of the supplier" required>
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

                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="name">Supplier's Email</label>
                                                                            <div class="input-group mb-3">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                                                                </div>
                                                                                <input type="text" value="<?php echo e(old ('email', $supplier->email)); ?>" class="form-control" id="email" name="email" placeholder="Enter the email of the supplier" required>
                                                                                <?php $__errorArgs = ['email'];
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
                                                            
                                                            <hr>

                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <a href="<?php echo e(url('/admin/suppliers')); ?>" class="btn btn-danger">Cancel</a>
                                                                        <button type="submit" class="btn btn-success">Update</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>
                                                <form action="<?php echo e(url('/admin/supplier/'.$supplier->id)); ?>" id= "myform<?php echo e($supplier->id); ?>" method="POST" class="d-inline">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" class="btn btn-danger" onclick="myask<?php echo e($supplier->id); ?>(event)">
                                                        <i class="fas fa-trash-alt"> Delete</i>
                                                     <script>{function myask<?php echo e($supplier->id); ?>(event){
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
                                                            document.getElementById('myform<?php echo e($supplier->id); ?>').submit();
                                                        }
                                                        });
                                                    }}
                                                     </script>
                                                    </button>
                                                                                       
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
        <script>
        $(function () {
            $("#example1").DataTable({
                "pageLength": 10,
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

        function myask<?php echo e($supplier->id); ?>(event){
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
                document.getElementById('myform<?php echo e($supplier->id); ?>').submit();
            }
            });
        }
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\wamp64\www\Stockup\resources\views/admin/suppliers/index.blade.php ENDPATH**/ ?>