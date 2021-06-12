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
    @include('frontend/layouts.navbar');
    
    <!-- Banner Atas Start-->
   
   <div class="slider-area ">
      <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="{{ asset('Frontend/assets/img/gallery/s2.jpg') }}">
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
                                        <div class="tab">
                                            <input type="radio" name="jabatan" id="tab-param" class="tab-switch" value="J01" selected>
                                            <label for="tab-param" class="tab-label1">Dokter</label>
                                        </div>
                                        <div class="tab">
                                            <input type="radio" name="jabatan" id="tab-dok" class="tab-switch" value="J02" selected>
                                            <label for="tab-dok" class="tab-label">Paramedis</label>
                                        </div>
                                        <div class="tab">
                                            <input type="radio" name="jabatan" id="tab-ib" class="tab-switch" value="J03" selected>
                                            <label for="tab-ib" class="tab-label">Petugas IB</label>
                                        </div>

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
                                            {{-- <datalist id="nt">
                                                <option value="Bondowoso" <?php if ($nt=="Bondowoso"){ echo "selected"; } ?>>Bondowoso</option>
                                                <option value="Binakal" <?php if ($nt=="Binakal"){ echo "selected"; } ?>>Binakal</option>
                                                <option value="Cermee" <?php if ($nt=="Cermee"){ echo "selected"; } ?>>Cermee</option>
                                                <option value="Curahdami" <?php if ($nt=="Curahdami"){ echo "selected"; } ?>>Curahdami</option>
                                                <option value="Grujugan" <?php if ($nt=="Grujugan"){ echo "selected"; } ?>>Grujugan</option>
                                                <option value="Jambesari" <?php if ($nt=="Jambesari"){ echo "selected"; } ?>>Jambesari</option>
                                                <option value="Klabang" <?php if ($nt=="Klabang"){ echo "selected"; } ?>>Klabang</option>
                                                <option value="Maesan" <?php if ($nt=="Maesan"){ echo "selected"; } ?>>Maesan</option>
                                                <option value="Pakem" <?php if ($nt=="Pakem"){ echo "selected"; } ?>>Pakem</option>
                                                <option value="Prajekan" <?php if ($nt=="Prajekan"){ echo "selected"; } ?>>Prajekan</option>
                                                <option value="Pujer" <?php if ($nt=="Pujer"){ echo "selected"; } ?>>Pujer</option>
                                                <option value="Sempol" <?php if ($nt=="Sempol"){ echo "selected"; } ?>>Sempol</option>
                                                <option value="Sukosari" <?php if ($nt=="Sukosari"){ echo "selected"; } ?>>Sukosari</option>
                                                <option value="Sumberwringin" <?php if ($nt=="Sumberwringin"){ echo "selected"; } ?>>Sumberwringin</option>
                                                <option value="Taman Krocok" <?php if ($nt=="Taman Krocok"){ echo "selected"; } ?>>Taman Krocok</option>
                                                <option value="Tamanan" <?php if ($nt=="Tamanan"){ echo "selected"; } ?>>Tamanan</option>
                                                <option value="Tapen" <?php if ($nt=="Tapen"){ echo "selected"; } ?>>Tapen</option>
                                                <option value="Tegalampel" <?php if ($nt=="Tegalampel"){ echo "selected"; } ?>>Tegalampel</option>
                                                <option value="Tenggarang" <?php if ($nt=="Tenggarang"){ echo "selected"; } ?>>Tenggarang</option>
                                                <option value="Tlogosari" <?php if ($nt=="Tlogosari"){ echo "selected"; } ?>>Tlogosari</option>
                                                <option value="Wonosari" <?php if ($nt=="Wonosari"){ echo "selected"; } ?>>Wonosari</option>
                                                <option value="Wringin" <?php if ($nt=="Wringin"){ echo "selected"; } ?>>Wringin</option>
                                            </datalist> --}}
                                        <div class="input-group-append">
                                            <button class="btns" type="submit" name="submit"><i class="ti-search"></i></button> 
                                        </div>
                                </div>
                                   
                            </form>
                        </aside>
                </div>
                <?php
                    if(isset($_POST['pilih'])){ ?>
                        <h1>
                            <b>
                                <?php 
                                $kat = $_POST['jabatan'];
                                $ambilDataa=mysqli_query($koneksi, "SELECT * FROM jabatan WHERE id_jabatan = '$kat'");
                                $dta = mysqli_fetch_array($ambilDataa);
                                echo $dta['jabatan']; ?>
                            </b>
                        </h1>
                    <?php
                    }
                ?>
                </div>   
                            <div class="row">    
                <table>
                    <tbody>
                               {{-- Perulangan untuk menampilkan data sebanyak yang ada di database --}}
                          @foreach ($dokter as $data_dokter)
                          <tr>
                          <article class="blog_item">
                                            <div class="col-md-10">
                                                <div class="our-team">
                                                <div class="pic">
                                                    <img class="card-img rounded-0" src="data:image/png;base64,{{ chunk_split(base64_encode($data_dokter->foto)) }}" alt="gambar dokter" width="300px">
                                                </div>
                                                <div class="blog_details">
                                                    {{-- Code untuk memotong text menggunakan Str limit --}}
                                                    <div class="team-content">
                                                        <h4 class="title">{{ $data_dokter->nama }}</h4>
                                                        <span class="post">{{ $data_dokter->id_jabatan }} </span>
                                                        <span class="post">{{ $data_dokter->tempat }}</span>
                                                        <p><span class="post">{{ $data_dokter->telpon }}</span></p><br>
                                                    {{-- <ul class="blog-info-link">
                                                        <li><a>{{ $data_dokter->id_jabatan }}</a></li>
                                                        <li><a>{{ $data_dokter->tempat }}</a></li>
                                                        <li><a>{{ $data_dokter->telpon }}</a></li>
                                                    </ul> --}}
                                                    <div class="services-cap">
                                                    <a href="/dokter/{{ $data_dokter->id_dokter }}/detail/" class="genric-btn primary radius">Detail</a>
                                                    </div>
                                                    {{-- <ul class="social"> 
                                                        <li>
                                                        
                                                        </li>
                                                    </ul> --}}
                                                </div>
                                                
                                          </article>
                                          </tr>
                                          @endforeach
                                          </tbody>
                                      </table> 
                                                
                                                </div>
                                            </div>
                                            
                                </div>
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
                    <!-- <div class="col-xl-10"> -->
                        <div class="single-wrap d-flex justify-content-center">
                            <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-start">     
                            {{-- //pagination use bootstrap --}}
                            {{ $dokter->links()}}
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 
   
  <section>
    @include('frontend/layouts.footer');
</section>

  <!-- JS here -->
	
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