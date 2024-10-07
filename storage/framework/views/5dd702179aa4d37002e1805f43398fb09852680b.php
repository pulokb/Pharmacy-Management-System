<?php $__env->startSection('content'); ?>
<h1>Pharmacy System</h1>
<p class="account-subtitle">Login Panel</p>
<?php if(session('login_error')): ?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.alerts.danger','data' => ['error' => session('login_error')]]); ?>
<?php $component->withName('alerts.danger'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['error' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(session('login_error'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php endif; ?>
<!-- Form -->
<form action="<?php echo e(route('login')); ?>" method="post">
	<?php echo csrf_field(); ?>
	<div class="form-group">
		<input class="form-control" name="email" type="text" placeholder="Email">
	</div>
	<div class="form-group">
		<input class="form-control" name="password" type="password" placeholder="Password">
	</div>
	<div class="form-group">
		<button class="btn btn-success btn-block" type="submit">Login</button>
	</div>
</form>
<!-- /Form -->

<!-- Visit codeastro.com for more projects -->

<div class="text-center forgotpass"><a href="<?php echo e(route('password.request')); ?>">Forgot Password?</a></div>
<div class="text-center dont-have">Don’t have an account? <a href="<?php echo e(route('register')); ?>">Register</a></div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.plain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\pulok\OneDrive\Desktop\Project For IIT\PharmacyMS-Laravel\PharmacyMS-Laravel\resources\views/admin/auth/login.blade.php ENDPATH**/ ?>