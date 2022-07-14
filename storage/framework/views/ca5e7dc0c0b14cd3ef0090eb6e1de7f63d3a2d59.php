

<?php $__env->startSection('content'); ?>
<div class="mb-4">
	<span class="fs-3 border-1 border-bottom pb-2 pe-3">Detail order</span>
</div>

<a href="/order/index" class="btn btn-secondary mb-3" title="back">Back</a>

<div class="row">
	<div class="col-5">
		<div class="card">
			<div class="card-body">
				<div class="mb-3">
					<p class="m-0">Customer :</p>
					<small class="fst-italic">
						<?php echo e($order->customer->nameCustomer); ?>

						<?php echo e($order->customer->member ? '(Member)' : ''); ?>

					</small>
				</div>
				<div class="mb-3">
					<p class="m-0">Code :</p>
					<small class="fst-italic">
						<?php echo e($order->code); ?>

					</small>
				</div>
				<div class="mb-3">
					<p class="m-0">Detail order :</p>
					<?php $__currentLoopData = $order->orderItem; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orderItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="d-flex justify-content-between fst-italic">
						<small><?php echo e($orderItem->menu->nameMenu); ?></small>
						<small><?php echo e($orderItem->quantity); ?></small>
						<small><?php echo e($orderItem->subTotal); ?></small>
					</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

					<?php if($order->customer->member): ?>
					<div class="text-end fst-italic">
						<small class="me-3">Discount Member :</small>
						<small class="border-top border-dark">10 %</small>
					</div>
					<?php endif; ?>

					<div class="text-end fst-italic">
						<small class="me-3">Total :</small>
						<small class="border-top border-dark"><?php echo e($order->total); ?></small>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Restaurant\resources\views/order/show.blade.php ENDPATH**/ ?>