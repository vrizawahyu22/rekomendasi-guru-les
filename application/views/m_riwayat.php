<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/dashboard.css">

    <body>
        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3>BRAINY</h3></h3>
                </div>
                <div class="sidebar-menu" id="nav-accordion">
                  <p class="centered"><a href="profile.html"><img src="<?php echo base_url(); ?>assets/img/background8.jpg" class="img-circle" width="120" style="margin-left: 60px;" ></a></p>
                  <h5 class="centered" style="margin-left: 65px">Elsa Akhmal</h5>
                </div>
                <ul class="list-unstyled components">
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/brainy_les/dashboard">Dashboard</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/brainy_les/permintaan_terkirim">Permintaan Terkirim</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/brainy_les/permintaan_diterima">Permintaan Diterima</a> 
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/brainy_les/permintaan_ditolak">Permintaan Ditolak</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/brainy_les/bimbingan_saat_ini">Bimbingan Saat Ini</a>
                    </li>
                    <li class="active">
                        <a href="<?php echo base_url(); ?>index.php/brainy_les/riwayat">Riwayat Belajar</a>
                    </li>                
                </ul>
      
            </nav>
            <!-- Page Content Holder -->
            <section class="blog bgwhite p-t-20 p-b-30">
            <h3>Riwayat Belajar</h3><hr><br>
            <div class="alert alert-danger" style="width: 980px; margin-left:  320px;" role="alert">
              Belum Ditemukan Riwayat Belajar.
            </div>
            <table class="table">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Mata Pelajaran</th>
                    <th>Nama Guru</th>
                    <th>Waktu</th>
                    <th>Biaya</th>
                    <th>Status</th>
                    <th>Detail</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Ipa</td>
                        <td>Andreas</td>
                        <td>Senin Pagi</td>
                        <td>30000</td>
                        <td>Terkirim</td>
                        <td><button type="button" class="btn btn-success">Hapus</button></td>
                        <td><button type="button" class="btn btn-success">Pesan Lagi</button></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Ipa</td>
                        <td>Andreas ak</td>
                        <td>Senin Pagi</td>
                        <td>30000</td>
                        <td>Terkirim</td>
                        <td><button type="button" class="btn btn-success">Hapus</button></td>
                        <td><button type="button" class="btn btn-success">Pesan Lagi</button></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Matematika</td>
                        <td>Andreas Susila</td>
                        <td>Senin Pagi</td>
                        <td>300000</td>
                        <td>Terkirim</td>
                        <td><button type="button" class="btn btn-success">Hapus</button></td>
                        <td><button type="button" class="btn btn-success">Pesan Lagi</button></td>
                    </tr>
                </tbody>
          </section>

        <!-- jQuery CDN -->
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <!-- Bootstrap Js CDN -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- jQuery Custom Scroller CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
    </body>
</html>