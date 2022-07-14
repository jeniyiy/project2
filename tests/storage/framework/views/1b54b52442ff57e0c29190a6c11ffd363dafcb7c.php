

<?php $__env->startSection('content'); ?>

<div class="mb-5">
	<span class="fs-3 border-1 border-bottom pb-2 pe-3">Customer page</span>
</div>

<?php if(session('success')): ?>
    <p class="alert mt-4 alert-success alert-dismissible fade show" role="alert"><?php echo e(session('success')); ?></p>
<?php endif; ?>

<a href="/customer/create" class="btn btn-primary px-3 mb-2">Create</a>

<div class="row">
    <div class="col-10">
        <table class="table table-striped text-center">
            <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Action</th>
            </tr>
</thead>
</tbody>
<?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
    <td><?php echo e($loop->iteration); ?></td>
    <td><?php echo e($customer->nameCustomer); ?></td>
    <td>
        <a href="/customer/edit/<?php echo e($customer->id); ?>" class="btn btn-warning">Edit</a>
        <a href="/customer/destroy/<?php echo e($customer->id); ?>" class="btn btn-danger" onclick="return confirm('sure?')">Hapus</a>
</td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
</table>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Restaurant\resources\views/customer/index.blade.php ENDPATH**/ ?>