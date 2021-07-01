<header>
        <!-- Header Start -->
       <div class="header-area header-transparrent">
           <div class="headder-top header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-2">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="/"><img src="<?php echo e(asset('Frontend/assets/img/logo/logo1.png')); ?>" alt=""></a>
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
                                            <li><a href="/">HOMEKOP</a></li>
                                            <li><a href="/artikel">ARTIKEL </a></li>
                                            <li><a href="riwayat_konsultasi.php">KONSULTASI</a></li>
                                            <li><a href="dokter">DOKTER</a></li>
                                            <li><a href="#">INFORMASI</a>
                                                <ul class="submenu">
                                                    <li><a href="puskeswan">PUSKESWAN</a></li>
                                                    <li><a href="daftar_tutorial.php">TUTORIAL</a></li>
                                                    <li><a href="tentangkami">TENTANG KAMI</a></li>                                                 
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                      <!-- Header-btn -->
                                <div class="header-btn d-none f-right d-lg-block">
                                    <?php if(Route::has('login')): ?>
                                        <a class="btn head-btn2" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                                    <?php endif; ?>
                                    <?php if(Route::has('register')): ?>
                                            <a class="btn head-btn1" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                    <?php endif; ?>
                                    </div>     
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
</header><?php /**PATH C:\xampp\htdocs\Kel_4_Gol_F_BWS\UJI COBA\dokternak\resources\views/layouts/navbar.blade.php ENDPATH**/ ?>