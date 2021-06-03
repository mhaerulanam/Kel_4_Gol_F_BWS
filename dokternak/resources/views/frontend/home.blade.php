{{-- @extends('frontend/layouts.template') --}}
@extends('layouts.app')
@section('content')

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

                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <h5>Artikel Terkini</h5>
                            <h2>TIPS DAN TRIK </h2>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="home-blog-single mb-30">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                {{-- <img src="Frontend/assets/img/gallery/k1.jpg" alt="">  --}}
                                <!-- Baris img src dibawah ini untuk memanggil gambar sesuai syntax di gambar.php -->
                              <img src="Frontend/assets/img/gallery/k1.jpg" alt="image" height="200" width="320">
                                <div class="blog-date text-center">
                                    <span>02-12-2020</span>
                                    <p>Kategori : kucing</p>
                                </div> 
                            </div>
                            <div class="blog-cap">
                                <p>|   admin</p>
                                <h3>Cara Merawat Kucing</a></h3>
                                <a href="Jika anda memiliki kucing yang hampir mendekati masa persalinan, sangat penting bagi anda untuk mempersiapkan kebutuhan sederhana si kucing." class="more-btn">Read more »</a>
                            </div>
                        </div>
                    </div> 
                    </div>
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

        @endsection