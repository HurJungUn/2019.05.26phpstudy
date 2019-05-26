<?php $__env->startSection("content"); ?>
    <h1>식단보기</h1>
    <div>
        <?php echo e($lunch); ?>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout/master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\dev\xampp-portable-win32-7.3.0-0-VC15\xampp\htdocs\views/lunch.blade.php ENDPATH**/ ?>