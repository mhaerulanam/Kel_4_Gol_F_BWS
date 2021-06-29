<!doctype html>
<html class="no-js" lang="zxx">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dokternak.id - Kritik dan Saran</title>
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
  
   <!-- CSS here -->
   <link rel="stylesheet" href="<?php echo e(asset('Frontend/assets/css/bootstrap.min.css')); ?>">
      <link rel="stylesheet" href="<?php echo e('Frontend/assets/css/bootstrap.min.css'); ?>">
      <link rel="stylesheet" href="<?php echo e('Frontendassets/css/owl.carousel.min.css'); ?>">
      <link rel="stylesheet" href="<?php echo e('Frontendassets/css/slicknav.css'); ?>">
      <link rel="stylesheet" href="<?php echo e('Frontendassets/css/price_rangs.css'); ?>">
      <link rel="stylesheet" href="<?php echo e('Frontendassets/css/animate.min.css'); ?>">
      <link rel="stylesheet" href="<?php echo e('Frontendassets/css/magnific-popup.css'); ?>">
      <link rel="stylesheet" href="<?php echo e('Frontendassets/css/fontawesome-all.min.css'); ?>">
      <link rel="stylesheet" href="<?php echo e('Frontendassets/css/themify-icons.css'); ?>">
      <link rel="stylesheet" href="<?php echo e('Frontendassets/css/slick.css'); ?>">
      <link rel="stylesheet" href="<?php echo e('Frontendassets/css/nice-select.css'); ?>">
      <link rel="stylesheet" href="<?php echo e('Frontendassets/css/style.css'); ?>">
      <link rel="stylesheet" href="<?php echo e('Frontendassets/css/responsive.css'); ?>">
</head>

<body>
   <!-- Banner-->
   <div class="slider-area ">
      <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="<?php echo e(asset('Frontend/assets/img/gallery/s2.jpg')); ?>">
          <div class="container">
              <div class="row">
                  <div class="col-xl-12">
                      <div class="hero-cap text-center">
                          <h2>Kritik dan Saran</h2>
                      </div>
                  </div>
              </div>
          </div>
      </div>
   </div>
   <!-- Banner End-->
   <!--================Kritik saran =================-->
   <section class="blog_area single-post-area section-padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 posts-list">
               

            <!-- Pesan Konfirmasi -->
            <?php
                if (isset($_GET['pesan'])){
                    $pesan = $_GET['pesan'];
                        if ($pesan == 'berhasil') {
            ?>
                        <div class="alert alert-success">
                            <center>Terkirim. Terima kasih atas saran dan kritik anda!</center>
                        </div>
            <?php
                        }elseif($pesan == 'gagal'){
            ?>
                        <div class="alert alert-danger">
                            <center>Oops! Ada kesalahan, saran dan kritik anda gagal terkirim.</center>
                        </div>
            <?php
                        }
                }
            ?>
            <!-- Akhir dari pesan konfirmasi -->

               <div class="comment-form">
                   <h4>Hai, apakah ada sesuatu yang menyulitkan anda di website ini? Mungkin kami bisa membantu anda.</h4>
                  <p>Silahkan tulis kritik / saran anda disini.</p>
                  <form class="form-contact comment_form" action="kritiksaran_aksi.php" id="commentForm" method="POST">
                     <div class="row">
                        <div class="col-12">
                           <div class="form-group">
                               <input type="hidden" name="tanggal" value="<?php echo date("d-m-Y"); ?>">
                              <textarea class="form-control w-100" name="komentar" id="komentar" cols="30" rows="9"
                                 placeholder="Tuliskan komentar anda disini"></textarea>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <input class="form-control" name="nama" id="nama" type="text" placeholder="Nama">
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <input class="form-control" name="email_hp" id="email_hp" type="text" placeholder="Email / No.HP">
                           </div>
                        </div>
                        <div class="col-12">
                           <div class="form-group">
                              <input class="form-control" name="pekerjaan" id="pekerjaan" type="text" placeholder="Pekerjaan">
                           </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <button type="submit" class="button button-contactForm btn_1 boxed-btn">Kirim</button>
                     </div>
                  </form>
               </div>
            </div>
            <!-- Akhir dari kritik dan saran -->
              <!-- All JS Custom Plugins Link Here here -->
        <script src="<?php echo e(asset('Petugas/assets/js/vendor/modernizr-3.5.0.min.js')); ?>"></script>
        <!-- Jquery, Popper, Bootstrap -->
        <script src="<?php echo e(asset('Petugas/assets/js/vendor/jquery-1.12.4.min.js')); ?>"></script>
          <script src="<?php echo e(asset('Petugas/assets/js/popper.min.js')); ?>"></script>
          <script src="<?php echo e(asset('Petugas/assets/js/bootstrap.min.js')); ?>"></script>
         <!-- Jquery Mobile Menu -->
          <script src="<?php echo e(asset('Petugas/assets/js/jquery.slicknav.min.js')); ?>"></script>
  
        <!-- Jquery Slick , Owl-Carousel Plugins -->
          <script src="<?php echo e(asset('Petugas/assets/js/owl.carousel.min.js')); ?>"></script>
          <script src="<?php echo e(asset('Petugas/assets/js/slick.min.js')); ?>"></script>
          <script src="<?php echo e(asset('Petugas/assets/js/price_rangs.js')); ?>"></script>
          
        <!-- One Page, Animated-HeadLin -->
          <script src="<?php echo e(asset('Petugas/assets/js/wow.min.js')); ?>"></script>
        <script src="<?php echo e(asset('Petugas/assets/js/animated.headline.js')); ?>"></script>
          <script src="<?php echo e(asset('Petugas/assets/js/jquery.magnific-popup.js')); ?>"></script>
  
        <!-- Scrollup, nice-select, sticky -->
          <script src="<?php echo e(asset('Petugas/assets/js/jquery.scrollUp.min.js')); ?>"></script>
          <script src="<?php echo e(asset('Petugas/assets/js/jquery.nice-select.min.js')); ?>"></script>
        <script src="<?php echo e(asset('Petugas/assets/js/jquery.sticky.js')); ?>"></script>
          
          <!-- contact js -->
          <script src="<?php echo e(asset('Petugas/assets/js/contact.js')); ?>"></script>
          <script src="<?php echo e(asset('Petugas/assets/js/jquery.form.js')); ?>"></script>
          <script src="<?php echo e(asset('Petugas/assets/js/jquery.validate.min.js')); ?>"></script>
          <script src="<?php echo e(asset('Petugas/assets/js/mail-script.js')); ?>"></script>
          <script src="<?php echo e(asset('Petugas/assets/js/jquery.ajaxchimp.min.js')); ?>"></script>
          
        <!-- Jquery Plugins, main Jquery -->	
          <script src="<?php echo e(asset('Petugas/assets/js/plugins.js')); ?>"></script>
          <script src="<?php echo e(asset('Petugas/assets/js/main.js')); ?>"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\Kel_4_Gol_F_BWS\UJI COBA\dokternak\resources\views/frontend/kritikdansaran.blade.php ENDPATH**/ ?>