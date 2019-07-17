<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/dashboard.css">

    <body>
        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3>BRAINY</h3>
                </div>
                <div class="sidebar-menu" id="nav-accordion">
                  <p class="centered"><a href="profile.html"><img src="<?php echo base_url(); ?>assets/img/background8.jpg" class="img-circle" width="120" style="margin-left: 60px;" ></a></p>
                  <h5 class="centered" style="margin-left: 65px">Elsa Akhmal</h5>
                </div>
                <ul class="list-unstyled components">
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/brainy_les/dashboard_guru">Dashboard</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/brainy_les/lamaran_kerja_terkirim">Lamaran Pekerjaan</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/brainy_les/permintaanmengajar">Daftar Permintaan Mengajar</a>  
                    </li>
                    <li class="active">
                        <a href="<?php echo base_url(); ?>index.php/brainy_les/bimbinganguru">Bimbingan Saat Ini</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/brainy_les/riwayat_guru">Riwayat</a>
                    </li>
                    <li>
                        <a href="">Gaji</a>
                    </li>                
                </ul>
      
            </nav>

            <!-- Page Content Holder -->
            <section class="blog bgwhite p-t-20 p-b-30">
            <h3>Bimbingan Saat Ini</h3><hr><br>
            <div class="alert alert-danger" style="width: 980px; margin-left:  320px;" role="alert">
              Belum Terdapat Bimbingan Belajar.
            </div>
                <table class="table">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama Murid</th>
                        <th>Mata Pelajaran</th>
                        <th>Jenjang</th>
                        <th>Waktu</th>
                        <th>Detail</th>
                      </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Andreas</td>
                            <td>Matematika</td>
                            <td>SMP</td>
                            <td>Senin Sore</td>
                            <td><button type="button" class="btn btn-success">Detail</button></td>
                            <td><button type="button" class="btn btn-success">Kirim Pesan</button></td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </div>
    </body>
</html>