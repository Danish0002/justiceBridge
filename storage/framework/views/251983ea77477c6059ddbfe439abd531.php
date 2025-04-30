

<?php $__env->startSection('content'); ?>
    <h1>Prisoners</h1>
    <a href="<?php echo e(route('prisoners.create')); ?>" class="btn btn-primary">Add New Prisoner</a>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Gender</th>
                <th>Age</th>
                <th>Case Details</th>
                <th>Prison Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $prisoners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prisoner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($prisoner->name); ?></td>
                    <td><?php echo e($prisoner->gender); ?></td>
                    <td><?php echo e($prisoner->age); ?></td>
                    <td><?php echo e($prisoner->case_details); ?></td>
                    <td><?php echo e($prisoner->prison_name); ?></td>
                    <td>
                        <a href="<?php echo e(route('prisoners.edit', $prisoner->id)); ?>" class="btn btn-warning">Edit</a>
                        <form action="<?php echo e(route('prisoners.destroy', $prisoner->id)); ?>" method="POST" style="display:inline;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>



<!-- Visual Section with prisoner.jpg -->
<section class="prisoner-visual my-5">
  <div class="container">
    <div class="row align-items-center">
      <!-- Text -->
      <div class="col-md-6 mb-4 mb-md-0">
        <h3 class="text-dark fw-bold">Humanizing Justice</h3>
        <p class="lead">
          Behind every statistic is a human story. JusticeBridge strives to ensure that every undertrial prisoner is treated with dignity, provided legal aid, and offered a path to rehabilitation.
        </p>
      </div>

      <!-- Image -->
      <div class="col-md-6">
        <img src="/prisoner.png" alt="Undertrial Prisoner" class="img-fluid rounded shadow-lg" style="max-height: 400px; object-fit: cover;">
      </div>
    </div>
  </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\danis\Desktop\Larvel Projects\justice-bridge-final\resources\views/prisoners/index.blade.php ENDPATH**/ ?>