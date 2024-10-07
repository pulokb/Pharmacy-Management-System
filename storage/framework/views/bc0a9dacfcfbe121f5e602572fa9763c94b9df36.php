<?php $__env->startPush('page-css'); ?>
    
<?php $__env->stopPush(); ?>

<?php $__env->startPush('page-header'); ?>
<div class="col-sm-12">
	<h3 class="page-title">Create User</h3>
	<ul class="breadcrumb">
		<li class="breadcrumb-item active">Dashboard</li>
	</ul>
</div>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-md-12 col-lg-12">
    
        <div class="card card-table">
            <div class="card-header">
                <h4 class="card-title ">Add User</h4>
            </div>
            <div class="card-body">
                <div class="p-5">
                    <form method="POST" enctype="multipart/form-data" action="<?php echo e(route('users.store')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="row form-row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Full Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="John Doe">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="example@gmail.com">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Role</label>
                                    <div class="form-group">
                                        <select class="select2 form-select form-control" name="role">
                                            <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($role->name); ?>"><?php echo e($role->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Picture</label>
                                    <input type="file" name="avatar" class="form-control" >
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" name="password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Confirm Password</label>
                                            <input type="password" name="password_confirmation" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success btn-block">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
        
    </div>

    
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('page-js'); ?>
    
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\pulok\OneDrive\Desktop\Project For IIT\PharmacyMS-Laravel\PharmacyMS-Laravel\resources\views/admin/users/create.blade.php ENDPATH**/ ?>