

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1 class="mb-4">UTRCC Links</h1>

    <a href="<?php echo e(route('utrcc-links.create')); ?>" class="btn btn-success mb-3">Add New Link</a>

    <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <div class="table-responsive">
        <table class="table table-striped table-bordered align-middle">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Prisoner Name</th>
                    <th>Lawyer Name</th>
                    <th>Assigned Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $utrccLinks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($link->id); ?></td>
                        <td><?php echo e($link->prisoner->name ?? 'N/A'); ?></td>
                        <td><?php echo e($link->lawyer->name ?? 'N/A'); ?></td>
                        <td><?php echo e($link->assigned_date); ?></td>
                        <td>
                            <a href="<?php echo e(route('utrcc-links.edit', $link->id)); ?>" class="btn btn-warning btn-sm">Edit</a>
                            <form action="<?php echo e(route('utrcc-links.destroy', $link->id)); ?>" method="POST" class="d-inline">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="5" class="text-center">No links found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <!-- Visual Enhancement Section -->
    <section class="mt-5 p-5 rounded" style="background-color: #f8f9fa;">
        <div class="row align-items-center">
            <!-- Text -->
            <div class="col-md-6 mb-4 mb-md-0">
                <h3 class="fw-bold text-dark">Building Bridges to Justice</h3>
                <p class="lead">
                    The UTRCC system fosters critical connections between prisoners and legal advocates,
                    helping ensure no one faces the justice system alone.
                    With timely assignments and transparent tracking, we empower legal support at scale.
                </p>
            </div>

            <!-- Image -->
            <div class="col-md-6">
                <img src="utrcc.jpg" alt="Lawyer-Prisoner Connection" class="img-fluid rounded shadow" style="max-height: 400px; object-fit: cover;">
            </div>
        </div>
    </section>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\danis\Desktop\Larvel Projects\justice-bridge-final\resources\views/utrcc_links/index.blade.php ENDPATH**/ ?>