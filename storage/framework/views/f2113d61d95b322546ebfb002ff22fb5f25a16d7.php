<?php $__env->startPush('page-css'); ?>
    
<?php $__env->stopPush(); ?>

<?php $__env->startPush('page-header'); ?>
<div class="col-sm-12">
	<h3 class="page-title">Edit Sale</h3>
	<ul class="breadcrumb">
		<li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>">Dashboard</a></li>
		<li class="breadcrumb-item active">Edit Sale</li>
	</ul>
</div>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
	<div class="col-sm-12">
		<div class="card">
			<div class="card-body custom-edit-service">
                <!-- Create Sale -->
                <form method="POST" action="<?php echo e(route('sales.store')); ?>">
					<?php echo csrf_field(); ?>
					<div class="row form-row">
						<div class="col-12">
							<div class="form-group">
								<label>Product <span class="text-danger">*</span></label>
								<select class="select2 form-select form-control" name="product"> 
									<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<?php if(!empty($product->purchase)): ?>
											<?php if(!($product->purchase->quantity <= 0)): ?>
                                                <option disabled selected > Select Product</option>
												<option value="<?php echo e($product->id); ?>"><?php echo e($product->purchase->product); ?></option>
											<?php endif; ?>
										<?php endif; ?>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</select>
							</div>
						</div>
						<div class="col-12">
							<div class="form-group">
								<label>Quantity</label>
								<input type="number" value="1" class="form-control" name="quantity">
							</div>
						</div>
					</div>
					<button type="submit" class="btn btn-success btn-block">Save Changes</button>
				</form>
                <!--/ Create Sale -->
			</div>
		</div><!-- Visit codeastro.com for more projects -->
	</div>			
</div>
<?php $__env->stopSection(); ?>	


<?php $__env->startPush('page-js'); ?>
    
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\codeastro\Laravel\Pharmacy-management-system\resources\views/admin/sales/create.blade.php ENDPATH**/ ?>