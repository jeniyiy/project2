

<?php $__env->startSection('content'); ?>

<div class="mb-4">
        <span class="fs-3 border-1 border-buttom pb-2 pe-3">Create Customer</span>
</div>

<a href="/customer" class="btn btn-secondary mb-3" tittle="back"><span data-feather="chevron-left"></span>Back</a>

<div class="row">
    <div class="col-5">
        <div class="card">
            <div class="card-body">
                <form action="/customer/update/<?php echo e($customer->id); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <label class="form-label">Name :</label>
                        <input type="text" name="nameCustomer" class="form-control" value="<?php echo e($customer->nameCustomer); ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email :</label>
                        <input type="text" name="emailCustomer" class="form-control" value="<?php echo e($customer->emailCustomer); ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Phone :</label>
                        <input type="text" name="phoneCustomer" class="form-control" value="<?php echo e($customer->phoneCustomer); ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Member :</label>
                        <input type="checkbox" name="member" class="form-check-input" <?php echo e($customer->member ? 'checked' : ''); ?>>
                    </div>
                    </div>

                    <div class="d-grid">
                        <button class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Restaurant\resources\views/customer/edit.blade.php ENDPATH**/ ?>