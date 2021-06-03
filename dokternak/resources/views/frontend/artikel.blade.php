<!doctype html>
<html class="no-js" lang="zxx">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Artikel </title>
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
  
   
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
</head>

<body>
    
    
    <!-- Banner Atas Start-->
   <div class="slider-area ">
      <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="{{ asset('Frontend/assets/img/gallery/s2.jpg') }}">
          <div class="container">
              <div class="row">
                  <div class="col-xl-12">
                      <div class="hero-cap text-center">
                          <h2>DAFTAR ARTIKEL</h2>
                      </div>
                  </div>
              </div>
          </div>
      </div>
   </div>

   <!-- Banner End -->
<section class="blog_area section-padding">
        <div class="container">
            <div class="row"> 
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                    <form method="POST">
                    <div class="btn_tulis">
                            <div class="items-link f-center">
                                <a href="tulis_artikel.php" class="genric-btn primary">++ TULIS ARTIKEL</a>
                                </div>
                            </div>
                                       
                        <aside class="single_sidebar_widget search_widget">
                                <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder='cari artikel' name="nt" id="cari artikel" value=""
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'search_keyword'">
                                        <div class="input-group-append">
                                            <button class="btns" type="submit" name="submit"><i class="ti-search"></i></button>
                                        </div>
                                   </div>
                            </form>
                        </aside>
                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">KATEGORI</h4>
                            <ul class="list cat-list">
                            <li>
                                    <a href="#" class="d-flex">
                                        <p>Resaurant food</p>
                                        <p>(37)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Travel news</p>
                                        <p>(10)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Modern technology</p>
                                        <p>(03)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Product</p>
                                        <p>(11)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Inspiration</p>
                                        <p>21</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Health Care (21)</p>
                                        <p>09</p>
                                    </a>
                                </li>
                            </ul>
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
		
		<!-- Scrollup, nice-select, sticky -->
        <script src="./assets/js/jquery.scrollUp.min.js"></script>
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

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