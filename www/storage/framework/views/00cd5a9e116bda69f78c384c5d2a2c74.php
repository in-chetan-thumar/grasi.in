

<?php $__env->startSection('title'); ?> Role <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('components.breadcrumb',['lists'=>['Dashboard'=>route('root')]]); ?>
        <?php $__env->slot('title'); ?> Role  <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="float-end">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('roles.create')): ?>
                        <a href="<?php echo e(route('roles.create')); ?>" class="btn btn-primary"><i
                                class="mdi mdi-plus"></i> New Role</a>
                        <?php endif; ?>
                    </div>
                    <div class="clearfix"></div>
                    <table id="role-data " class="table table-striped table-bordered dt-responsive mt-3"
                           style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Role</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($key+1); ?></td>
                                <td><?php echo e($row->name); ?></td>
                                <td><?php echo e($row->created_at_formatted); ?></td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <button id="btnGroupVerticalDrop1" type="button"
                                                class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="true">
                                            Action</i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('roles.edit')): ?>
                                                <a class="dropdown-item"
                                                   href="<?php echo e(route('roles.edit',$row->id)); ?> ">Edit</a>
                                            <?php endif; ?>

                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('roles.destroy')): ?>
                                                <a class="dropdown-item"
                                                   onclick="if(confirm('Are you sure you want to delete.')) document.getElementById('delete-<?php echo e($row->id); ?>').submit()">
                                                    Delete</a>
                                                <form id="delete-<?php echo e($row->id); ?>"
                                                      action="<?php echo e(route('roles.destroy', $row->id)); ?>"
                                                      method="POST">
                                                    <?php echo method_field('DELETE'); ?>
                                                    <?php echo csrf_field(); ?>
                                                </form>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <?php echo e($roles->appends($_GET)->links()); ?>

                </div>
            </div>
        </div>
        <!-- end col -->
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\Laravel10ProjectSkeleton\www\resources\views/admin/role/role.blade.php ENDPATH**/ ?>