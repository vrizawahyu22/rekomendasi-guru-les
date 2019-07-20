<!DOCTYPE html>
<html lang="zxx">

<head>
  <title>Cari Guru</title>
  <link rel="icon" href="<?php echo base_url(); ?>assets/img/background_footer.jpg">

  <!--meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="Organic Store Responsive web template" />
  <script>
    addEventListener("load", function() {
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
  <div class="about-us" id="home">
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
          <li>
            <form action="login.php"><button type="submit" class="btn login">Login</button></form>
          </li>
          <li>
            <form action="daftar.php"><button type="submit" class="btn daftar">Daftar</button></form>
          </li>
        </ul>
      </nav>
      <!-- //nav -->
    </div>
    <div class="main-banner text-center">
      <div class="container">
        <div class="banner-right-txt">
          <h5>Cari Guru</h5>
        </div>
      </div>
    </div>
    <!-- //header -->
  </div>
  <div class="container">
    <form action="<?php echo base_url() . 'index.php/brainy_les/wp'?>" method="POST">
      <div class="row">
        <div class="col-25">
          <label for="jenjang"></label>Jenjang Pendidikan</div>
        <div class="col-75">
          <select id="jenjang" name="jenjang">
            <option value="SD">SD</option>
            <option value="SMP">SMP</option>
            <option value="SMA">SMA</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="mapel">Mata Pelajaran</label>
        </div>
        <div class="col-75">
          <input type="text" id="mapel" name="mapel" placeholder="   Mata Pelajaran">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="sesi"></label>Banyak Pertemuan/Minggu</div>
        <div class="col-75">
          <select id="jenjang" name="pertemuan">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
          </select>
        </div>
      </div>
      <div class="row">
        <input type="submit" value="Submit">
      </div>
    </form>
  </div>

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
                <li>
                  <p>Jln. Veteran No.142
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
                <p>About Us</p>
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
<!-- //banner -->