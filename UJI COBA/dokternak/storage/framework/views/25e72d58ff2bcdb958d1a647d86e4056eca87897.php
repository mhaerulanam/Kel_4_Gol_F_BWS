<header>
    <?php if(auth()->guard()->guest()): ?>
    <?php if(Route::has('login')): ?>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
        </li>
    <?php endif; ?>
    
    <?php if(Route::has('register')): ?>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
        </li>
    <?php endif; ?>
    <?php else: ?>
        <!-- Header Start -->
       <div class="header-area header-transparrent">
           <div class="headder-top header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-2">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="/home"><img src="<?php echo e(asset('Frontend/assets/img/logo/logo1.png')); ?>" alt=""></a>
                            </div> 
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>

                        <div class="col-lg-9 col-md-9">
                                <div class="menu-wrapper">
                                   <!-- Main-menu -->
                                   <div class="main-menu">
                                    <nav class="d-none d-lg-block">
                                        <ul id="navigation">
                                            <li><a href="/home">HOME</a></li>
                                            <li><a href="/artikel">ARTIKEL </a></li>
                                            <li><a href="/konsultasi">KONSULTASI</a></li>
                                            <li><a href="/dokter">DOKTER</a></li>
                                            <li><a href="#">INFORMASI</a>
                                                <ul class="submenu">
                                                    <li><a href="/puskeswan">PUSKESWAN</a></li>
                                                    <li><a href="/tutorial">TUTORIAL</a></li>
                                                    <li><a href="/tentangkami">TENTANG KAMI</a></li>                                                 
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <!-- Header-btn -->
                                <div class="main-menu f-right">
                                        <ul>
                                            <li class="nav-item dropdown">
                                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                    <?php echo e(Auth::user()->name); ?>

                                                </a>
                
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                                       onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                                                        <?php echo e(__('Logout')); ?>

                                                    </a>
                
                                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                                        <?php echo csrf_field(); ?>
                                                    </form>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>        
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-lg-3 col-md-2">                 
                        </div>
                    </div>
                </div>
           </div>
       </div>
        <!-- Header End -->
        <?php endif; ?>
</header><?php /**PATH C:\xampp\htdocs\Kel_4_Gol_F_BWS\UJI COBA\dokternak\resources\views/frontend/layouts/navbar.blade.php ENDPATH**/ ?>