<!DOCTYPE html>
<html lang="zxx">

<head>
  <title>Beranda</title>
  <link rel="icon" href="<?php echo base_url(); ?>assets/img/background_footer.jpg">

  <!--meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="Organic Store Responsive web template"
  />
  <script>
    addEventListener("load", function () {
      setTimeout(hideURLbar, 0);
    }, false);


    function hideURLbar() {
      window.scrollTo(0, 1);
    }
  </script>
  <!--booststrap-->
  <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
  <!--//booststrap end-->
  <!-- font-awesome icons -->
  <link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet">
  <!-- //font-awesome icons -->
  <!--stylesheets-->
  <link href="<?php echo base_url(); ?>assets/css/style.css" rel='stylesheet' type='text/css' media="all">
  <!--//stylesheets-->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Patrick+Hand" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
</head>

<body>
  <!-- //banner -->
  <div class="banner-left-side" id="home">
    <!-- header -->
    <div class="headder-top">
      <!-- nav -->
      <nav>
        <div id="logo">
          <h1><a href="<?php echo base_url(); ?>index.php/brainy_les/home">BRAINY</a></h1>
        </div>
        <ul class="menu mt-2">
          <li class="active"><a href="<?php echo base_url(); ?>index.php/brainy_les/home">Beranda</a></li>
          <li><a href="<?php echo base_url(); ?>index.php/brainy_les/cariguru">Cari Guru</a></li>
          <li><a href="<?php echo base_url(); ?>index.php/brainy_les/about_us">Tentang Kami</a></li>
          <li><a href="<?php echo base_url(); ?>index.php/brainy_les/bantuan">Bantuan</a></li>
          <li class="dropdown">
            <button class="btn dropdown-toggle button-user" type="button" data-toggle="dropdown"><?php echo $this->session->userdata('nama'); ?>
            <span class="caret"></span></button>
            <ul class="dropdown-menu dropdown-profile" style="">
              <li><a href="<?php echo base_url(); ?>index.php/c_murid/dashboard"><i class="fa fa-user" aria-hidden="true"></i> Dashboard</a></li>
              <div class="dropdown-divider"></div>
              <li><a href="<?php echo base_url(); ?>index.php/brainy_les/home"><i class="fa fa-power-off" aria-hidden="true"></i>Logout</a></li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- //nav -->
    </div>
    <!-- //header -->
    <!-- banner -->
    <div class="main-banner text-center">
      <div class="container">
        <div class="banner-right-txt">
          <h5 class="mb-sm-3 mb-2">Tingkatkan Prestasimu dan Buat Belajarmu Jadi Menyenangkan Hanya di ..</h5>
          <h4>Brainy</h4>
        </div>
        <div class="slide-info-txt">
          <p>Tempat Pencarian dan Pemesanan Guru Les Privat Terbaik. Terdapat Puluhan Guru yang Dapat Membantu Anda Dalam menyelesaikan Tugas-Tugas Akademik Anda.</p>
        </div>
      </div>
    </div>
  </div>
  <!-- //banner -->
  <!-- about us -->
  <section class="store-info py-lg-4 py-md-4 py-sm-3 py-3">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
      <div class="row">
        <div class="col-lg-7 store-details">
          <h4 class="mb-3">About Us</h4>
          <h6 class="mb-2">--------------------------</h6>
          <p>BRAINY merupakan sistem untuk melakukan pencarian dan pemesanan Guru Les Privat. BRAINY akan membantu anda dalam menemukan Guru Les Privat yang sesuai dengan pilihan anda. BRAINY dapat digunakan oleh pelajar mulai dari SD, SMP dan SMA.</p>
          <div class="view-buttn mt-md-4 mt-3">
            <a href="#blog">Read More</a>
          </div>
        </div>

        <div class="col-lg-5 store-image-right">
          <img src="<?php echo base_url(); ?>assets/img/belajar dengan guru.jpg" alt="" class="img-fluid">
        </div>
      </div>
    </div>
  </section>
  <!--//about us -->
  <!-- service -->
  <section class="service py-lg-4 py-md-4 py-sm-3 py-3" id="service">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
      <h3 class="title text-center mb-2">Pelayanan</h3>
      <div class="title-w3ls-text text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
        <p>Mengapa harus menggunakan Brainy ?</p>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6 ser-icon text-center my-3">
          <div class="grid-wthree-service">
            <img src="<?php echo base_url(); ?>assets/img/service2.png" alt="news image" class="img-fluid">
            <div class="ser-text-wthree mt-3">
              <h4>Pelayanan Terbaik</h4>
              <p class="mt-2">Brainy memiliki pelayanan yang sesuai dengan kebutuhan anda.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 ser-icon text-center my-3">
          <div class="grid-wthree-service">
            <img src="<?php echo base_url(); ?>assets/img/fast2.jpg" alt="news image" class="img-fluid">
            <div class="ser-text-wthree mt-3">
              <h4>Cepat</h4>
              <p class="mt-2">Dapat menemukan Guru Les Privat dengan Cepat.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 ser-icon text-center my-3">
          <div class="grid-wthree-service">
            <img src="<?php echo base_url(); ?>assets/img/easy.jpg" alt="news image" class="img-fluid">
            <div class="ser-text-wthree mt-3">
              <h4>Mudah</h4>
              <p class="mt-2">Sangat mudah dalam menemukan Guru Les Privat</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--//service -->
  <!-- how to order -->
  <section class="veg-info py-lg-4 py-md-4 py-sm-3 py-3">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
      <div class="row">
        <div class="col-lg-7">
          <img src="<?php echo base_url(); ?>assets/img/HowToOrder.jpg" alt="news image" class="img-fluid">
        </div>
        <div class="col-lg-5 veg-list-text">
          <div class="row mb-2">
            <div class="py-lg-2 py-1 w3three-veg-org">
              <h5 class="my-2">1. Pilih Menu Cari Guru</h5>
              <p style="">Pada menu "Cari Guru" sistem akan menampilkan form yang digunakan untuk mencari guru. Isi form tersebut sesuai dengan apa yang anda cari. Pastikan anda mengisi semua form. Kemudian Klik Cari</p>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-lg-7 col-md-7 col-sm-7 col-7 text-left py-2 py-1 w3three-veg-org">
              <h5 class="my-2">2. Memilih Guru</h5>
              <p>Setelah Klik Cari akan menampilkan halaman rekomendasi guru les privat. Lalu Pilih Guru Les Privat pilihan anda.</p>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-lg-7 col-md-7 col-sm-7 col-7 text-left py-2 py-1 w3three-veg-org">
              <h5 class="my-2">3. Kirim Permintaan Mengajar</h5>
              <p>Selanjutnya isi form permintaan mengajar dengan jelas dan benar. Kemudian Pilih Kirim.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--//vegetable-info -->
  <!-- gallery -->
  <section class="gallery py-lg-4 py-md-3 py-sm-3 py-3" id="gallery">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
      <h3 class="title text-center mb-2">Gallery </h3>
      <div class="row gallery-info">
        <div class="col-lg-4 col-md-6 col-sm-6 gallery-img-grid my-3">
          <div class="gallery-grids">
            <a href="#gal1">
              <img src="<?php echo base_url(); ?>assets/img/galery1.jpg" alt="news image" class="img-fluid">
            </a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 gallery-img-grid my-3">
          <div class="gallery-grids">
            <a href="#gal2">
              <img src="<?php echo base_url(); ?>assets/img/galery2.jpg" alt="news image" class="img-fluid">
            </a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 gallery-img-grid my-3">
          <div class="gallery-grids">
            <a href="#gal3">
              <img src="<?php echo base_url(); ?>assets/img/galery3.jpg" alt="news image" class="img-fluid">
            </a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 gallery-img-grid my-3">
          <div class="gallery-grids">
            <a href="#gal4">
              <img src="<?php echo base_url(); ?>assets/img/galery4.jpg" alt="news image" class="img-fluid">
            </a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 gallery-img-grid my-3">
          <div class="gallery-grids">
            <a href="#gal5">
              <img src="<?php echo base_url(); ?>assets/img/galery5.jpg" alt="news image" class="img-fluid">
            </a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 gallery-img-grid my-3">
          <div class="gallery-grids">
            <a href="#gal6">
              <img src="<?php echo base_url(); ?>assets/img/galery6.jpg" alt="news image" class="img-fluid">
            </a>
          </div>
        </div>
      </div>
      <!-- popup-->
      <div id="gal1" class="popup-effect">
        <div class="popup">
          <img src="<?php echo base_url(); ?>assets/images/g1.jpg" alt="Popup Image" class="img-fluid">
          <a class="close" href="#gallery">×</a>
        </div>
      </div>
      <!-- //popup -->
      <!-- popup-->
      <div id="gal2" class="popup-effect">
        <div class="popup">
          <img src="<?php echo base_url(); ?>assets/images/bb2.jpg" alt="Popup Image" class="img-fluid">
          <a class="close" href="#gallery">×</a>
        </div>
      </div>
      <!-- //popup -->
      <!-- popup-->
      <div id="gal3" class="popup-effect">
        <div class="popup">
          <img src="<?php echo base_url(); ?>assets/images/bb3.jpg" alt="Popup Image" class="img-fluid">
          <a class="close" href="#gallery">×</a>
        </div>
      </div>
      <!-- //popup -->
      <!-- popup-->
      <div id="gal4" class="popup-effect">
        <div class="popup">
          <img src="<?php echo base_url(); ?>assets/images/g2.jpg" alt="Popup Image" class="img-fluid">
          <a class="close" href="#gallery">×</a>
        </div>
      </div>
      <!-- //popup -->
      <!-- popup-->
      <div id="gal5" class="popup-effect">
        <div class="popup">
          <img src="<?php echo base_url(); ?>assets/images/g3.jpg" alt="Popup Image" class="img-fluid">
          <a class="close" href="#gallery">×</a>
        </div>
      </div>
      <!-- //popup -->
      <!-- popup-->
      <div id="gal6" class="popup-effect">
        <div class="popup">
          <img src="<?php echo base_url(); ?>assets/images/g4.jpg" alt="Popup Image" class="img-fluid">
          <a class="close" href="#gallery">×</a>
        </div>
      </div>
      <!-- //popup -->
    </div>
  </section>
  <!--//gallery -->
  <!-- contact -->
  <section class="contact py-lg-4 py-md-4 py-sm-3 py-3" id="contact">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
      <h3 class="title text-center mb-2">Kirim Pesanmu</h3>
      <div class="contact-form">
        <form action="#" method="post">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 form-group contact-forms">
              <input type="text" class="form-control" placeholder="Nama Depan" required="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 form-group contact-forms">
              <input type="text" class="form-control" placeholder="Nama Akhir" required="">
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 form-group contact-forms">
              <input type="text" class="form-control" placeholder="Telepon" required="">

            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 form-group contact-forms">
              <input type="email" class="form-control" placeholder="Email" required="">
            </div>
          </div>
          <div class="form-group contact-forms">
            <textarea class="form-control" placeholder="Pesan" required=""></textarea>
          </div>
          <button type="submit" class="btn sent-butnn btn-lg">Send</button>
        </form>
      </div>
    </div>
  </section>
  <!-- footer -->
  <section class="footer-w3layouts-bottem py-lg-4 py-md-3 py-sm-3 py-3">
    <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
      <div class="row ">
        <div class="footer-bottom-info col-lg-4 col-md-4 ">
          <h4 class="pb-lg-4 pb-md-3 pb-3 ">Alamat</h4>
          <div class="bottom-para ">
            <div class="footer-office-hour">
              <ul>
                <li class="mb-2">
                  <h6>Alamat</h6>
                </li>
                <li><p>Jln. Veteran No.142
                    <br>Malang.</p>
                </li>
              </ul>
              <ul>
                <li class="my-2">
                  <h6>Telepon</h6>
                </li>
                <li>
                  <p>(0354) 121236572</p>
                </li>
                <li class="my-2">
                  <h6>Email</h6>
                </li>
                <li>
                  <p>
                    <a>brainy_les@example.com</a>
                  </p>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="footer-bottom-info col-lg-4 col-md-4 ">
          <h4 class="pb-lg-4 pb-md-3 pb-3 ">Gabung</h4>
          <div class="footer-office-hour">
            <ul>
              <li>
                <p>Daftar</p>
                <p>Login</p>
                <p>Cari Guru</p>
                <p>tentang Kami</p>
                <p>Abou Us</p>
              </li>
            </ul>
          </div>
        </div>
        <div class="footer-bottom-info col-lg-4 col-md-4 ">
          <h4 class="pb-lg-4 pb-md-3 pb-3 ">Tentang</h4>
          <div class="footer-office-hour mt-3">
            <p>BRAINY merupakan sistem untuk melakukan pencarian dan pemesanan Guru Les Privat. BRAINY akan membantu anda dalam menemukan Guru Les Privat yang sesuai dengan pilihan anda. BRAINY dapat digunakan oleh pelajar mulai dari SD, SMP dan SMA.</p>
          </div>
        </div>
      </div>
      <!-- move icon -->
      <div class="text-center mt-lg-5 mt-md-4 mt-3">
        <a href="#home" class="move-top text-center mt-3">
          <span class="fa fa-arrow-up" aria-hidden="true"></span>
        </a>
      </div>
      <!--//move icon -->
    </div>
  </section>
  <!--footer-copy-right -->
  <footer class="bottem-wthree-footer text-center py-md-4 py-3">
    <p>
      © 2019 Organic Store. All Rights Reserved | Design by
      <a href="http://www.W3Layouts.com" target="_blank">W3Layouts</a>
    </p>
  </footer>
  <!--//footer-copy-right -->

</body>

</html>