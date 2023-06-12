

<?php $__env->startSection('title'); ?> Permission list <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('components.breadcrumb',['lists'=>['Dashboard'=>route('root')]]); ?>
        <?php $__env->slot('title'); ?> Permission list  <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="float-end">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('permission.create')): ?>
                        <a href="<?php echo e(route('permission.create')); ?>" onclick="showSaveModel(event)" class="btn btn-primary"><i
                                class="mdi mdi-plus"></i>&nbsp;Add permission</a>
                        <?php endif; ?>
                    </div>
                    <div class="float-start">
                    </div>
                    <div class="clearfix"></div>
                    <div class="divtable">
                        <?php echo $table; ?>

                    </div>
                </div>
            </div>
        </div>
        <div class="divOffcanvas">

        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script-bottom'); ?>
    <script type="text/javascript" src="<?php echo e(asset('assets/vendor/jsvalidation/js/jsvalidation.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('assets/js/permission.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\Laravel10ProjectSkeleton\www\resources\views/admin/permission/list.blade.php ENDPATH**/ ?>