<?php $__env->startPush('page-header'); ?>
<div class="col">
	<h3 class="page-title">Profile</h3>
	<ul class="breadcrumb">
		<li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>">Dashboard</a></li>
		<li class="breadcrumb-item active">Profile</li>
	</ul>
</div>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
	<div class="col-md-12">
		<div class="profile-header">
			<div class="row align-items-center">
				<div class="col-auto profile-image">
					<a href="#">
						<img class="rounded-circle" alt="User Image" src="<?php echo e(!empty(auth()->user()->avatar) ? asset('storage/users/'.auth()->user()->avatar): asset('assets/img/avatar_1nn.png')); ?>">
					</a>
				</div>
				<div class="col ml-md-n2 profile-user-info">
					<h4 class="user-name mb-0"><?php echo e(auth()->user()->name); ?></h4>
					<h6 class="text-muted"><?php echo e(auth()->user()->email); ?></h6>
				</div>

			</div>
		</div>
		<div class="profile-menu">
			<ul class="nav nav-tabs nav-tabs-solid">
				<li class="nav-item">
					<a class="nav-link active" data-toggle="tab" href="#per_details_tab">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#password_tab">Password</a>
				</li>
			</ul>
		</div>
		<div class="tab-content profile-tab-cont">

			<!-- Personal Details Tab -->
			<div class="tab-pane fade show active" id="per_details_tab">

				<!-- Personal Details -->
				<div class="row">
					<div class="col-lg-12">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title d-flex justify-content-between">
									<span>Personal Details</span>
									<a class="edit-link" data-toggle="modal" href="#edit_personal_details"><i class="fa fa-edit mr-1"></i>Edit</a>
								</h5>
								<div class="row">
									<p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Name</p>
									<p class="col-sm-10"><?php echo e(auth()->user()->name); ?></p>
								</div>

								<div class="row">
									<p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Email ID</p>
									<p class="col-sm-10"><?php echo e(auth()->user()->email); ?></p>
								</div>

								<div class="row">
									<p class="col-sm-2 text-muted text-sm-right mv-0 mb-sm-3">User Role</p>
									<p class="col-sm-10">
										<?php $__currentLoopData = auth()->user()->getRoleNames(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<?php echo e($role); ?>

										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</p>
								</div>

							</div>
						</div>

						<!-- Edit Details Modal -->
						<div class="modal fade" id="edit_personal_details" aria-hidden="true" role="dialog">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title">Personal Details</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<form method="POST" enctype="multipart/form-data" action="<?php echo e(route('profile.update',auth()->user())); ?>">
											<?php echo csrf_field(); ?>
											<div class="row form-row">
												<div class="col-12">
													<div class="form-group">
														<label>Full Name</label>
														<input class="form-control" name="name" type="text" value="<?php echo e(auth()->user()->name); ?>" placeholder="Full Name">
													</div>
												</div>
												<div class="col-12">
													<div class="form-group">
														<label>email</label>
														<input class="form-control" name="email" type="text" value="<?php echo e(auth()->user()->email); ?>" placeholder="Email">
													</div>
												</div>
												<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit-role')): ?>
												<div class="col-12">
													<div class="form-group">
														<label>Role</label>
														<select class="form-control select edit_role" name="role">
															<?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
																<option value="<?php echo e($role->name); ?>"><?php echo e($role->name); ?></option>
															<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
														</select>
													</div>
												</div>
												<?php endif; ?>
												<div class="col-12">
													<div class="form-group">
														<label>User Avatar</label>
														<input type="file" value="<?php echo e(auth()->user()->avatar); ?>" class="form-control" name="avatar">
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

					</div>


				</div>
				<!-- /Personal Details -->

			</div>
			<!-- /Personal Details Tab -->

			<!-- Change Password Tab -->
			<div id="password_tab" class="tab-pane fade">

				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Change Password</h5>
						<div class="row">
							<div class="col-md-10 col-lg-12">
								<form method="POST" action="<?php echo e(route('update-password',auth()->user())); ?>">
									<?php echo csrf_field(); ?>
									<?php echo method_field("PUT"); ?>
									<div class="form-group">
										<label>Current Password</label>
										<input type="password" name="current_password" class="form-control" placeholder="enter your current password">
									</div>
									<div class="form-group">
										<label>New Password</label>
										<input type="password" name="password" class="form-control" placeholder="enter your new password">
									</div>
									<div class="form-group">
										<label>Confirm Password</label>
										<input type="password" name="password_confirmation" class="form-control" placeholder="repeat your new password">
									</div>
									<button class="btn btn-success" type="submit">Save Changes</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Change Password Tab -->

		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\codeastro\Laravel\Pharmacy-management-system\resources\views/admin/users/profile.blade.php ENDPATH**/ ?>