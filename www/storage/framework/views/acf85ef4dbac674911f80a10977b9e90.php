
<?php $__env->startSection('title'); ?>
    Two Step Verification
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="auth-page-wrapper pt-5">
        <!-- auth page bg -->
        <div class="auth-one-bg-position auth-one-bg" id="auth-particles">
            <div class="bg-overlay"></div>

            <div class="shape">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                     viewBox="0 0 1440 120">
                    <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
                </svg>
            </div>
        </div>

        <!-- auth page content -->
        <div class="auth-page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mt-sm-5 mb-4 text-white-50">
                            <div>
                                    <a href="<?php echo e(route('root')); ?>" class="d-inline-block auth-logo">
                                    <img src="<?php echo e(URL::asset('assets/images/logo-light.png')); ?>" alt="" height="20">
                                </a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- end row -->
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card mt-4">

                            <div class="card-body p-4">
                                <div class="mb-4">
                                    <div class="avatar-lg mx-auto">
                                        <div class="avatar-title bg-light text-primary display-5 rounded-circle">
                                            <i class="ri-mail-line"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="p-2 mt-4">
                                    <div class="text-muted text-center mb-4 mx-lg-3">
                                        <h4>
                                            <?php if(config('constants.EMAIL_OTP_LOGIN')): ?>
                                                Verify Your Email
                                            <?php elseif(config('constants.MOBILE_OTP_LOGIN')): ?>
                                                Verify Your Mobile
                                            <?php endif; ?>
                                         </h4>
                                        <p>Please enter the 6 digit code sent to <span
                                                class="fw-semibold">
                                                <?php if(config('constants.EMAIL_OTP_LOGIN')): ?>
                                                    <?php echo e(app('common-helper')->maskEmailAddress(auth()->user()->email)); ?>

                                                <?php elseif(config('constants.MOBILE_OTP_LOGIN')): ?>
                                                    <?php echo e(app('common-helper')->maskPhoneNumber(auth()->user()->mobile)); ?>

                                                <?php endif; ?>
                                                </span></p>
                                    </div>

                                    <form method="POST" action="<?php echo e(route('verify.store')); ?>">
                                        <?php echo e(csrf_field()); ?>

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mb-3">

                                                    <input type="text"
                                                           oninput="this.value=this.value.replace(/[^0-9]/g,'');"
                                                           maxlength="6" name="two_factor_code"
                                                           class="form-control <?php $__errorArgs = ['two_factor_code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                           placeholder="Enter 6 digits otp ">

                                                    <?php $__errorArgs = ['two_factor_code'];
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

                                            <div class="mt-3">
                                                <button type="submit" class="btn btn-success w-100">Confirm</button>
                                            </div>
                                        </div>
                                    </form>


                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->

                        <div class="mt-4 text-center">
                            <?php if(auth()->user()->is_account_locked == 'N'): ?>
                                <p class="mb-0">Didn't receive a code ? <a href="<?php echo e(route('verify.resend')); ?>"
                                                                           class="fw-semibold text-primary text-decoration-underline">Resend</a>
                                </p>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->

        <!-- footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <p class="mb-0 text-muted">&copy;
                                <script>document.write(new Date().getFullYear())</script> <?php echo e(env('APP_NAME')); ?>.
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <!-- particles js -->
    <script src="<?php echo e(asset('assets/libs/particles.js/particles.js.min.js')); ?>"></script>
    <!-- two-step-verification js -->
    <script src="<?php echo e(asset('assets/js/pages/two-step-verification.init.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master-without-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\Laravel10ProjectSkeleton\www\resources\views/admin/auth/two_factor.blade.php ENDPATH**/ ?>