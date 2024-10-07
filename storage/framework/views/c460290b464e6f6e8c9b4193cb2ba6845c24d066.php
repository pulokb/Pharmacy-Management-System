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

<?php $__env->startPush('page-header'); ?>
<div class="col-sm-7 col-auto">
	<h3 class="page-title">Roles</h3>
	<ul class="breadcrumb">
		<li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>">Dashboard</a></li>
		<li class="breadcrumb-item active">Roles</li>
	</ul>
</div>
<div class="col-sm-5 col">
	<a href="<?php echo e(route('roles.create')); ?>" class="btn btn-success float-right mt-2">Add Role</a>
</div>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

<div class="row">
	<div class="col-sm-12">
		<div class="card">
			<div class="card-body">
				<div class="table-responsive">
					<table id="role-table" class="datatable table table-striped table-bordered table-hover table-center mb-0">
						<thead>
							<tr style="boder:1px solid black;">
								<th>Name</th>
								<th>Permissions</th>
								<th class="text-center action-btn">Actions</th>
							</tr>
						</thead>
						<tbody>
													
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>			
</div>

<?php $__env->stopSection(); ?>


<?php $__env->startPush('page-js'); ?>
	<script>
		$(document).ready(function() {
            var table = $('#role-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "<?php echo e(route('roles.index')); ?>",
                columns: [
                    {data: 'name', name: 'name'},
                    {data: 'permissions', name: 'permissions'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });
			
			//
		});
	</script>
	
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\pulok\OneDrive\Desktop\Project For IIT\PharmacyMS-Laravel\PharmacyMS-Laravel\resources\views/admin/roles/index.blade.php ENDPATH**/ ?>