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
    <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/chart.js/Chart.min.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('page-header'); ?>
<div class="col-sm-12">
	<h3 class="page-title">Welcome <?php echo e(auth()->user()->name); ?>!</h3>
	<ul class="breadcrumb">
		<li class="breadcrumb-item active">Dashboard</li>
	</ul>
</div>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-xl-3 col-sm-6 col-12">
        <div class="card">
            <div class="card-body">
                <div class="dash-widget-header">
                    <span class="dash-widget-icon text-primary border-primary">
                        <i class="fe fe-money"></i>
                    </span>
                    <div class="dash-count">
                        <h3><?php echo e(AppSettings::get('app_currency', '$')); ?> <?php echo e($today_sales); ?></h3>
                    </div>
                </div>
                <div class="dash-widget-info">
                    <h6 class="text-muted">Today Sales Cash</h6>
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-primary w-50"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-12">
        <div class="card">
            <div class="card-body">
                <div class="dash-widget-header">
                    <span class="dash-widget-icon text-success">
                        <i class="fe fe-credit-card"></i>
                    </span>
                    <div class="dash-count">
                        <h3><?php echo e($total_categories); ?></h3>
                    </div>
                </div>
                <div class="dash-widget-info">
                    
                    <h6 class="text-muted">Product Categories</h6>
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-success w-50"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-12">
        <div class="card">
            <div class="card-body">
                <div class="dash-widget-header">
                    <span class="dash-widget-icon text-danger border-danger">
                        <i class="fe fe-folder"></i>
                    </span>
                    <div class="dash-count">
                        <h3><?php echo e($total_expired_products); ?></h3>
                    </div>
                </div>
                <div class="dash-widget-info">
                    
                    <h6 class="text-muted">Expired Products</h6>
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-danger w-50"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-12">
        <div class="card">
            <div class="card-body">
                <div class="dash-widget-header">
                    <span class="dash-widget-icon text-warning border-warning">
                        <i class="fe fe-users"></i>
                    </span>
                    <div class="dash-count">
                        <h3><?php echo e(\DB::table('users')->count()); ?></h3>
                    </div>
                </div>
                <div class="dash-widget-info">
                    
                    <h6 class="text-muted">System Users</h6>
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-warning w-50"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 col-lg-6">
        <div class="card card-table p-3">
            <div class="card-header">
                <h4 class="card-title ">Today Sales</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="sales-table" class="datatable table table-hover table-center mb-0">
                        <thead>
                            <tr>
                                <th>Medicine</th>
                                <th>Quantity</th>
                                <th>Total Price</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                                                                                      
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12 col-lg-6">
                    
        <!-- Pie Chart -->
        <div class="card card-chart">
            <div class="card-header">
                <h4 class="card-title text-center">Resources</h4>
            </div>
            <div class="card-body">
                <div style="">
                    <?php echo $pieChart->render(); ?>

                </div>
            </div>
        </div>
        <!-- /Pie Chart -->
        
    </div>	
    
    
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('page-js'); ?>
<script>
    $(document).ready(function() {
        var table = $('#sales-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "<?php echo e(route('sales.index')); ?>",
            columns: [
                {data: 'product', name: 'product'},
                {data: 'quantity', name: 'quantity'},
                {data: 'total_price', name: 'total_price'},
				{data: 'date', name: 'date'},
            ]
        });
        
    });
</script> 
<script src="<?php echo e(asset('assets/plugins/chart.js/Chart.bundle.min.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\codeastro\Laravel\Pharmacy-management-system\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>