<!doctype html>
<html class="no-js" lang="zxx">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Daftar Puskeswan </title>
    <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="shortcut icon" type="image/x-icon" href="{{ asset('Frontend/assets/img/favicon.png')}}">
  
   
     <!-- CSS here -->
     <link rel="stylesheet" href="{{ asset('Frontend/assets/css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{ asset('Frontend/assets/css/owl.carousel.min.css')}}">
      <link rel="stylesheet" href="{{ asset('Frontend/assets/css/slicknav.css')}}">
      <link rel="stylesheet" href="{{ asset('Frontend/assets/css/price_rangs.css')}}">
      <link rel="stylesheet" href="{{ asset('Frontend/assets/css/animate.min.css')}}">
      <link rel="stylesheet" href="{{ asset('Frontend/assets/css/magnific-popup.css')}}">
      <link rel="stylesheet" href="{{ asset('Frontend/assets/css/fontawesome-all.min.css')}}">
      <link rel="stylesheet" href="{{ asset('Frontend/assets/css/themify-icons.css')}}">
      <link rel="stylesheet" href="{{ asset('Frontend/assets/css/slick.css')}}">
      <link rel="stylesheet" href="{{ asset('Frontend/assets/css/nice-select.css')}}">
      <link rel="stylesheet" href="{{ asset('Frontend/assets/css/style.css')}}">
      <link rel="stylesheet" href="{{ asset('Frontend/assets/css/responsive.css')}}">
    <style>
.col-md-4{
      padding-bottom:20px;
  }
  
  .white {
    color: #fff !important;
  }
  .mt{float: left;margin-top: -20px;padding-top: 20px;}
  .bg-blue-ui {
    background-color: #708198 !important;
  }
  figure img{width:300px;
  height: 300px;
  }
  
  #blogCarousel {
    padding-bottom: 100px;
  }
  
  .blog .carousel-indicators {
    left: 0;
    top: -50px;
    height: 50%;
  }
  
  
  /* The colour of the indicators */
  
  .blog .carousel-indicators li {
    background: #708198;
    border-radius: 50%;
    width: 8px;
    height: 8px;
  }
  
  .blog .carousel-indicators .active {
    background: #0fc9af;
  }

  .item-carousel-blog-block {
    outline: medium none;
    padding: 15px;
  }
  
  .item-box-blog {
    border: 1px solid #dadada;
    text-align: center;
    z-index: 4;
    height: 560px;
    padding: 20px;
  }
  
  .item-box-blog-image {
    position: relative;
    /* mask-image:; */
  }
  
  .item-box-blog-image figure img {
    width: 100%;
    /* height: auto; */
    height: 270px;
  }
  
  
  .item-box-blog-body {
    padding: 10px;
  }
  
  .item-heading-blog a h5 {
    margin: 0;
    line-height: 1;
    text-decoration:none;
    transition: color 0.3s;
  }
  
  .item-box-blog-heading a {
      text-decoration: none;
  }
  
  .item-box-blog-data p {
    font-size: 13px;
  }
  
  .item-box-blog-data p i {
    font-size: 12px;
  }
  
  .item-box-blog-text {
    max-height: 100px;
    overflow: hidden;
  }
  
  .mt-10 {
    float: left;
    margin-top: -10px;
    padding-top: 10px;
  }
  
  .btn.bg-blue-ui.white.read {
    cursor: pointer;
    padding: 4px 20px;
    float: left;
    margin-top: 10px;
  }
  
  .btn.bg-blue-ui.white.read:hover {
    box-shadow: 0px 5px 15px inset #4d5f77;
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
                                            <li><a href="daftar_artikel.php">ARTIKEL </a></li>
                                            <li><a href="riwayat_konsultasi.php">KONSULTASI</a></li>
                                            <li><a href="daftar_dokter.php">DOKTER</a></li>
                                            <li><a href="#">INFORMASI</a>
                                                <ul class="submenu">
                                                    <li><a href="daftarpuskeswan.php">PUSKESWAN</a></li>
                                                    <li><a href="daftar_tutorial.php">TUTORIAL</a></li>
                                                    <li><a href="aboutus.php">TENTANG KAMI</a></li>                                                 
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

 <!-- Banner Atas Start-->
 <div class="slider-area ">
      <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="{{ asset('Frontend/assets/img/gallery/s2.jpg')}}">
          <div class="container">
              <div class="row">
                  <div class="col-xl-12">
                      <div class="hero-cap text-center">
                          <h2>DAFTAR PUSKESWAN</h2>
                      </div>
                  </div>
              </div>
          </div>
      </div>
   </div>
   <!-- Banner End -->
    
  <!-- Our Services Start -->
  <div class="our-services section-pad-t30">
            <div class="container">
      
            <div class="pagination-area pb-200 text-center">
                <div class="blog_right_sidebar">          
                <aside class="single_sidebar_widget search_widget">
                            <form method="POST">
                                <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder='cari puskeswan' name="nt" id="cari puskeswan" value=""
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'search_keyword'">
                                        <div class="input-group-append">
                                            <button class="btns" type="submit" name="submit"><i class="ti-search"></i></button> 
                                        </div>
                                   </div>      
                            </form>
                        </aside>
                </div>
                </div>
                

        
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
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
                               <h5><a href="job_listing.html">Puskeswan Tamanan</a></h5>
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
                                <h5><a href="job_listing.html">Puskeswan Tapen</a></h5>
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
                                <h5><a href="job_listing.html">Puskeswan Curahdami</a></h5>
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
                               <h5><a href="job_listing.html">Puskeswan Cermee</a></h5>
                               <div class="items-link f-right">
                                <a href="job_details.html">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-helmet"></span>
                            </div>
                            <div class="services-cap">
                               <h5><a href="job_listing.html">Construction</a></h5>
                                <span>(658)</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-high-tech"></span>
                            </div>
                            <div class="services-cap">
                               <h5><a href="job_listing.html">Information Technology</a></h5>
                                <span>(658)</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-real-estate"></span>
                            </div>
                            <div class="services-cap">
                               <h5><a href="job_listing.html">Real Estate</a></h5>
                                <span>(658)</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-content"></span>
                            </div>
                            <div class="services-cap">
                               <h5><a href="job_listing.html">Content Writer</a></h5>
                                <span>(658)</span>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <!-- More Btn -->
                <!-- Section Button -->
                <div class="row">
                    <div class="col-lg-12">
                        {{-- <div class="browse-btn2 text-center mt-50">
                            <a href="job_listing.html" class="border-btn2">Browse All Sectors</a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Services End -->
        <!-- Online CV Area Start -->
         {{-- <div class="online-cv cv-bg section-overly pt-90 pb-120"  data-background="{{ asset('Frontend/assets/img/gallery/cv_bg.jpg') }}">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="cv-caption text-center">
                            <p class="pera1">FEATURED TOURS Packages</p>
                            <p class="pera2"> Make a Difference with Your Online Resume!</p>
                            <a href="#" class="border-btn2 border-btn4">Upload your cv</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Online CV Area End-->
        <footer>
        <!-- Footer Start-->
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
                    <!-- <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>TANGGAPAN</h4>
                                <div class="footer-pera footer-pera2">
                                 <p>Berikan tanggapanmu tentang website kami :</p>
                             </div> -->
                             <!-- Form -->
                             <!-- <div class="footer-form" >
                                 <div id="mc_embed_signup">
                                     <form target="_blank" action="https://mail.google.com/mail/u/1/?tab=om#inbox?compose=new"
                                     method="get" class="subscribe_form relative mail_part">
                                         <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
                                         class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                                         onblur="this.placeholder = ' Email Address '">
                                         <div class="form-icon">
                                             <button type="submit" name="submit" id="newsletter-submit"
                                             class="email_icon newsletter-submit button-contactForm"><img src="assets/img/icon/form.png" alt=""></button>
                                         </div>
                                         <div class="mt-10 info"></div>
                                     </form>
                                 </div>
                             </div>
                            </div>
                        </div>
                    </div>
                </div> -->
        
    </footer>
               
                                
                                    
  

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
        </body>
        
</html>