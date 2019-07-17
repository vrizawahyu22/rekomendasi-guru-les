<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Lamaran Kerja | Brainy</title>

        <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/dashboard.css">
        <!-- Scrollbar Custom CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    </head>
    <body>
        <div class="navbar">
        <button class="btn" type="submit">Keluar</button>
        </div>
        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3>BRAINY</h3>
                </div>
                <div class="sidebar-menu" id="nav-accordion">
                  <p class="centered"><a href="profile.html"><img src="<?php echo base_url(); ?>assets/img/fast.jpg" class="img-circle" width="100"></a></p>
                  <h5 class="centered">Elsa Akhmal</h5>
                </div>
                <ul class="list-unstyled components">
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/brainy_les/dashboard_guru">Dashboard</a>
                    </li>
                    <li class="active">
                        <a href="<?php echo base_url(); ?>index.php/brainy_les/lamaran_kerja">Lamaran Pekerjaan</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/brainy_les/permintaanmengajar">Daftar Permintaan Mengajar</a>  
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/brainy_les/bimbinganguru">Bimbingan Saat Ini</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/brainy_les/riwayat_guru">Riwayat</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/brainy_les/gaji_guru">Gaji</a>
                    </li>                
                </ul>
            </nav>
            <!-- Page Content Holder -->
            <section class="blog bgwhite p-t-20 p-b-30">
            <h3>Gaji</h3>
            <div class="container">
                <p>Gaji anda saat ini ..</p>
            </div>
        </div>

        <!-- jQuery CDN -->
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <!-- Bootstrap Js CDN -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- jQuery Custom Scroller CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
    </body>
</html>