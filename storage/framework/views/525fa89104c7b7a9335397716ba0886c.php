

<?php $__env->startSection('title', 'Contact Us'); ?>

<?php $__env->startSection('content'); ?>

    <section style="margin-bottom: 40px;">
        <h1 style="font-size: 2.5rem; color: #003366;">Contact Us</h1>
        <p style="margin-top: 10px;">
            We'd love to hear from you. Reach out for collaborations, support, or general inquiries.
        </p>
    </section>

    <form method="POST" action="/contact/submit" style="max-width: 600px;">
        <?php echo csrf_field(); ?>

        <div style="margin-bottom: 20px;">
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" required style="width: 100%; padding: 10px; margin-top: 5px;">
        </div>

        <div style="margin-bottom: 20px;">
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required style="width: 100%; padding: 10px; margin-top: 5px;">
        </div>

        <div style="margin-bottom: 20px;">
            <label for="message">Message:</label><br>
            <textarea id="message" name="message" rows="5" required style="width: 100%; padding: 10px; margin-top: 5px;"></textarea>
        </div>

        <button type="submit" style="background-color: #003366; color: white; padding: 10px 20px; border: none; border-radius: 5px;">
            Send Message
        </button>
    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\danis\Desktop\Larvel Projects\justice-bridge-final\resources\views/contact.blade.php ENDPATH**/ ?>