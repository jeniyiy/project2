

<?php $__env->startSection('content'); ?>
<div class="mb-5">
	<span class="fs-3 border-1 border-bottom pb-2 pe-3">Order Page</span>
</div>

<?php if(session()->has('success')): ?>
	<div class="alert mt-4 alert-success alert-dismissible fade show" role="alert">
		<?php echo e(session('success')); ?>

	</div>
	<?php endif; ?>

<a href="/order/create" class="btn btn-primary px-3 mb-2">Create</a>

<div class="row">
	<div class="col-10">
		<table class="table table-striped text-center">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Code</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php $__currentLoopData = $order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $o): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<td><?php echo e($loop->iteration); ?></td>
					<td><?php echo e($o->customer->nameCustomer); ?></td>
					<td><?php echo e($o->code); ?></td>
					<td>
						<a href="/order/show/<?php echo e($o->id); ?>" class="btn btn-info">Show</a>
						<a href="/order/edit/<?php echo e($o->id); ?>" class="btn btn-warning">Edit</a>
						<a href="/order/destroy/<?php echo e($o->id); ?>" class="btn btn-danger"
						onclick="return confirm('Sure?')">Hapus</a>
					</td>
				</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</tbody>
		</table>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Restaurant\resources\views/order/index.blade.php ENDPATH**/ ?>