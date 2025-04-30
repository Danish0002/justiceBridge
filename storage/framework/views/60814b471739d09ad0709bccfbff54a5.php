

<?php $__env->startSection('content'); ?>
    <h1>Create Rehabilitation Program</h1>
    <form action="<?php echo e(route('rehabilitations.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>

        <!-- Prisoner Selection -->
        <div class="form-group">
            <label for="prisoner_id">Prisoner</label>
            <select name="prisoner_id" id="prisoner_id" class="form-control" required>
                <?php $__currentLoopData = $prisoners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prisoner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($prisoner->id); ?>"><?php echo e($prisoner->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <!-- Program Name -->
        <div class="form-group">
            <label for="program_name">Program Name</label>
            <input type="text" name="program_name" class="form-control" required>
        </div>

        <!-- Description -->
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control"></textarea>
        </div>

        <!-- Is Completed -->
        <div class="form-group">
            <label for="is_completed">Completed?</label>
            <select name="is_completed" class="form-control" required>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-success">Save</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\danis\Desktop\Larvel Projects\justice-bridge-final\resources\views/rehabilitations/create.blade.php ENDPATH**/ ?>