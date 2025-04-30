<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>

<div class="home-container">
  <section class="hero-2 position-relative text-white d-flex">
    <div class="overlay"></div>
    <div class="hero-content container d-flex align-items-center">
      <div class="row w-100">
        <div class="col-lg-7">
          <h1 class="fw-bold">Welcome to <span class="highlight">JusticeBridge</span></h1>
          <p class="lead">
            Empowering Undertrial Prisoners through Legal Aid, Rehabilitation, and Technology-Driven Solutions.
          </p>
          <div class="btn-group mt-4">
            <a href="#about" class="btn btn-primary btn-lg me-3">Learn More</a>
            <a href="#get-involved" class="btn btn-outline-light btn-lg btn-secondary">Get Involved</a>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>






    
    <section class="my-5">
    <div class="row align-items-center">
        <!-- Left Image -->
        <div class="col-md-6 mb-4 mb-md-0">
            <img src="goal.png" alt="JusticeBridge Visual" class="img-fluid rounded shadow">
        </div>

        <!-- Right Text -->
        <div class="col-md-6">
            <h2 class="text-primary">Our Mission</h2>
            <p class="mt-3">
                JusticeBridge aims to bridge the gap between undertrial prisoners and the justice system in India.
                Through legal representation, educational opportunities, and real-time monitoring,
                we strive to create a transparent, equitable, and rehabilitative environment for those awaiting justice.
            </p>
        </div>
    </div>
</section>


    
    <section class="card section my-5">
    

    <div class="row align-items-center">
    <h2 class="section-subtitle text-primary mb-4">Key Features</h2>
        <!-- Left Text (Key Features) -->
        <div class="col-md-6">
            <ul class="features-list">
                <li><a href="#legal-aid"><strong>Legal Aid Access:</strong> Connects undertrial prisoners with pro bono lawyers and legal organizations.</a></li>
                <li><a href="#dashboard"><strong>Real-time Dashboard:</strong> Tracks and monitors the status and progress of cases and rehabilitation efforts.</a></li>
                <li><a href="#rehabilitation"><strong>Rehabilitation Programs:</strong> Provides education, vocational training, and mental health support to undertrial prisoners.</a></li>
                <li><a href="#rights-awareness"><strong>Rights Awareness Platform:</strong> Educates prisoners and support-persons about legal rights and UTP provisions.</a></li>
                <li><a href="#transparency"><strong>Transparency and Accountability:</strong> Ensures that no prisoner is left behind due to systemic gaps.</a></li>
            </ul>
        </div>

        <!-- Right Image -->
        <div class="col-md-6">
            <img src="/features2.jpg" alt="Key Features Visual" class="img-fluid rounded shadow">
        </div>
    </div>
</section>



    
    <section class="card section my-5">
    

    <div class="row align-items-center">
        <!-- Left Image -->
        <div class="col-md-6">
            <img src="/impact.jpg" alt="Impact Image" class="img-fluid rounded shadow">
        </div>

        <!-- Right Text -->
        <div class="col-md-6">
        <h2 class="section-subtitle text-primary mb-4">Impact We Aim For</h2>
            <p style="font-size: 1.2rem;">
                Through JusticeBridge, we aim to increase access to justice, promote social reintegration,
                reduce recidivism rates, and transform the criminal justice system into one that is fair, transparent, and humane.
            </p>
        </div>
    </div>
</section>


<section class="section cta-buttons text-center">
    <a href="/legal-aid" class="btn-primary mx-2">Get Legal Aid</a>
    <a href="/rehabilitation" class="btn-secondary mx-2">Explore Rehabilitation</a>
</section>


</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\danis\Desktop\Larvel Projects\justice-bridge-final\resources\views/welcome.blade.php ENDPATH**/ ?>