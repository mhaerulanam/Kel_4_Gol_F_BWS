<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Daftar Dokter </title>
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
      <link rel="stylesheet" href="{{ asset('Frontend/assets/css/style3.css')}}">
<style>
.tabs {
  position: relative;
  margin: 3rem 0;
  background: #ffffff;
  height: 40rem;
}
.tabs::before,
.tabs::after {
  content: "";
  display: table;
}
.tabs::after {
  clear: both;
}
.tab {
  float: left;
}
.tab-switch {
  display: none;
}
.tab-label {
  position: relative;
  display: block;
  line-height: 2.75em;
  height: 3em;
  padding: 0 1.618em;
  background: #e8e8e8;
  /* border: 0.25rem solid #502b00; */
  color: rgb(0, 0, 0);
  cursor: pointer;
  top: 0;
  transition: all 0.25s;
}
.tab-label:hover {
  top: -0.25rem;
  transition: top 0.25s;
}
.tab-content {
  width: 100%;
  height: auto;
  position: absolute;
  z-index: 1;
  top: 2.75em;
  left: 0;
  padding: 1.618rem;
  background: #fff;
  color: #2c3e50;
  border: 0.25rem solid #502b00;
  /* border-bottom: 0.25rem solid #bdc3c7; */
  opacity: 0;
  transition: all 0.35s;
}
.tab-switch:checked + .tab-label {
  background:#502b00;
  color: #fff;
  border-bottom: 0;
  border-right: 0.125rem solid #fff;
  transition: all 0.35s;
  z-index: 1;
  top: -0.0625rem;
}
.tab-switch:checked + label + .tab-content {
  z-index: 2;
  opacity: 1;
  transition: all 0.35s;
}

.tabs-2 {
  position: relative;
  margin: 1rem 0;
  background: #ffffff;
  height: 4rem;
}

.tabs-2::before,
.tabs-2::after {
  content: "";
  display: table;
}
.tabs-2::after {
  clear: both;
}

.tab-label1 {
  position: relative;
  display: block;
  line-height: 2.75em;
  height: 3em;
  padding: 0 1.618em;
  background: #502b00;
  /* border: 0.25rem solid #502b00; */
  color: #fff;
  cursor: pointer;
  top: 0;
  transition: all 0.25s;
}

</style>
</head>

<body>
    
    
    <!-- Banner Atas Start-->
   
   <div class="slider-area ">
      <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="{{ asset('Fronentd/assets/img/gallery/s2.jpg')}}">
          <div class="container">
              <div class="row">
                  <div class="col-xl-12">
                      <div class="hero-cap text-center">
                          <h2>DAFTAR DOKTER</h2>
                      </div>
                  </div>
              </div>
          </div>
      </div>
   </div>
   <!-- Banner End -->
<section class="blog_area section-padding">
    <div class="container">
                    

    <div class="pagination-area pb-200 text-center">
                <div class="blog_right_sidebar">          
                <aside class="single_sidebar_widget search_widget">
                            <form method="POST">
                            <div class="input-group mb-3">
                                <div class="wrapper">
                                <div class="tabs-2">
                                    

                                    

                                    <div class="input-group-append">
                                        <button type="submit" name="pilih" class="genric-btn primary">CEK</button> 
                                    </div> 
                                </div>
                                </div>
                            </div>
                                <div class="input-group mb-3">
                                        <input list="nt" class="form-control" placeholder='Masukkan nama Dokter atau lokasi kecamatan Anda ...' name="nt" id="cari dokter" value=""
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Masukkan nama Dokter atau lokasi kecamatan Anda ... '">
                                            <datalist id="nt">
                                                <option value="Bondowoso" >Bondowoso</option>
                                                <option value="Binakal" >Binakal</option>
                                                <option value="Cermee" >Cermee</option>
                                                <option value="Curahdami" >Curahdami</option>
                                                <option value="Grujugan" >Grujugan</option>
                                                <option value="Jambesari" >Jambesari</option>
                                                <option value="Klabang" >Klabang</option>
                                                <option value="Maesan" >Maesan</option>
                                                <option value="Pakem" >Pakem</option>
                                                <option value="Prajekan" >Prajekan</option>
                                                <option value="Pujer" >Pujer</option>
                                                <option value="Sempol" >Sempol</option>
                                                <option value="Sukosari" >Sukosari</option>
                                                <option value="Sumberwringin" >Sumberwringin</option>
                                                <option value="Taman Krocok" >Taman Krocok</option>
                                                <option value="Tamanan" >Tamanan</option>
                                                <option value="Tapen" >Tapen</option>
                                                <option value="Tegalampel" >Tegalampel</option>
                                                <option value="Tenggarang" >Tenggarang</option>
                                                <option value="Tlogosari" >Tlogosari</option>
                                                <option value="Wonosari" >Wonosari</option>
                                                <option value="Wringin" >Wringin</option>
                                            </datalist>
                                        <div class="input-group-append">
                                            <button class="btns" type="submit" name="submit"><i class="ti-search"></i></button> 
                                        </div>
                                </div>
                                   
                            </form>
                        </aside>
                </div>
                
                            </b>
                        </h1>
                   
                </div>

    <div class="row blog">
<!-- <h1>
  <div class="animated fadeInLeft">NOS EXPERTS</div><div class="animated fadeInRight">SCIENTIFIQUES</div>
</h1> -->
                <div class="col-md-12">
                    <div id="blogCarousel" class="carousel slide" data-ride="carousel">

                        <!-- <ol class="carousel-indicators">
                            <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#blogCarousel" data-slide-to="1"></li>
                        </ol> -->
                        <!-- Carousel items -->
                        <!-- <div class="carousel-inner">
                            <div class="carousel-item active"> -->
                                <div class="row">
                                
                                    
                            <!--.row-->
                            </div>
                <!--.carousel-inner-->
                </div>
            <!--.Carousel-->
            </div>
        </div>  
    </div>
</section>

<!--Pagination Start  -->
<div class="pagination-area pb-115 text-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="single-wrap d-flex justify-content-center">
                            <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-start">

                                    
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
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