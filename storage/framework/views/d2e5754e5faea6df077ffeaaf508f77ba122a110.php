<?php $__env->startPush('page-header'); ?>
<div class="col-sm-7 col-auto">
	<h3 class="page-title">Backups</h3>
	<ul class="breadcrumb">
		<li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>">Dashboard</a></li>
		<li class="breadcrumb-item active">App Backups</li>
	</ul>
</div>
<div class="col-sm-5 col">
    <form action="<?php echo e(route('backup.store')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <?php echo method_field("PUT"); ?>
        <button class="btn btn-success float-right mt-2" type="submit">Create Backup</button>
    </form>
	
</div>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

<div class="row">
	<div class="col-sm-12">
		<div class="card">
			<div class="card-body">
				<div class="table-responsive">
					<table id="category-table" class="datatable table table-striped table-bordered table-hover table-center mb-0">
						<thead>
							<tr style="boder:1px solid black;">
                                <th>ID</th>
                                <th>Disk</th>
                                <th>Backup Date</th>
                                <th>File Size</th>
								<th class="text-center action-btn">Actions</th>
							</tr>
						</thead>
						<tbody>
                            <?php $__currentLoopData = $backups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($k+1); ?></td>
                                <td><?php echo e($b['disk']); ?></td>
                                <td><?php echo e(\Carbon\Carbon::createFromTimeStamp($b['last_modified'])->formatLocalized('%d %B %Y, %H:%M')); ?></td>
                                <td><?php echo e(round((int)$b['file_size']/1048576, 2).' MB'); ?></td>
                                <td class="text-center">
                                    <div class="actions">
                                        <?php if($b['download']): ?>
                                        <a class="float-left" href="<?php echo e(route('backup.download')); ?>?disk=<?php echo e($b['disk']); ?>&path=<?php echo e(urlencode($b['file_path'])); ?>&file_name=<?php echo e(urlencode($b['file_name'])); ?>">
                                            <button title="download backup" class="btn btn-success" >
                                                <i class="fe fe-download"></i>
                                            </button>
                                        </a>
                                        <?php endif; ?>
                                        <form action="<?php echo e(route('backup.destroy',$b['file_name'])); ?>?disk=<?php echo e($b['disk']); ?>" method="post">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field("DELETE"); ?>
                                            <button title="delete backup" class="btn btn-danger" type="submit">
                                                <i class="fe fe-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>			
</div>



<?php $__env->stopSection(); ?>


<?php $__env->startPush('page-js'); ?>
	
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\codeastro\Laravel\Pharmacy-management-system\resources\views/admin/backup.blade.php ENDPATH**/ ?>