

<?php $__env->startSection('title'); ?> New Role <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('components.breadcrumb',['lists'=>['Dashboard'=>route('root'),'Role list'=>route('roles.index')]]); ?>
        <?php $__env->slot('title'); ?> New Role  <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="float-end">
                        <a href="<?php echo e(route('roles.index')); ?>" class="btn btn-primary"><i
                                class="mdi mdi-arrow-left"></i>
                            Back to list</a>
                    </div>
                    <div class="clearfix"></div>
                    <?php echo Form::open(array('route' => 'roles.store','method'=>'POST','id'=>'role-form')); ?>

                   <div class="row">
                       <div class="col-xs-12 col-sm-12 col-md-12">
                           <div class="mb-3">
                               <div class="form-group">
                                   <?php echo e(Form::label('Role')); ?><span class="required">*</span>
                                   <?php echo Form::text('name',old('name'),['class'=>'form-control','placeholder'=>'Role name']); ?>

                                   <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                   <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                             </span>
                                   <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                               </div>
                           </div>
                       </div>
                       <div class="col-xs-12 col-sm-12 col-md-12">
                           <div class="mb-3">
                               <div class="form-group">
                                   <strong>Permission:</strong>
                                   <br/>
                                   <br/>
                                   <div class="row">
                                       <?php if(!empty($permissions_data)): ?>
                                           <?php $__currentLoopData = $permissions_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                               <div class="col-md-12">
                                                   <div class="nhsuk-do-dont-list">
                                                       <h6 class="nhsuk-do-dont-list__label"
                                                           style="font-size: 1.0rem !important;"><?php echo e($row['section_title']); ?></h6>
                                                       <hr/>
                                                       <div class="row">
                                                           <?php $__currentLoopData = $row['permission']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permisson_list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                               <div class="col-md-3 mt-2">
                                                                   <div class="nhsuk-checkboxes__item">
                                                                       <input class="nhsuk-checkboxes__input"
                                                                              id="<?php echo e($permisson_list['permission_label']); ?>"
                                                                              name="permission[]" type="checkbox"
                                                                              value="<?php echo e($permisson_list['id']); ?>"
                                                                              aria-controls="conditional-contact-1"
                                                                              aria-expanded="false">
                                                                       <label class="nhsuk-label nhsuk-checkboxes__label"
                                                                              for="<?php echo e($permisson_list['permission_label']); ?>">
                                                                           <?php echo e($permisson_list['permission_label']); ?>

                                                                       </label>
                                                                   </div>
                                                               </div>
                                                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                       </div>
                                                       <br/>
                                                   </div>
                                               </div>
                                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                       <?php endif; ?>
                                   </div>
                               </div>
                               <div class="mb-3">
                               </div>
                               <div class="col-xs-12 col-sm-12 col-md-12">
                                   <?php echo e(Form::button('Add role',['class'=>'btn btn-primary waves-effect btnSubmit waves-light'])); ?>

                               </div>

                               <?php echo Form::close(); ?>

                           </div>
                       </div>
                   </div>
                </div>
                <!-- end col -->
            </div>
            <?php $__env->stopSection(); ?>
            <?php $__env->startSection('script'); ?>
                <script type="text/javascript" src="<?php echo e(asset('assets/vendor/jsvalidation/js/jsvalidation.js')); ?>"></script>
                <?php echo JsValidator::formRequest('App\Http\Requests\RoleRequest', '#role-form'); ?>

                <script type="text/javascript">
                    $(".btnSubmit").on('click', function (e) {

                        $("#role-form").submit();

                        if ($("#role-form").valid()) {
                            $('#status').show();
                            $('#preloader').show();
                            $(".btnSubmit").prop('disabled', true);
                        }
                    });
                </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\Laravel10ProjectSkeleton\www\resources\views/admin/role/create_role.blade.php ENDPATH**/ ?>