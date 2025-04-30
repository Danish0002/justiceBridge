

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1 class="mb-4">Legal Cases</h1>
        <a href="<?php echo e(route('legal-cases.create')); ?>" class="btn btn-primary mb-3">Add New Case</a>

        <div class="table-responsive">
            <table class="table table-bordered table-striped align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Prisoner</th>
                        <th>Case Number</th>
                        <th>Court Name</th>
                        <th>Next Hearing</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $cases; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $case): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($case->prisoner->name); ?></td>
                            <td><?php echo e($case->case_number); ?></td>
                            <td><?php echo e($case->court_name); ?></td>
                            <td><?php echo e($case->next_hearing_date); ?></td>
                            <td>
                                <a href="<?php echo e(route('legal-cases.edit', $case->id)); ?>" class="btn btn-sm btn-warning">Edit</a>
                                <form action="<?php echo e(route('legal-cases.destroy', $case->id)); ?>" method="POST" class="d-inline">
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

        <!-- Visual Section After Table -->
        <section class="prisoner-visual mt-5 p-5 rounded" style="background-color: #f9f9f9;">
            <div class="row align-items-center">
                <!-- Text -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <h3 class="fw-bold text-dark">Dignity Behind Bars</h3>
                    <p class="lead">
                        Each case listed above represents a real individual. JusticeBridge is committed to ensuring fair trials,
                        legal support, and rehabilitation for undertrial prisoners across the nation.
                    </p>
                </div>

                <!-- Image -->
                <div class="col-md-6">
                    <img src="cases.jpg" alt="Undertrial Prisoner" class="img-fluid rounded shadow-lg" style="max-height: 400px; object-fit: cover;">
                </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\danis\Desktop\Larvel Projects\justice-bridge-final\resources\views/legal_cases/index.blade.php ENDPATH**/ ?>