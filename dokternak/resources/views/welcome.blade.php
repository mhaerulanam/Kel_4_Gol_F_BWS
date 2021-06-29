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
    <link rel="stylesheet" href="{{ asset('Frontend/assets/css/style2.css') }}">
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
    @include('layouts.navbar');
     <!-- Preloader Start -->
     <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ asset('Frontend/assets/img/logo/logo1.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
<main>
        <div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="slider-active">
                <div class="single-slider slider-height d-flex align-items-center" data-background="{{ asset('Frontend/assets/img/gallery/s2.jpg') }}">
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
                                 <form method="POST" action="/home/cari" class="search-box">
                                    {{ csrf_field() }}
                                    <div class="input-form">
                                        <input type="text" placeholder="Masukkan Nama Dokter" name="cari_petugas" id="s_keyword" value="">
                                    </div>
                                    <div class="select-form">
                                        <div class="select-itms">
                                            <select name="kategori_kecamatan" class="form-control" id="exampleFormControlSelect1">
                                                <option value="Bondowoso" >Bondowoso</option>
                                                <option value="Binakal" >Binakal</option>
                                                <option value="Cermee">Cermee</option>
                                                <option value="Curahdami">Curahdami</option>
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
                                                <option value="Tegalampel">Tegalampel</option>
                                                <option value="Tenggarang" >Tenggarang</option>
                                                <option value="Tlogosari" >Tlogosari</option>
                                                <option value="Wonosari" >Wonosari</option>
                                                <option value="Wringin" >Wringin</option>
    
                                            </select>
                                        </div>
                                    </div>
                                    <div class="search-form">
                                    {{-- <a><button id="search" name="search" class="btn head-btn1">Cari</button></a> --}}
                                    <a><input type="submit" class="btn btn-primary mb-1" class="btn head-btn1" value="CARI"></a>
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
                                    @if (! $kode = 11)
                                        @foreach ($data['dokter'] as $data_dokter)
                                        <!-- single-job-content -->
                                        <div class="single-job-items mb-30">
                                            <div class="job-items">
                                                <div class="company-img">
                                                    <a href="job_details.html"><img src="data:image/png;base64,{{ chunk_split(base64_encode($data_dokter->foto)) }}" alt="" width="100px"></a>
                                                </div>
                                                <div class="job-tittle">
                                                    <a href="job_details.html"><h4>{{ $data_dokter->nama }}</h4></a>
                                                    <ul>
                                                        <li>{{ $data_dokter->id_jabatan }}</li>
                                                        <li><i class="fas fa-map-marker-alt"></i>{{ $data_dokter->tempat }}</li>
                                                        <li>{{ $data_dokter->telpon }}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="items-link f-right">
                                                <a href="job_details.html">Detail</a>
                                                {{-- <span>7 hours ago</span> --}}
                                            </div>
                                        </div>
                                        @endforeach
                                    @endif
                                    @foreach ($data['dokter'] as $data_dokter)
                                    <!-- single-job-content -->
                                    <div class="single-job-items mb-30">
                                        <div class="job-items">
                                            <div class="company-img">
                                                <a href="job_details.html"><img class="card-img rounded-0" src="/data/data_dokter/{{ $data_dokter->foto }}" alt=""  width="100px"></a>
                                            </div>
                                            <div class="job-tittle">
                                                <a href="job_details.html"><h4>{{ $data_dokter->nama_dokter }}</h4></a>
                                                <ul>
                                                    <li>{{ $data_dokter->id_jabatan }}</li>
                                                    <li><i class="fas fa-map-marker-alt"></i>{{ $data_dokter->tempat }}</li>
                                                    <li>{{ $data_dokter->telpon }}</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="items-link f-right">
                                            <a href="job_details.html">Detail</a>
                                            {{-- <span>7 hours ago</span> --}}
                                        </div>
                                    </div>
                                    @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    
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
                            <table>
                                <tbody>         
                                <tr>
                                    @foreach ($data['artikel'] as $data_artikel)                           
                                        <td>
                                            <div class="col-xl-10 col-lg-10 col-md-10">
                                                    <div class="home-blog-single mb-30">
                                                        <div class="blog-img-cap">
                                                            <div class="blog-img">  
                                                                <!-- <img src="assets/img/blog/home-blog1.jpg" alt=""> -->
                                                                <!-- Baris img src dibawah ini untuk memanggil gambar sesuai syntax di gambar.php -->
                                                                <img class="card-img rounded-0" src="/data/data_artikel/{{ $data_artikel->gambar }}"alt="post" width="100px"/>
                                                                <div class="blog-date text-center">
                                                                    <span>{{ $data_artikel->tanggal }}</span>
                                                                    <p>Kategori :{{ $data_artikel->id_ktg }}</p>
                                                                </div>
                                                            </div>
                                                            <div class="blog-cap">
                                                                <p>{{ $data_artikel->nama_penulis}}</p>
                                                                <h3>{{ $data_artikel->judul }}<a href="detailartikel.php?id_artikel={{ $data_artikel->judul }}"></a></h3>
                                                                <a href="#" class="more-btn">Read more »</a>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                </div>
                                            </div>
                                        </td>
                                @endforeach
                                </tr>
                                </tbody>
                            </table> 
                        <!-- Blog Area End -->
                        <!--Pagination Start  -->
                        </div>
            <section>
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
                        @foreach ($data['tutorial'] as $data_tutorial)
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-services text-center mb-30">
                                <div class="services-ion">
                                    <span class=""><img class="card-img rounded-0" src="/data/data_tutorial/{{ $data_tutorial->icon }}" width="50px"></span>
                                </div>
                                <div class="services-cap">
                                   <h5><a href="job_listing.html">{{ $data_tutorial->judul_tutorial }}</a></h5>
                                   <div class="items-link f-right">
                                    <a href="/tutorial/{{ $data_tutorial->id_tutorial }}/detail/">Detail</a>
                                   </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                </div>
            </div>
            </div></section>
                        </div></section>
                        
            @include('frontend/layouts.footer');

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