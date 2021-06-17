<!-- Sidenav -->
<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header  d-flex  align-items-center">
            <a class="navbar-brand" href="javascript:void(0)">
                <img src="<?php echo e(asset('img/brand/blue.png')); ?>" class="navbar-brand-img" alt="...">
            </a>
            <div class=" ml-auto ">
                <!-- Sidenav toggler -->
                <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
                    <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="#navbar-dashboards" data-toggle="collapse" role="button"
                            aria-expanded="true" aria-controls="navbar-dashboards">
                            <i class="ni ni-shop text-primary"></i>
                            <span class="nav-link-text">Dashboards</span>
                        </a>
                        <div class="collapse show" id="navbar-dashboards">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="<?php echo e(url('/dashboard')); ?>" class="nav-link">
                                        <span class="sidenav-mini-icon"> D </span>
                                        <span class="sidenav-normal"> Users </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/dashboards/alternative.html" class="nav-link">
                                        <span class="sidenav-mini-icon"> A </span>
                                        <span class="sidenav-normal"> Board </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/dashboards/alternative.html" class="nav-link">
                                        <span class="sidenav-mini-icon"> C </span>
                                        <span class="sidenav-normal"> Admin </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#navbar-examples" data-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="navbar-examples">
                            <i class="ni ni-ungroup text-orange"></i>
                            <span class="nav-link-text"> Releases </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#navbar-forms" data-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="navbar-forms">
                            <i class="ni ni-single-copy-04 text-pink"></i>
                            <span class="nav-link-text"> Payments </span>
                        </a>
                        <div class="collapse" id="navbar-forms">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="../../pages/forms/elements.html" class="nav-link">
                                        <span class="sidenav-mini-icon"> E </span>
                                        <span class="sidenav-normal"> User payments </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/forms/components.html" class="nav-link">
                                        <span class="sidenav-mini-icon"> C </span>
                                        <span class="sidenav-normal"> Board of Directors Payments </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#navbar-tables" data-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="navbar-tables">
                            <i class="ni ni-align-left-2 text-default"></i>
                            <span class="nav-link-text"> parking meter </span>
                        </a>
                        <div class="collapse" id="navbar-tables">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="../../pages/tables/tables.html" class="nav-link">
                                        <span class="sidenav-mini-icon"> T </span>
                                        <span class="sidenav-normal"> Events </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/tables/sortable.html" class="nav-link">
                                        <span class="sidenav-mini-icon"> S </span>
                                        <span class="sidenav-normal"> Residente </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="../../pages/calendar.html">
                            <i class="ni ni-calendar-grid-58 text-red"></i>
                            <span class="nav-link-text">Calendar</span>
                        </a>
                            </ul>
                        </div>
                        <!-- Divider -->
                        <hr class="my-3">
                        <!-- Heading -->
                        <h6 class="navbar-heading p-0 text-muted">
                            <span class="docs-normal">Documentation</span>
                            <span class="docs-mini">D</span>
                        </h6>
                        <!-- Navigation -->
                        <ul class="navbar-nav mb-md-3">
                            <li class="nav-item">
                                <a class="nav-link"
                                    href="https://demos.creative-tim.com/argon-dashboard-pro/docs/getting-started/overview.html"
                                    target="_blank">
                                    <i class="ni ni-spaceship"></i>
                                    <span class="nav-link-text">Settings</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"
                                    href="https://demos.creative-tim.com/argon-dashboard-pro/docs/foundation/colors.html"
                                    target="_blank">
                                    <i class="ni ni-palette"></i>
                                    <span class="nav-link-text">Foundation</span>
                                </a>
                            </li>
                        </ul>
            </div>
        </div>
    </div>
</nav><?php /**PATH C:\wamp64\www\condominium\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>