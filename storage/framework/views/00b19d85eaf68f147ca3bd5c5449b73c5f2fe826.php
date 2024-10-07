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
<div class="col-sm-7 col-auto">
	<h3 class="page-title">Supplier</h3>
	<ul class="breadcrumb">
		<li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>">Dashboard</a></li>
		<li class="breadcrumb-item active">Supplier</li>
	</ul>
</div>
<div class="col-sm-5 col">
	<a href="<?php echo e(route('suppliers.create')); ?>" class="btn btn-primary float-right mt-2">Add New</a>
</div>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
	<div class="col-md-12">
	
		<!-- Suppliers -->
		<div class="card">
			<div class="card-body">
				<div class="table-responsive">
					<table id="supplier-table" class="datatable table table-hover table-center mb-0">
						<thead>
							<tr>
								<th>Product</th>
								<th>Name</th>
								<th>Phone</th>
								<th>Email</th>
								<th>Address</th>
								<th>Company</th>
								<th class="action-btn">Action</th>
							</tr>
						</thead>
						<tbody>
							
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<!-- /Suppliers-->
		
	</div>
</div>

<?php $__env->stopSection(); ?>	

<?php $__env->startPush('page-js'); ?>
<script>
    $(document).ready(function() {
        var table = $('#supplier-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "<?php echo e(route('suppliers.index')); ?>",
            columns: [
                {data: 'product', name: 'product'},
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'phone', name: 'phone'},
                {data: 'address', name: 'address'},
                {data: 'company',name: 'company'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });
        
    });
</script> 
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\codeastro\Laravel\Pharmacy-management-system\resources\views/admin/suppliers/index.blade.php ENDPATH**/ ?>