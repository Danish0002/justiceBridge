

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1 class="mb-4">Rehabilitation Programs</h1>
    <a href="<?php echo e(route('rehabilitations.create')); ?>" class="btn btn-primary mb-3">Add New Program</a>

    <div class="table-responsive">
        <table class="table table-bordered table-striped align-middle mt-3">
            <thead class="table-dark">
                <tr>
                    <th>Prisoner</th>
                    <th>Program Name</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $rehabilitations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rehabilitation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($rehabilitation->prisoner->name); ?></td>
                        <td><?php echo e($rehabilitation->program_name); ?></td>
                        <td><?php echo e($rehabilitation->description); ?></td>
                        <td><?php echo e($rehabilitation->is_completed ? 'Completed' : 'In Progress'); ?></td>
                        <td>
                            <a href="<?php echo e(route('rehabilitations.edit', $rehabilitation->id)); ?>" class="btn btn-sm btn-warning">Edit</a>
                            <form action="<?php echo e(route('rehabilitations.destroy', $rehabilitation->id)); ?>" method="POST" class="d-inline">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

    <!-- Visual Impact Section -->
    <section class="rehab-impact mt-5 p-5 rounded" style="background-color: #f1f3f5;">
        <div class="row align-items-center">
            <!-- Text -->
            <div class="col-md-6 mb-4 mb-md-0">
                <h3 class="fw-bold text-dark">Restoring Purpose</h3>
                <p class="lead">
                    Rehabilitation programs offer a second chance to prisoners, helping them acquire skills, regain confidence,
                    and reintegrate into society. JusticeBridge supports each individual's journey toward positive transformation.
                </p>
            </div>

            <!-- Image -->
            <div class="col-md-6">
                <img src="/rehab.webp" alt="Rehabilitation in Prison" class="img-fluid rounded shadow-lg" style="max-height: 400px; object-fit: cover;">
            </div>
        </div>
    </section>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\danis\Desktop\Larvel Projects\justice-bridge-final\resources\views/rehabilitations/index.blade.php ENDPATH**/ ?>