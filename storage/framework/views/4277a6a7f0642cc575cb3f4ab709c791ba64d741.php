

<?php $__env->startSection('content'); ?>
<div class="mb-4">
	<span class="fs-3 border-1 border-bottom pb-2 pe-3">Create Customer</span>
</div>

<a href="/customer/index" class="btn btn-secondary mb-3" title="back">Back</a>

<div class="row">
	<div class="col-5">
		<div class="card">
			<div class="card-body">
				<form action="/customer/store" method="POST">
					<?php echo csrf_field(); ?>
					<div class="mb-3">
						<label class="form-label">Name :</label>
						<input type="text" name="nameCustomer" class="form-control">
					</div>
					<div class="mb-3">
						<label class="form-label">Email :</label>
						<input type="text" name="emailCustomer" class="form-control">
					</div>
					<div class="mb-3">
						<label class="form-label">Phone :</label>
						<input type="text" name="phoneCustomer" class="form-control">
					</div>
					<div class="mb-3">
						<div class="form-check">
						<label class="form-label">Member :</label>	
						<input type="checkbox" name="member" value="1" class="form-check-input">
						</div>
					</div>

					<div class="d-grid">
						<button class="btn btn-primary">Create</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Restaurant\resources\views/customer/create.blade.php ENDPATH**/ ?>