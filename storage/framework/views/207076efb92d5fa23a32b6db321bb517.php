<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JusticeBridge</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="<?php echo e(url('/')); ?>">JusticeBridge</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo e(route('prisoners.index')); ?>">Prisoners</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('legal-cases.index')); ?>">Legal Cases</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('lawyers.index')); ?>">Lawyers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('rehabilitations.index')); ?>">Rehabilitation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('utrcc-links.index')); ?>">UTRCC Links</a>
                    </li>
                </ul>
            </div>
        </nav>

        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH C:\Users\danis\Desktop\Larvel Projects\justice-bridge-final\resources\views/layouts/app.blade.php ENDPATH**/ ?>