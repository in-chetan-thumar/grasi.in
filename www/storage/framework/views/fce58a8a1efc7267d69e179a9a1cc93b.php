<div class="offcanvas offcanvas-end" style="width: 30% !important;" tabindex="-1" id="offcanvasCreate"
     aria-labelledby="offcanvasCreate">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasCreate"><?php echo e(isset($permission)?'Edit':'Create new'); ?> permission</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">

        <?php if(isset($permission)): ?>
            <?php echo Form::open(array('url' => route('permission.update',$permission->id),'method'=>'PATCH','id'=>'permission-form','files'=>true)); ?>

        <?php else: ?>
            <?php echo Form::open(array('url' => route('permission.store'),'method'=>'POST','id'=>'permission-form','files'=>true)); ?>

        <?php endif; ?>

            <div class="row">
                <div class="col-12">
                    <div class="mb-3">
                        <div class="form-group">
                            <?php echo Form::label('title', 'Title',['style' =>'justify-content: right']); ?><span
                                class="required">*</span>
                            <?php echo Form::text('title',isset($permission) ? $permission->title:old('title'),['class' => 'form-control','id' =>'title']); ?>

                            <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span style="color:red">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <div class="form-group">
                            <?php echo Form::label('name', 'Name',['style' =>'justify-content: right']); ?><span
                                class="required">*</span>
                            <?php echo Form::text('name',isset($permission) ? $permission->name:old('name'),['class' => 'form-control','id' =>'name']); ?>

                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span style="color:red">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <div class="form-group">
                            <?php echo Form::label('permission_label', 'Permission label',['style' =>'justify-content: right']); ?><span
                                class="required">*</span>
                            <?php echo Form::text('permission_label',isset($permission) ? $permission->permission_label:old('permission_label'),['class' => 'form-control','id' =>'permission_label']); ?>

                            <?php $__errorArgs = ['permission_label'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span style="color:red">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                </div>
            </div>

        <div class="row">
            <div class="col-md-12">
                <?php echo Form::submit('Submit',['class'=>'btn btn-primary']); ?>

            </div>
        </div>
        </form>
    </div>
</div>
<?php echo JsValidator::formRequest('App\Http\Requests\PermissionRequest', '#permission-form'); ?>

<script>
    // Save OR UPDATE DATA
    $('#permission-form').on('submit', function (e) {
        e.preventDefault();
        var formData = new FormData($('#permission-form')[0]);
        var url = $(this).attr('action');
        var method = $(this).attr('method');

        if ($(this).valid()) {
            $('#status').show();
            $('#preloader').show();
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: url,
                processData: false,
                contentType: false,
                type: method,
                data: formData,
                success: function (data, textStatus, jqXHR) {
                    if (!data.error) {
                        $('#status').hide();
                        $('#preloader').hide();
                        $(".divtable").html(data.view);
                        toastr.success(data.message);
                        let closeCanvas = document.querySelector('[data-bs-dismiss="offcanvas"]');
                        closeCanvas.click();
                        //location.reload();
                    } else {
                        $('#status').hide();
                        $('#preloader').hide();
                        toastr.error(data.message);
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    $('#status').hide();
                    $('#preloader').hide();
                    toastr.error('Error occurred!');
                }
            });
        }
    })
</script>
<?php /**PATH D:\OSPanel\domains\Laravel10ProjectSkeleton\www\resources\views/admin/permission/offcanvas.blade.php ENDPATH**/ ?>