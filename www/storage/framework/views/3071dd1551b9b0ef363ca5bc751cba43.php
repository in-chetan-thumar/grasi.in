<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.dashboards'); ?>  <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb',["lists"=>['Dashboard' =>'']]); ?>
        <?php $__env->slot('title'); ?>  <?php echo app('translator')->get('translation.dashboards'); ?>  <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OpenServer\domains\admin-panel\lc.velzon-default.com\www\resources\views/index.blade.php ENDPATH**/ ?>