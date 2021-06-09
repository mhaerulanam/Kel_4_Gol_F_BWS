@include('petugas/layouts.navbar');

@extends('layouts.petugas')
@section('content')

<main>

<div class="slider-area ">
        <div class="slider-active">
        </div>
<section>
<div class="slider-area ">
      <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="{{ asset('Petugas/assets/img/gallery/s2.jpg') }}">
          <div class="container">
              <div class="row">
                  <div class="col-xl-12">
                      <div class="hero-cap text-center">
                            <h2>Hallo!</h2>
                            <h2> Petugas </h2>
                      </div>
                  </div>
              </div>
          </div>
      </div>
   </div>
    <div class="section-tittle text-center">
    <hr><br><br><h2>Akun Profile</h2>
    </div>
<div class="container emp-profile">
            <form method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="#" alt=""/>
                            <div class="file btn btn-lg btn-primary">
                                <input type="file" name="foto" id="foto">
                                Ubah Foto Profil
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h4><b>
                                     Nama Dokter</b>
                                    </h4>
                                    <h6>
                                    Jabatan
                                    </h6>
                                    <p>Tempat</p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tsab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Data Pribadi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Dokumen Berkas</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <a href="editbiodatadokter.php" class="genric-btn primary">Edit Profile</a> <br><br><br>
                        <!-- <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/> -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                       <div class="profile-work">
                                <center>
                                <input type="submit" name="sfoto" class="genric-btn second" value="Simpan"/> <br><br><br>
                                <label><b>Username : </b></label><br>
                                <label><b>Password : </b></label>
                                </center>
                         </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="container tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nama :</label>
                                            </div>
                                    
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Jenis Kelamin :</label>
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>No. Handphone/Whatsapp :</label>
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Kecamatan (Tempat Dinas/Praktek) :</label>
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Jadwal Kerja :</label>
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Alamat :</label>
                                            </div>
                                            
                                        </div>
                            </div>
                            <div class="container tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Sertifikasi :</label>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="profile-img">
                                                <img src="#" alt=""/>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>
        </section>
        
        <section>
        <section>
        <!-- Tips dan Trik Start -->
        <div class="home-blog-area blog-h-padding">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <span>Artikel Terkini</span>
                            <h2>TIPS DAN TRIK</h2>
                        </div>
                    </div>
                </div>
                <div class="row"> 


                <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="home-blog-single mb-30">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                   
                                    <img src="#"/>
                                    <div class="blog-date text-center">
                                        <p>Kategori : </p>
                                    </div>
                                </div>
                                <div class="blog-cap">
                                    <p>|  </p>
                                    <h3>Read more »</h3>
                                </div>
                            </div>
                        </div> 
                    </div> 
                </div>
        <!-- Blog Area End -->

    
        </section>

    

        <!-- All JS Custom Plugins Link Here here -->
        <script src="{{ asset('Petugas/assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="{{ asset('Petugas/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
        <script src="{{ asset('Petugas/assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('Petugas/assets/js/bootstrap.min.js') }}"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="{{ asset('Petugas/assets/js/jquery.slicknav.min.js') }}"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="{{ asset('Petugas/assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('Petugas/assets/js/slick.min.js') }}"></script>
        <script src="{{ asset('Petugas/assets/js/price_rangs.js') }}"></script>
        
		<!-- One Page, Animated-HeadLin -->
        <script src="{{ asset('Petugas/assets/js/wow.min.js') }}"></script>
		<script src="{{ asset('Petugas/assets/js/animated.headline.js') }}"></script>
        <script src="{{ asset('Petugas/assets/js/jquery.magnific-popup.js') }}"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="{{ asset('Petugas/assets/js/jquery.scrollUp.min.js') }}"></script>
        <script src="{{ asset('Petugas/assets/js/jquery.nice-select.min.js') }}"></script>
		<script src="{{ asset('Petugas/assets/js/jquery.sticky.js') }}"></script>
        
        <!-- contact js -->
        <script src="{{ asset('Petugas/assets/js/contact.js') }}"></script>
        <script src="{{ asset('Petugas/assets/js/jquery.form.js') }}"></script>
        <script src="{{ asset('Petugas/assets/js/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('Petugas/assets/js/mail-script.js') }}"></script>
        <script src="{{ asset('Petugas/assets/js/jquery.ajaxchimp.min.js') }}"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="{{ asset('Petugas/assets/js/plugins.js') }}"></script>
        <script src="{{ asset('Petugas/assets/js/main.js') }}"></script>
</body>
</html>