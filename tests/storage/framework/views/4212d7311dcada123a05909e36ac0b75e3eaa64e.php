

<?php $__env->startSection('content'); ?>
<div class="mb-4">
	<span class="fs-3 border-1 border-bottom pb-2 pe-3">Edit order</span>
</div>

<a href="/order/index" class="btn btn-secondary mb-3" title="back">Back</a>

<div class="row">
	<div class="col-5">
		<div class="card">
			<div class="card-body">
				<form action="/order/update/<?php echo e($order->id); ?>" method="POST">
					<?php echo csrf_field(); ?>
					<div class="mb-3">
						<label class="form-label">Customer :</label>
						<select name="customerId" class="form-select">
							<?php $__currentLoopData = $customer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<?php if($order->customerId == $c->id): ?>
							<option value="<?php echo e($c->id); ?>" selected><?php echo e($c->nameCustomer); ?></option>
							<?php else: ?>
							<option value="<?php echo e($c->id); ?>"><?php echo e($c->nameCustomer); ?></option>
							<?php endif; ?>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</select>
					</div>
					<div class="mb-3 menu-container">
						<label class="form-label">Menu</label>
						<button class="btn btn-info btn-add-menu" type="button">Add</button>
						<?php $__currentLoopData = $order->orderItem; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $orderItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="input-group mb-1 menu">
							<select name="menuId[]" class="form-select">
								<option></option>
								<?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<?php if($orderItem->menuId == $m->id): ?>
								<option value="<?php echo e($m->id); ?>" selected><?php echo e($m->nameMenu); ?></option>
								<?php else: ?>
								<option value="<?php echo e($m->id); ?>"><?php echo e($m->nameMenu); ?></option>
								<?php endif; ?>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</select>
							<input type="number" name="quantity[]" class="form-control" placeholder="Quantity" value="<?php echo e($orderItem->quantity); ?>">
							<?php if($key == 0): ?>
							<a class="btn btn-secondary"></a>
							<?php else: ?>
							<a class="btn btn-danger btn-delete-menu"></a>
							<?php endif; ?>
						</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>

					<div class="d-grid">
						<button class="btn btn-primary">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<script>
	$('.btn-add-menu').click(function() {
		$('.menu-container').append(menu())
	})

	$(document).on('click', '.btn-delete-menu', function() {
		$(this).closest('.menu').remove()
	})

	function menu(){
		return `<div class="input-group mb-1 menu">
		<select name="menuId[]" class="form-select">
		<option></option>
		<?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<option value="<?php echo e($m->id); ?>"><?php echo e($m->nameMenu); ?></option>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</select>
		<input type="number" name="quantity[]" class="form-control" placeholder="Quantity" value="1">
		<a class="btn btn-danger btn-delete-menu"></a>
		</div>`
	}
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Restaurant\resources\views/order/edit.blade.php ENDPATH**/ ?>