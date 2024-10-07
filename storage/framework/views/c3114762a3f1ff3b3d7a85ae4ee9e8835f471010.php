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
	<h3 class="page-title">Permissions</h3>
	<ul class="breadcrumb">
		<li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>">Dashboard</a></li>
		<li class="breadcrumb-item active">Permissions</li>
	</ul>
</div>
<div class="col-sm-5 col">
	<a href="#add_permission" data-toggle="modal" class="btn btn-success float-right mt-2">Add Permission</a>
</div>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

<div class="row">
	<div class="col-sm-12">
		<div class="card">
			<div class="card-body">
				<div class="table-responsive">
					<table id="perm-table" class="datatable table table-striped table-bordered table-hover table-center mb-0">
						<thead>
							<tr style="boder:1px solid black;">
								<th>Name</th>
								<th>Created date</th>
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

<!-- Add Modal -->
<div class="modal fade" id="add_permission" aria-hidden="true" role="dialog">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Add Permission</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="POST" action="<?php echo e(route('permissions.store')); ?>">
					<?php echo csrf_field(); ?>
					<div class="row form-row">
						<div class="col-12">
							<div class="form-group">
								<label>Permission</label>
								<input type="text" name="permission" class="form-control">
							</div>
						</div>
					</div>
					<button type="submit" class="btn btn-success btn-block">Save Changes</button>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- /ADD Modal -->

<!-- Edit Details Modal -->
<div class="modal fade" id="edit_permission" aria-hidden="true" role="dialog">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit Permission</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="post" action="<?php echo e(route('permissions.update')); ?>">
					<?php echo csrf_field(); ?>
					<?php echo method_field("PUT"); ?>
					<div class="row form-row">
						<div class="col-12">
							<input type="hidden" name="id" id="edit_id">
							<div class="form-group">
								<label>Permission</label>
								<input type="text" class="form-control perm_name" name="permission">
							</div>
						</div>
						
					</div>
					<button type="submit" class="btn btn-success btn-block">Save Changes</button>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- /Edit Details Modal -->

<?php $__env->stopSection(); ?>


<?php $__env->startPush('page-js'); ?>
	<script>
		$(document).ready(function() {
            var table = $('#perm-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "<?php echo e(route('permissions.index')); ?>",
                columns: [
                    {data: 'name', name: 'name'},
                    // {data: 'role', name: 'role'},
                    {data: 'created_at',name: 'created_at'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });
			$('#perm-table').on('click','.editbtn',function (){
				$('#edit_permission').modal('show');
				var id = $(this).data('id');
				var permission = $(this).data('name');
				$('#edit_id').val(id);
				$('.perm_name').val(permission);
			});
			//
		});
	</script>
	
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\pulok\OneDrive\Desktop\Project For IIT\PharmacyMS-Laravel\PharmacyMS-Laravel\resources\views/admin/roles/permissions.blade.php ENDPATH**/ ?>