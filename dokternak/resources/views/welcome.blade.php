<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Dokternak') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('Frontend/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('Frontend/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('Frontend/assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset('Frontend/assets/css/price_rangs.css')}}">
    <link rel="stylesheet" href="{{ asset('Frontend/assets/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{ asset('Frontend/assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{ asset('Frontend/assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('Frontend/assets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('Frontend/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('Frontend/assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{ asset('Frontend/assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{ asset('Frontend/assets/css/style.css')}}">
        <style>
            .avatar{
                width: 35px;
                height: 35px;
                border-radius: 100%;
                background-color: black;
                border:1px solid white;
            }
        </style>
</head>
<body>
<header>
        <!-- Header Start -->
       <div class="header-area header-transparrent">
           <div class="headder-top header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-2">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="LandingPageDokter.php"><img src="{{ asset('Frontend/assets/img/logo/logo1.png') }}" alt=""></a>
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
                                            <li><a href="LandingPagePeternak.php">HOME</a></li>
                                            <li><a href="artikel">ARTIKEL </a></li>
                                            <li><a href="riwayat_konsultasi.php">KONSULTASI</a></li>
                                            <li><a href="dokter">DOKTER</a></li>
                                            <li><a href="#">INFORMASI</a>
                                                <ul class="submenu">
                                                    <li><a href="puskeswan">PUSKESWAN</a></li>
                                                    <li><a href="tutorial">TUTORIAL</a></li>
                                                    <li><a href="tentangkami">TENTANG KAMI</a></li>                                                 
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <!-- Header-btn -->
                                <div class="main-menu f-right">
                                        <ul>
                                            @if (Route::has('login'))
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                            </li>
                                        @endif
                                        
                                        @if (Route::has('register'))
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                            </li>
                                        @endif
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
    </header>
    <main>

        <!-- slider Area Start-->
        <div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="slider-active">
                <div class="single-slider slider-height d-flex align-items-center" data-background="{{ asset('Frontend/assets/img/gallery/cv_bg.jpg') }}">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-9 col-md-10">
                                <div class="hero__caption">
                                    <h3><span id="title-ajakan">Temukan Dokter Hewan <br> di Lingkungan Terdekatmu <br>  <br> </span></h3>
                                </div>
                            </div>
                        </div>
                        <!-- Search Box -->
                        <div class="row">
                            <div class="col-xl-8">
                                <!-- form -->
                                <form action="#" class="search-box">
                                    <div class="input-form">
                                        <input type="text" placeholder="Masukkan Nama Dokter">
                                    </div>
                                    <div class="select-form">
                                        <div class="select-itms">
                                            <select name="select" id="select1">
                                                <option value="">Tamansari</option>
                                                <option value="">Tapen</option>
                                                <option value="">Curahdami</option>
                                                <option value="">Cermee</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="search-form">
                                        <a href="#">Cari</a>
                                    </div>	
                                </form>	
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
                <!-- Featured_job_start -->
                <section class="featured-job-area feature-padding">
                    <div class="container">
                        <!-- Section Tittle -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-tittle text-center">
                                    <h5>KABUPATEN BONDOWOSO</h5>
                                    <h2>Daftar Dokter</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-xl-10">
                                <!-- single-job-content -->
                                <div class="single-job-items mb-30">
                                    <div class="job-items">
                                        <div class="company-img">
                                            <a href="job_details.html"><img src="assets/img/icon/job-list1.png" alt=""></a>
                                        </div>
                                        <div class="job-tittle">
                                            <a href="job_details.html"><h4>drh.Fadli</h4></a>
                                            <ul>
                                                <li>Dokter</li>
                                                <li><i class="fas fa-map-marker-alt"></i>Bondowoso</li>
                                                <li>0852-3445-2546</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="items-link f-right">
                                        <a href="job_details.html">Detail</a>
                                        {{-- <span>7 hours ago</span> --}}
                                    </div>
                                </div>
                                <!-- single-job-content -->
                                <div class="single-job-items mb-30">
                                    <div class="job-items">
                                        <div class="company-img">
                                            <a href="job_details.html"><img src="assets/img/icon/job-list2.png" alt=""></a>
                                        </div>
                                        <div class="job-tittle">
                                            <a href="job_details.html"><h4>drh. H Didik Suhermanto MP</h4></a>
                                            <ul>
                                                <li>Dokter</li>
                                                <li><i class="fas fa-map-marker-alt"></i>Nangkaan</li>
                                                <li>0812-3527-343</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="items-link f-right">
                                        <a href="job_details.html">Detail</a>
                                        {{-- <span>7 hours ago</span> --}}
                                    </div>
                                </div>
                                 <!-- single-job-content -->
                                <div class="single-job-items mb-30">
                                    <div class="job-items">
                                        <div class="company-img">
                                            <a href="job_details.html"><img src="assets/img/icon/job-list3.png" alt=""></a>
                                        </div>
                                        <div class="job-tittle">
                                            <a href="job_details.html"><h4>drh. Moech Saifoel, M.P.</h4></a>
                                            <ul>
                                                <li>Dokter</li>
                                                <li><i class="fas fa-map-marker-alt"></i>Tegalampel</li>
                                                <li>(0332) 429110</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="items-link f-right">
                                        <a href="job_details.html">Detail</a>
                                        {{-- <span>7 hours ago</span> --}}
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

        <!-- Our Services Start -->
        <div class="our-services section-pad-t30">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <h5>PANDUAN PENGGUNA APLIKASI</h5>
                            <h2>TUTORIAL </h2>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-contnet-center">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-tour"></span>
                            </div>
                            <div class="services-cap">
                               <h5><a href="job_listing.html">Cara Daftar Untuk Dokter</a></h5>
                               <div class="items-link f-right">
                               <a href="job_details.html">Detail</a>
                               </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-cms"></span>
                            </div>
                            <div class="services-cap">
                                <h5><a href="job_listing.html">Cara Daftar User Umum</a></h5>
                                <div class="items-link f-right">
                                    <a href="job_details.html">Detail</a>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-report"></span>
                            </div>
                            <div class="services-cap">
                                <h5><a href="job_listing.html">Cara Daftar User Umum</a></h5>
                                <div class="items-link f-right">
                                    <a href="job_details.html">Detail</a>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-app"></span>
                            </div>
                            <div class="services-cap">
                               <h5><a href="job_listing.html">Cara Login</a></h5>
                               <div class="items-link f-right">
                                <a href="job_details.html">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <div class="footer-area footer-bg footer-padding">
                <div class="container">
                    <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-4 col-md-2 col-sm-7">
                           <div class="single-footer-caption mb-50">
                             <div class="single-footer-caption mb-30">
                                 <div class="footer-tittle">
                                     <h4>LOKASI</h4>
                                     <div class="footer-pera">
                                         <p>Jl. Raya Situbondo, Blindungan, Kec. Bondowoso, Kabupaten Bondowoso, Jawa Timur 68211</p>
                                    </div>
                                 </div>
                             </div>
                           </div>
                        </div>
                        <div class="col-xl-3 col-lg-5 col-md-4 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>TENTANG KAMI</h4>
                                    <ul>
                                    <p>Website Dokternak dikembangkan oleh mahasiswa Teknik Informatika, Politeknik Negeri Jember Kampus Bondowoso. Website ini bertujuan sebagai wadah komunikasi
                                        Dokter Hewan, Peternak, dan Petlovers.</p>
                                        <!-- #ganti nama file  -->
                                        <li><a href="aboutus.php"> selengkapnya-></a></li> 
                                    </ul>
                                </div>
    
                            </div>
                        </div>
                        
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>KONTAK</h4>
                                    <ul>
                                        <li><a href="https://api.whatsapp.com/send?phone=+62 812-3254-4553">Telepon : +62 812-3254-4553</a></li>
                                        <li><a href="#">Email : kel01golabws@gmail.com</a></li>
                                    </ul>
                                </div>
    
                            </div>
                        </div>
        </footer>
</body>
<!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>
        <script src="./assets/js/price_rangs.js"></script>
        
		<!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
		<script src="./assets/js/animated.headline.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="./assets/js/jquery.scrollUp.min.js"></script>
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>
        
</html>