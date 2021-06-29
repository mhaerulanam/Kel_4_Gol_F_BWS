<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Puskeswan</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <link href="{{ asset('Frontend/assets/css_dokter/css/aos.css" rel="stylesheet')}}">
    <link href="{{ asset('Frontend/assets/css_dokter/css/bootstrap.min.css" rel="stylesheet')}}">
    <link href="{{ asset('Frontend/assets/css_dokter/styles/main.css" rel="stylesheet')}}">

    <style>
      .capt {
      margin-top: 0%;
      margin-bottom: 3%;
      text-transform: uppercase;
      font-weight: bold;
      color: white;
    }
    </style>

  <base target='_blank' />
  </head>
  <body id="top">

  <div class="page-content">
      <!-- <div> -->

      <!-- Koneksi Database / Pemanggilan Data dari Tabel Dokter -->
      
      <table>
          <tbody>
           {{-- Perulangan untuk menampilkan data sebanyak yang ada di database --}}
              @foreach ($detailpuskeswan as $data_detailpuskeswan)
            <tr>

    <div class="profile-page">
      <div class="wrapper">
        <div class="page-header page-header-small" filter-color="green">
          <div class="page-header-image" data-parallax="true" style="background-image: url('{{ asset('Frontend/assets/img/gallery/s2.jpg')}}');"></div>
          <div class="container">
            <div class="content-center">
              <div class="cc-profile-image"><a href="#"><img src="gambar_puskeswan.php?id_puskeswan=<?php echo $d['id_puskeswan']; ?>" alt="Image"/></a></div>
              <div class="h2 title"><?= $d['nama_puskeswan']; ?></div>
              <p class="capt"><?= $d['alamat']; ?></p>
              <a class="genric-btn primary" href="<?= $d['maps']; ?>" terget="_blank">Cek Lokasi</a>
            </div>
          </div>
          <div class="section">
            <div class="button-container">
              <a class="fab fa-facebook" href="#" rel="tooltip" title="Follow me on Facebook"></a>
              <a class="fab fa-twitter" href="#" rel="tooltip" title="Follow me on Twitter"></a>
              <a class="fab fa-google-plus" href="#" rel="tooltip" title="Follow me on Google+"></a>
              <a class="fab fa-instagram" href="#" rel="tooltip" title="Follow me on Instagram"></a></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="section" id="about">
      <div class="container">
        <div class="card" data-aos="fade-up" data-aos-offset="10">
          <div class="row">
            <div class="col-lg-6 col-md-12">
              <div class="card-body">
                <div class="h4 mt-0 title">Jam Kerja</div>
                <p><?= nl2br(str_replace(' ', ' ', htmlspecialchars($d['jam_kerja']))); ?></p>
              </div>
            </div>
            <div class="col-lg-6 col-md-12">
              <div class="card-body">
                <div class="h4 mt-0 title">Lokasi</div>
                <div class="row">
                  <div class="col-sm-4"><strong class="text-uppercase">Alamat</strong></div>
                  <div class="col-sm-8"><?= $d['alamat']; ?></div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   

    <?php } ?>

    <div class="section" id="reference">
      <div class="container cc-reference">
          <div class="h4 mb-4 text-center title">Tenaga Medis</div>
          <div class="card" data-aos="zoom-in">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row">

                  <?php while ($d2 = mysqli_fetch_array($query_dp)) { ?>
                  <div class="col-lg-2 col-md-3 cc-reference-header">
                    <img class="rounded-circle z-depth-0" src="gambar_dokter_puskeswan.php?id_dokter=<?php echo $d2['id_dokter']; ?>" alt="Image"/>
                    <div class="h6 pt-2"><b><?= $d2['nama']; ?></b></div>
                    <p class="category"><?= $d2['jabatan']; ?></p>
                    <p><?= $d2['tempat']; ?></p>
                    <a class="genric-btn primary" href="detaildokter.php?id_dokter=<?php echo $d2['id_dokter']; ?>" >Detail</a>
                  </div>

                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>

    <div class="section" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto mr-auto">
            <div class="h4 text-center mb-4 title">Dokumentasi</div>
          </div>
        </div>
        <div class="tab-content gallery mt-5">
          <div class="tab-pane active" id="web-development">
            <div class="ml-auto mr-auto">
              <div class="row">

                <?php while ($d3 = mysqli_fetch_array($query_dokpus)) { ?>
                  <div class="col-md-6">
                    <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#">
                        <figure class="cc-effect"><img src="gambar_dokumentasi.php?id_dokumentasi=<?php echo $d3['id_dokumentasi']; ?>" alt="Image"/>
                          <figcaption>
                            <div class="h4"><?= $d3['judul']; ?></div>
                            <p><?= $d3['keterangan']; ?></p>
                          </figcaption>
                        </figure></a>
                    </div>
                  </div>
                  <?php } ?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><br><br>


    <!-- Java Script -->
    <script src="./assets/css_dokter/js/core/jquery.3.2.1.min.js"></script>
    <script src="./assets/css_dokter/js/core/popper.min.js"></script>
    <script src="./assets/css_dokter/js/core/bootstrap.min.js"></script>
    <script src="./assets/css_dokter/js/now-ui-kit.js?v=1.1.0"></script>
    <script src="./assets/css_dokter/js/aos.js"></script>
    <script src="./assets/css_dokter/scripts/main.js"></script>

    <div class="section">
    </div>
  </body>
</html>