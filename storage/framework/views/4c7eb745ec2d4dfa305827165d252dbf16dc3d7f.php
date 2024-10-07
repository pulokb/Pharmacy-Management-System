<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- csrf token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo e(ucfirst(AppSettings::get('app_name', 'App'))); ?> - <?php echo e(ucfirst($title ?? '')); ?></title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(!empty(AppSettings::get('favicon')) ? asset('storage/'.AppSettings::get('favicon')) : asset('assets/img/favicon.png')); ?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/fontawesome/css/fontawesome.min.css')); ?>">
    <!-- Feathericon CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/feathericon.min.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('assets/css/icons.min.css')); ?>">
    <!-- Snackbar CSS -->
	<link rel="stylesheet" href="<?php echo e(asset('assets/plugins/snackbar/snackbar.min.css')); ?>">
    <!-- Sweet Alert css -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/sweetalert2/sweetalert2.min.css')); ?>">
    <!-- Snackbar Css -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/snackbar/snackbar.min.css')); ?>">
    <!-- Select2 Css -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/select2/css/select2.min.css')); ?>">
    <!-- Main CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
    <!-- Page CSS -->
    <?php echo $__env->yieldPushContent('page-css'); ?>
    <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>
<body>

    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <!-- Header -->
        <?php echo $__env->make('admin.includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- /Header -->

        <!-- Sidebar -->
        <?php echo $__env->make('admin.includes.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- /Sidebar -->

        <!-- Page Wrapper -->
        <div class="page-wrapper">

            <div class="content container-fluid">

                <!-- Page Header -->
                <div class="page-header">
                    <div class="row">
                        <?php echo $__env->yieldPushContent('page-header'); ?>
                    </div>
                </div>
                <!-- /Page Header -->
                <?php if($errors->any()): ?>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.alerts.danger','data' => ['error' => $error]]); ?>
<?php $component->withName('alerts.danger'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['error' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($error)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>

                <?php echo $__env->yieldContent('content'); ?>
                <!-- add sales modal-->
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.modals.add-sale','data' => []]); ?>
<?php $component->withName('modals.add-sale'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                 <!-- / add sales modal -->
            </div>
        </div>
        <!-- /Page Wrapper -->

    </div>
    <!-- /Main Wrapper -->
    
</body>
<!-- jQuery -->
<script src="<?php echo e(asset('assets/plugins/jquery/jquery.min.js')); ?>"></script>

<!-- Bootstrap Core JS -->
<script src="<?php echo e(asset('assets/js/popper.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/plugins/slimscroll/jquery.slimscroll.min.js')); ?>"></script>
<!-- Sweet Alert Js -->
<script src="<?php echo e(asset('assets/plugins/sweetalert2/sweetalert2.min.js')); ?>"></script>
<!-- Snackbar Js -->
<script src="<?php echo e(asset('assets/plugins/snackbar/snackbar.min.js')); ?>"></script>
<!-- Select2 JS -->
<script src="<?php echo e(asset('assets/plugins/select2/js/select2.min.js')); ?>"></script>
<!-- Custom JS -->
<script src="<?php echo e(asset('assets/js/script.js')); ?>"></script>
<script>
    $(document).ready(function(){
        $('body').on('click','#deletebtn',function(){
            var id = $(this).data('id');
            var route = $(this).data('route');
            swal.queue([
                {
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    type: "warning",
                    showCancelButton: !0,
                    confirmButtonText: '<i class="fe fe-trash mr-1"></i> Delete!',
                    cancelButtonText: '<i class="fa fa-times mr-1"></i> Cancel!',
                    confirmButtonClass: "btn btn-success mt-2",
                    cancelButtonClass: "btn btn-danger ml-2 mt-2",
                    buttonsStyling: !1,
                    preConfirm: function(){
                        return new Promise(function(){
                            $.ajax({
                                url: route,
                                type: "DELETE",
                                data: {"id": id},
                                success: function(){
                                    swal.insertQueueStep(
                                        Swal.fire({
                                            title: "Deleted!",
                                            text: "Resource has been deleted.",
                                            type: "success",
                                            showConfirmButton: !1,
                                            timer: 1500,
                                        })
                                    )
                                    $('.datatable').DataTable().ajax.reload();
                                }
                            })

                        })
                    }
                }
            ]).catch(swal.noop);
        }); 
    });
    <?php if(Session::has('message')): ?>
        var type = "<?php echo e(Session::get('alert-type', 'info')); ?>";
        switch(type){
            case 'info':
                Snackbar.show({
                    text: "<?php echo e(Session::get('message')); ?>",
                    actionTextColor: '#fff',
                    backgroundColor: '#2196f3'
                });
                break;

            case 'warning':
                Snackbar.show({
                    text: "<?php echo e(Session::get('message')); ?>",
                    pos: 'top-right',
                    actionTextColor: '#fff',
                    backgroundColor: '#e2a03f'
                });
                break;

            case 'success':
                Snackbar.show({
                    text: "<?php echo e(Session::get('message')); ?>",
                    pos: 'top-right',
                    actionTextColor: '#fff',
                    backgroundColor: '#8dbf42'
                });
                break;

            case 'danger':
                Snackbar.show({
                    text: "<?php echo e(Session::get('message')); ?>",
                    pos: 'top-right',
                    actionTextColor: '#fff',
                    backgroundColor: '#e7515a'
                });
                break;
        }
    <?php endif; ?>
</script>
<!-- Page JS -->
<?php echo $__env->yieldPushContent('page-js'); ?>
</html><?php /**PATH F:\codeastro\Laravel\Pharmacy-management-system\resources\views/admin/layouts/app.blade.php ENDPATH**/ ?>