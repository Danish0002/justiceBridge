

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1 class="mb-4">Lawyers Directory</h1>

    <a href="<?php echo e(route('lawyers.create')); ?>" class="btn btn-primary mb-3">Add New Lawyer</a>

    <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <div class="table-responsive">
        <table class="table table-hover table-striped table-bordered align-middle">
            <thead class="table-dark">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Specialization</th>
                    <th>Availability</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $lawyers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lawyer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($lawyer->name); ?></td>
                        <td><?php echo e($lawyer->email); ?></td>
                        <td><?php echo e($lawyer->phone); ?></td>
                        <td><?php echo e($lawyer->specialization); ?></td>
                        <td>
                            <span class="badge <?php echo e($lawyer->is_available ? 'bg-success' : 'bg-secondary'); ?>">
                                <?php echo e($lawyer->is_available ? 'Available' : 'Not Available'); ?>

                            </span>
                        </td>
                        <td>
                            <a href="<?php echo e(route('lawyers.edit', $lawyer->id)); ?>" class="btn btn-sm btn-warning">Edit</a>
                            <form action="<?php echo e(route('lawyers.destroy', $lawyer->id)); ?>" method="POST" class="d-inline">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" onclick="return confirm('Are you sure to delete this lawyer?')" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="6" class="text-center">No lawyers found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <!-- Visual Info Section -->
    <section class="mt-5 p-5 rounded bg-light">
        <div class="row align-items-center">
            <!-- Text -->
            <div class="col-md-6 mb-4 mb-md-0">
                <h3 class="fw-bold text-dark">Supporting Justice Through Advocacy</h3>
                <p class="lead">
                    Lawyers play a crucial role in ensuring justice for undertrial prisoners. This directory makes it easier to connect legal professionals with those who need them most, promoting equity and access to justice.
                </p>
            </div>

            <!-- Image -->
            <div class="col-md-6">
                <img src="lawyer.png" alt="Lawyers working for justice" class="img-fluid rounded shadow" style="max-height: 400px; object-fit: cover;">
            </div>
        </div>
    </section>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\danis\Desktop\Larvel Projects\justice-bridge-final\resources\views/lawyers/index.blade.php ENDPATH**/ ?>