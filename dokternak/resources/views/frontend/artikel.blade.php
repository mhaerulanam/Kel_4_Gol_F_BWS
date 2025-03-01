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
    @include('frontend/layouts.navbar');

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
 <!--================Blog Area =================-->
 <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                    <table>
                        <tbody>
                            {{-- Perulangan untuk menampilkan data sebanyak yang ada di database --}}
                            @foreach ($artikel as $data_artikel)
                            <tr>
                            <article class="blog_item">
                                    <div class="blog_item_img">
                                        {{-- //Code untuk menampilkan gambar yang berbentuk blob --}}
                                        <img class="card-img rounded-0" src="data:image/png;base64,{{ chunk_split(base64_encode($data_artikel->gambar)) }}" alt="gambar artikel">
                                        <a href="#" class="blog_item_date">
                                            <h3>{{ $data_artikel->nama_penulis }}</h3>
                                        </a>
                                    </div>
                                    <div class="blog_details">
                                        <a class="d-inline-block" href="single-blog.html">
                                            <h2><a href="detailartikel.php?id_artikel=id">{{ $data_artikel->judul }}</a></h2>
                                        </a>
                                        {{-- Code untuk memotong text menggunakan Str limit --}}
                                        <p>{{\Illuminate\Support\Str::limit($data_artikel->isi, 250)}}  <a href="detailartikel.php?id_artikel=id isi" class="more-btn">  <strong> Read more » </strong></a></p>
                                        <ul class="blog-info-link">
                                            <li><a>{{ $data_artikel->id_ktg }}</a></li>
                                            <li><a>{{ $data_artikel->tanggal }}</a></li>
                                        </ul>
                                    </div>
                            </article>
                            </tr>
                            @endforeach
                            </tbody>
                        </table> 
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <div class="btn_tulis">
                            <div class="items-link f-center">
                                <a href="tulis_artikel.php" class="genric-btn primary">++ TULIS ARTIKEL</a>
                            </div>
                        </div>
                        <aside class="single_sidebar_widget search_widget">
                            <form action="#">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder='Search Keyword'
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Search Keyword'">
                                        <div class="input-group-append">
                                            <button class="btns" type="button"><i class="ti-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <!-- <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                    type="submit">Search</button> -->
                            </form>
                        </aside>

                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Category</h4>
                            <ul class="list cat-list">
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Kucing</p>
                                        <p>(3)</p>
                                    </a>
                                </li>   
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Kambing</p>
                                        <p>(2)</p>
                                    </a>
                                </li> 
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Ikan</p>
                                        <p>(2)</p>
                                    </a>
                                </li>                           
                            </ul>
                        </aside>

                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Recent Post</h3>
                            @foreach ($artikel as $data_artikel)                            
                            <div class="media post_item">
                                <img src="data:image/png;base64,{{ chunk_split(base64_encode($data_artikel->gambar)) }}" alt="post" width="100px">
                                <div class="media-body">
                                    <a href="single-blog.html">
                                        <h3>{{ $data_artikel->judul }}</h3>
                                    </a>
                                    <p>{{ $data_artikel->tanggal }}</p>
                                </div>
                            </div>
                            @endforeach
                        </aside>
                    </div>
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
                {{ $artikel->links()}}
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