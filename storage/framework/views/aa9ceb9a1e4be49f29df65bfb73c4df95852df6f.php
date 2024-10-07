<?php $__env->startSection('content'); ?>
<h1>Forgot Password?</h1>
<p class="account-subtitle">Enter your email to get a password reset link</p>
<!-- Form -->
<form action="<?php echo e(route('password.request')); ?>" method="post">
	<?php echo csrf_field(); ?>
	<div class="form-group">
		<input class="form-control" name="email" type="text" placeholder="Email">
	</div>
	<div class="form-group mb-0">
		<button class="btn btn-primary btn-block" type="submit">Submit</button>
	</div>
</form>
<!-- /Form -->

<div class="text-center dont-have">Remember your password? <a href="<?php echo e(route('login')); ?>">Login</a></div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.plain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\codeastro\Laravel\Pharmacy-management-system\resources\views/admin/auth/password/email.blade.php ENDPATH**/ ?>