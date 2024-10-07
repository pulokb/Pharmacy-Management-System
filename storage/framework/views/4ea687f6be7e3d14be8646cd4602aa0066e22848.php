<?php $__env->startPush('page-css'); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startPush('page-header'); ?>
<div class="col-sm-12">
	<h3 class="page-title">Edit Product</h3>
	<ul class="breadcrumb">
		<li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>">Dashboard</a></li>
		<li class="breadcrumb-item active">Edit Product</li>
	</ul>
</div>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
	<div class="col-sm-12">
		<div class="card">
			<div class="card-body custom-edit-service">
				

			<!-- Edit Product -->
				<form method="post" enctype="multipart/form-data" id="update_service" action="<?php echo e(route('products.update',$product)); ?>">
					<?php echo csrf_field(); ?>
                    <?php echo method_field("PUT"); ?>
					<div class="service-fields mb-3">
						<div class="row">
							
							<div class="col-lg-12">
								<div class="form-group">
									<label>Product <span class="text-danger">*</span></label>
									<select class="select2 form-select form-control" name="product"> 
                                        <?php $__currentLoopData = $purchases; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $purchase): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if(!empty($product->purchase)): ?>
                                            <option <?php echo e(($product->purchase->id == $purchase->id) ? 'selected': ''); ?> value="<?php echo e($purchase->id); ?>"><?php echo e($purchase->product); ?></option>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</select>
								</div>
							</div>
						</div>
					</div>
					
					<div class="service-fields mb-3">
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									<label>Selling Price<span class="text-danger">*</span></label>
									<input class="form-control" type="text" name="price" value="<?php echo e($product->price); ?>">
								</div>
							</div>
	
							<div class="col-lg-6">
								<div class="form-group">
									<label>Margin (%)<span class="text-danger">*</span></label>
									<input class="form-control" value="<?php echo e($product->discount); ?>" type="text" name="discount" value="<?php echo e(old('discount')); ?>">
								</div>
							</div>
							
						</div>
					</div>
	
									
					
					<div class="service-fields mb-3">
						<div class="row">
							<div class="col-lg-12">
								<div class="form-group">
									<label>Descriptions <span class="text-danger">*</span></label>
									<textarea class="form-control service-desc" value="<?php echo e($product->description); ?>" name="description"><?php echo e($product->description); ?></textarea>
								</div>
							</div>
							
						</div>
					</div>					
					
					<div class="submit-section">
						<button class="btn btn-success submit-btn" type="submit" name="form_submit" value="submit">Submit</button>
					</div>
				</form>
			<!-- /Edit Product -->
			</div>
		</div>
	</div>			
</div>
<?php $__env->stopSection(); ?>


<?php $__env->startPush('page-js'); ?>
	
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\codeastro\Laravel\Pharmacy-management-system\resources\views/admin/products/edit.blade.php ENDPATH**/ ?>