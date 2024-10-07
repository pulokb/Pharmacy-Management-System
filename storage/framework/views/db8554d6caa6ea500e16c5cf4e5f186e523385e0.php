<?php $__env->startSection('content'); ?>
<h1>Pharmacy System</h1>
<p class="account-subtitle">Register as Sales Person</p>
<!-- Visit codeastro.com for more projects -->
<!-- Form -->
<form action="<?php echo e(route('register')); ?>" method="POST">
	<?php echo csrf_field(); ?>
	<div class="form-group">
		<input class="form-control" name="name" type="text" value="<?php echo e(old('name')); ?>" placeholder="Full Name">
	</div>
	<div class="form-group">
		<input class="form-control" name="email" type="text" value="<?php echo e(old('email')); ?>" placeholder="Email">
	</div>
	<div class="form-group">
		<input class="form-control" name="password" type="password" placeholder="Password">
	</div>
	<div class="form-group">
		<input class="form-control" name="password_confirmation" type="password" placeholder="Confirm Password">
	</div>
	<div class="form-group mb-0">
		<button class="btn btn-danger btn-block" type="submit">Register (SalesPerson)</button>
	</div>
</form>
<!-- /Form -->
								
<div class="text-center dont-have">Already have an account? <a href="<?php echo e(route('login')); ?>">Login</a></div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.plain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\codeastro\Laravel\Pharmacy-management-system\resources\views/admin/auth/register.blade.php ENDPATH**/ ?>