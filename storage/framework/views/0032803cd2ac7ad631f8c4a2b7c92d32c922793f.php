<?php $__env->startPush('page-css'); ?>
    
<?php $__env->stopPush(); ?>

<?php $__env->startPush('page-header'); ?>
<div class="col-sm-12">
	<h3 class="page-title">Create Role</h3>
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
                <h4 class="card-title ">Add Role</h4>
            </div>
            <div class="card-body">
                <div class="p-5">
                    <form method="POST" action="<?php echo e(route('roles.store')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label>Role</label>
                            <input type="text" name="role" class="form-control" placeholder="super-admin">
                        </div>
                        <div class="form-group">
                            <lable>Select Permissions</lable>
                            <select class="select2 form-select form-control" name="permission[]" multiple="multiple"> 
                                <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($permission->name); ?>"><?php echo e($permission->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
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
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\pulok\OneDrive\Desktop\Project For IIT\PharmacyMS-Laravel\PharmacyMS-Laravel\resources\views/admin/roles/create.blade.php ENDPATH**/ ?>