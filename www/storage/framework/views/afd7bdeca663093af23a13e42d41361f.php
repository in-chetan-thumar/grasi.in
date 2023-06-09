<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index" class="logo logo-dark">
            <span class="logo-sm">
                <img src="<?php echo e(URL::asset('assets/images/logo-sm.png')); ?>" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="<?php echo e(URL::asset('assets/images/logo-dark.png')); ?>" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index" class="logo logo-light">
            <span class="logo-sm">
                <img src="<?php echo e(URL::asset('assets/images/logo-sm.png')); ?>" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="<?php echo e(URL::asset('assets/images/logo-light.png')); ?>" alt="" height="17">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                
                
                
                
                
                
                
                
                
                
                
                

                
                <li class="nav-item">
                    <a class="nav-link menu-link" href="widgets">
                        <i class="ri-dashboard-line"></i> <span><?php echo app('translator')->get('translation.dashboards'); ?></span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarPages" data-bs-toggle="collapse" role="button"
                        aria-expanded="true" aria-controls="sidebarPages">
                        <i class="ri-pages-line"></i> <span data-key="t-pages">Message templetes</span>
                    </a>
                    <div class="menu-dropdown collapse show" id="sidebarPages" style="">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="<?php echo e(route('email.templates')); ?>" class="nav-link">Email</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(route('sms.templates')); ?>" class="nav-link">SMS</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(route('whatsapp.templates')); ?>" class="nav-link">WhatsApp</a>
                            </li>
                        </ul>
                    </div>
                </li>
                
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>
<?php /**PATH D:\OSPanel\domains\Laravel10ProjectSkeleton\www\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>