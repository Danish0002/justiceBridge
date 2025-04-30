

<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>

<div class="dashboard-container">

    
    <section class="section card">
        <h1 class="section-title">Undertrial Prisoner Dashboard</h1>
        <p class="section-description">
            Track and monitor the legal status, rehabilitation progress, and rights awareness of undertrial prisoners in real-time.
        </p>
    </section>

    
    <section class="section card">
        <h2 class="section-subtitle">Statistics</h2>
        <ul class="stats-list">
            <li><strong>Total Undertrial Prisoners:</strong> 1500+</li>
            <li><strong>Prisoners Connected to Lawyers:</strong> 1200+</li>
            <li><strong>Ongoing Rehabilitation Programs:</strong> 45+</li>
            <li><strong>Release Applications Filed:</strong> 300+</li>
        </ul>
    </section>

    
    <section class="stats-cards">
        <div class="stat-card bg-darkblue">
            <h3>Total Undertrial Prisoners</h3>
            <p class="stat-number">1500+</p>
        </div>

        <div class="stat-card bg-midblue">
            <h3>Connected to Lawyers</h3>
            <p class="stat-number">1200+</p>
        </div>

        <div class="stat-card bg-lightblue">
            <h3>Ongoing Rehabilitation</h3>
            <p class="stat-number">45+</p>
        </div>

        <div class="stat-card bg-skyblue">
            <h3>Release Applications</h3>
            <p class="stat-number">300+</p>
        </div>
    </section>

    
    <section class="section">
        <a href="/legal-aid" class="btn-primary">View Legal Aid</a>
    </section>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\danis\Desktop\Larvel Projects\justice-bridge-final\resources\views/dashboard.blade.php ENDPATH**/ ?>