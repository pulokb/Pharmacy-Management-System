<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.assets.datatables','data' => []]); ?>
<?php $component->withName('assets.datatables'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

<?php $__env->startPush('page-css'); ?>
	
<?php $__env->stopPush(); ?>

<?php $__env->startPush('page-header'); ?>
<div class="col-sm-12">
	<h3 class="page-title">Expired</h3>
	<ul class="breadcrumb">
		<li class="breadcrumb-item"><a href="<?php echo e(route('products.index')); ?>">Products</a></li>
		<li class="breadcrumb-item active">Expired</li>
	</ul>
</div>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
	<div class="col-md-12">
	
		<!-- Recent Orders -->
		<div class="card">
			<div class="card-body">
				<div class="table-responsive">
					<table id="expired-product" class="datatable table table-striped table-bordered table-hover table-center mb-0">
						<thead>
							<tr>
								<th>Brand Name</th>
								<th>Category</th>
								<th>Price</th>
								<th>Quantity</th>
								<th>Discount</th>
								<th>Expire</th>
								<th class="action-btn">Action</th>
							</tr>
						</thead>
						<tbody>
							
							
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<!-- /Expired Products -->
		
	</div>
</div>
<!-- Visit codeastro.com for more projects -->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('page-js'); ?>
<script>
    $(document).ready(function() {
        var table = $('#expired-product').DataTable({
            processing: true,
            serverSide: true,
            ajax: "<?php echo e(route('expired')); ?>",
            columns: [
                {data: 'product', name: 'product'},
                {data: 'category', name: 'category'},
                {data: 'price', name: 'price'},
                {data: 'quantity', name: 'quantity'},
                {data: 'discount', name: 'discount'},
				{data: 'expiry_date', name: 'expiry_date'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });
        
    });
</script> 
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\codeastro\Laravel\Pharmacy-management-system\resources\views/admin/products/expired.blade.php ENDPATH**/ ?>