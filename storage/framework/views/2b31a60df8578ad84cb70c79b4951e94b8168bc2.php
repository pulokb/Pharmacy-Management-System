<!-- Sidebar -->
<div class="sidebar" id="sidebar">
	<div class="sidebar-inner slimscroll">
		<div id="sidebar-menu" class="sidebar-menu">
			
			<ul>
				<li class="menu-title"> 
					<span>Main</span>
				</li>
				<li class="<?php echo e(route_is('dashboard') ? 'active' : ''); ?>"> 
					<a href="<?php echo e(route('dashboard')); ?>"><i class="fe fe-home"></i> <span>Dashboard</span></a>
				</li>
				
				<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view-category')): ?>
				<li class="<?php echo e(route_is('categories.*') ? 'active' : ''); ?>"> 
					<a href="<?php echo e(route('categories.index')); ?>"><i class="fe fe-layout"></i> <span>Categories</span></a>
				</li>
				<?php endif; ?>

				<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view-purchase')): ?>
				<li class="submenu">
					<a href="#"><i class="fe fe-star-o"></i> <span> Purchase</span> <span class="fas fa-chevron-down"></span></a>
					<ul style="display: none;">
						<li><a class="<?php echo e(route_is('purchases.*') ? 'active' : ''); ?>" href="<?php echo e(route('purchases.index')); ?>">Purchase</a></li>
						<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create-purchase')): ?>
						<li><a class="<?php echo e(route_is('purchases.create') ? 'active' : ''); ?>" href="<?php echo e(route('purchases.create')); ?>">Add Purchase</a></li>
						<?php endif; ?>
					</ul>
				</li>
				<?php endif; ?>
				
				<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view-products')): ?>
				<li class="submenu">
					<a href="#"><i class="fe fe-document"></i> <span> Products</span> <span class="fas fa-chevron-down"></span></a>
					<ul style="display: none;">
						<li><a class="<?php echo e(route_is(('products.*')) ? 'active' : ''); ?>" href="<?php echo e(route('products.index')); ?>">Products</a></li>
						<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create-product')): ?><li><a class="<?php echo e(route_is('products.create') ? 'active' : ''); ?>" href="<?php echo e(route('products.create')); ?>">Add Product</a></li><?php endif; ?>
						<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view-outstock-products')): ?><li><a class="<?php echo e(route_is('outstock') ? 'active' : ''); ?>" href="<?php echo e(route('outstock')); ?>">Out-Stock</a></li><?php endif; ?>
						<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view-expired-products')): ?><li><a class="<?php echo e(route_is('expired') ? 'active' : ''); ?>" href="<?php echo e(route('expired')); ?>">Expired</a></li><?php endif; ?>
					</ul>
				</li>
				<?php endif; ?>
				
				
				<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view-sales')): ?>
				<li class="submenu">
					<a href="#"><i class="fe fe-activity"></i> <span> Sale</span> <span class="fas fa-chevron-down"></span></a>
					<ul style="display: none;">
						<li><a class="<?php echo e(route_is('sales.*') ? 'active' : ''); ?>" href="<?php echo e(route('sales.index')); ?>">Sales</a></li>
						<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create-sale')): ?>
						<li><a class="<?php echo e(route_is('sales.create') ? 'active' : ''); ?>" href="<?php echo e(route('sales.create')); ?>">Add Sale</a></li>
						<?php endif; ?>
					</ul>
				</li>
				<?php endif; ?>
				
				<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view-supplier')): ?>
				<li class="submenu">
					<a href="#"><i class="fe fe-user"></i> <span> Supplier</span> <span class="fas fa-chevron-down"></span></a>
					<ul style="display: none;">
						<li><a class="<?php echo e(route_is('suppliers.*') ? 'active' : ''); ?>" href="<?php echo e(route('suppliers.index')); ?>">Supplier</a></li>
						<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create-supplier')): ?><li><a class="<?php echo e(route_is('suppliers.create') ? 'active' : ''); ?>" href="<?php echo e(route('suppliers.create')); ?>">Add Supplier</a></li><?php endif; ?>
					</ul>
				</li>
				<?php endif; ?>

				<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view-reports')): ?>
				<li class="submenu">
					<a href="#"><i class="fe fe-document"></i> <span> Reports</span> <span class="fas fa-chevron-down"></span></a>
					<ul style="display: none;">
						<li><a class="<?php echo e(route_is('sales.report') ? 'active' : ''); ?>" href="<?php echo e(route('sales.report')); ?>">Sale Report</a></li>
						<li><a class="<?php echo e(route_is('purchases.report') ? 'active' : ''); ?>" href="<?php echo e(route('purchases.report')); ?>">Purchase Report</a></li>
					</ul>
				</li>
				<?php endif; ?>

				<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view-access-control')): ?>
				<li class="submenu">
					<a href="#"><i class="fe fe-lock"></i> <span> Access Control</span> <span class="fas fa-chevron-down"></span></a>
					<ul style="display: none;">
						<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view-permission')): ?>
						<li><a class="<?php echo e(route_is('permissions.index') ? 'active' : ''); ?>" href="<?php echo e(route('permissions.index')); ?>">Permissions</a></li>
						<?php endif; ?>
						<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view-role')): ?>
						<li><a class="<?php echo e(route_is('roles.*') ? 'active' : ''); ?>" href="<?php echo e(route('roles.index')); ?>">Roles</a></li>
						<?php endif; ?>
					</ul>
				</li>					
				<?php endif; ?>

				<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view-users')): ?>
				<li class="<?php echo e(route_is('users.*') ? 'active' : ''); ?>"> 
					<a href="<?php echo e(route('users.index')); ?>"><i class="fe fe-users"></i> <span>Users</span></a>
				</li>
				<?php endif; ?>
				
				<li class="<?php echo e(route_is('profile') ? 'active' : ''); ?>"> 
					<a href="<?php echo e(route('profile')); ?>"><i class="fe fe-user-plus"></i> <span>Profile</span></a>
				</li>
				<li class="<?php echo e(route_is('backup.index') ? 'active' : ''); ?>"> 
					<a href="<?php echo e(route('backup.index')); ?>"><i class="material-icons">backup</i> <span>Backups</span></a>
				</li>
				<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view-settings')): ?>
				<li class="<?php echo e(route_is('settings') ? 'active' : ''); ?>"> 
					<a href="<?php echo e(route('settings')); ?>">
						<i class="material-icons">settings</i>
						 <span> Settings</span>
					</a>
				</li>
				<?php endif; ?>
			</ul>
		</div>
	</div>
</div><!-- Visit codeastro.com for more projects -->
<!-- /Sidebar --><?php /**PATH E:\codeastro\Laravel\Pharmacy-management-system\resources\views/admin/includes/sidebar.blade.php ENDPATH**/ ?>