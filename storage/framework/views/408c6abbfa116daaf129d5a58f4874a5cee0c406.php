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
	<h3 class="page-title">Purchases Reports</h3>
	<ul class="breadcrumb">
		<li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>">Dashboard</a></li>
		<li class="breadcrumb-item active">Generate Purchase Reports</li>
	</ul>
</div>
<div class="col-sm-5 col">
	<a href="#generate_report" data-toggle="modal" class="btn btn-success float-right mt-2">Generate Report</a>
</div>
<?php $__env->stopPush(); ?>
<!-- Visit codeastro.com for more projects -->
<?php $__env->startSection('content'); ?>
    <?php if(isset($purchases)): ?>
    <div class="row">
        <div class="col-md-12">
            <!-- Purchases reports-->
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="purchase-table" class="datatable table table-hover table-center mb-0">
                            <thead>
                                <tr>
                                    <th>Medicine Name</th>
                                    <th>Category</th>
                                    <th>Supplier</th>
                                    <th>Purchase Cost</th>
                                    <th>Quantity</th>
                                    <th>Expire Date</th>                                </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $purchases; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $purchase): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if(!empty($purchase->supplier) && !empty($purchase->category)): ?>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <?php if(!empty($purchase->image)): ?>
                                            <span class="avatar avatar-sm mr-2">
                                                <img class="avatar-img" src="<?php echo e(asset('storage/purchases/'.$purchase->image)); ?>" alt="product image">
                                            </span>
                                            <?php endif; ?>
                                            <?php echo e($purchase->product); ?>

                                        </h2>
                                    </td>
                                    <td><?php echo e($purchase->category->name); ?></td>
                                    <td><?php echo e(AppSettings::get('app_currency', '$')); ?><?php echo e($purchase->price); ?></td>
                                    <td><?php echo e($purchase->quantity); ?></td>
                                    <td><?php echo e($purchase->supplier->name); ?></td>
                                    <td><?php echo e(date_format(date_create($purchase->expiry_date),"d M, Y")); ?></td>
                                </tr>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                         
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /Purchases Report -->
        </div>
    </div>
    <?php endif; ?>


    <!-- Generate Modal -->
    <div class="modal fade" id="generate_report" aria-hidden="true" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Generate Report</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?php echo e(route('purchases.report')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="row form-row">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>From</label>
                                            <input type="date" name="from_date" class="form-control from_date">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>To</label>
                                            <input type="date" name="to_date" class="form-control to_date">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success btn-block submit_report">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Generate Modal -->
<?php $__env->stopSection(); ?>


<?php $__env->startPush('page-js'); ?>
<script>
    $(document).ready(function(){
        $('#purchase-table').DataTable({
            dom: 'Bfrtip',		
            buttons: [
                {
                extend: 'collection',
                text: 'Export Data',
                buttons: [
                    {
                        extend: 'pdf',
                        exportOptions: {
                            columns: "thead th:not(.action-btn)"
                        }
                    },
                    {
                        extend: 'excel',
                        exportOptions: {
                            columns: "thead th:not(.action-btn)"
                        }
                    },
                    {
                        extend: 'csv',
                        exportOptions: {
                            columns: "thead th:not(.action-btn)"
                        }
                    },
                    {
                        extend: 'print',
                        exportOptions: {
                            columns: "thead th:not(.action-btn)"
                        }
                    }
                ]
                }
            ]
        });
    });
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\codeastro\Laravel\Pharmacy-management-system\resources\views/admin/purchases/reports.blade.php ENDPATH**/ ?>