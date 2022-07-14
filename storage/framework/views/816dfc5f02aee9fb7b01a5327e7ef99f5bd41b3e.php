

<?php $__env->startSection('content'); ?>

<div class="mb-5">
	<span class="fs-3 border-1 border-bottom pb-2 pe-3">Menu Page</span>
</div>

	<?php if(session()->has('success')): ?>
	<div class="alert mt-4 alert-success alert-dismissible fade show" role="alert">
		<?php echo e(session('success')); ?>

	</div>
	<?php endif; ?>

	<a href="/menu/create" class="btn btn-primary px-3 mb-2">Create</a>

	<div class="row">
		<div class="col-10">
			<table class="table table-responsive table-hover table-striped text-center">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama Menu</th>
						<th>Description</th>
						<th>Foto</th>
						<th>Harga</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

					<tr>
						<td><?php echo e($loop->iteration); ?></td>
						<td><?php echo e($menu->nameMenu); ?></td>
						<td><?php echo e($menu->descMenu); ?></td>
						
						<td>
							<?php if(!$menu->photoMenu): ?>
							<img width="200px" height="150px" alt="photo menu" class="img-thumbnail img-fluid" src="<?php echo e(asset("storage/images/defaultmenu.jpg")); ?>">
							<?php else: ?>
							<img width="200px" height="150px" alt="photo menu" class="img-thumbnail img-fluid" src="<?php echo e(asset("storage/". $menu->photoMenu )); ?>">
							<?php endif; ?>
						</td>
						<td><?php echo e($menu->price); ?></td>
						<td>
							<a href="/menu/<?php echo e($menu->id); ?>/edit" class="btn me-1 text-white btn-sm btn-warning">Edit
								<span data-feather="edit"></span>
							</a>
							<form action="/menu/<?php echo e($menu->id); ?>" method="POST" class="d-inline">
								<?php echo method_field('delete'); ?>
								<?php echo csrf_field(); ?>
								<button type="submit" onclick="return confirm('Sure?')" class="btn btn-danger btn-sm">Hapus
									<span data-feather="trash-2"></span>
								</button>
							</form>
						</td>
					</tr>

					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
			</table>
		</div>
	</div>

	<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Restaurant\resources\views/menu/index.blade.php ENDPATH**/ ?>