<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/navbar_sidebar.css"/>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.css"/>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css"/>

  <script type="text/javascript" src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/bootstrap/js/bootstraps.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/bootstrap/js/bootstraps.bundle.min.js"></script>

  <script type='text/javascript' src="<?php echo base_url();?>assets/jquery/jquery-3.3.1.js"> </script>
  <script type='text/javascript' src="<?php echo base_url();?>assets/jquery/jquery.min.js"> </script>
  <script type='text/javascript' src="<?php echo base_url();?>assets/jquery/jquery.js""> </script>
  <script type='text/javascript' src="<?php echo base_url();?>assets/jquery/jquery-ui.js""> </script>
  <script type='text/javascript' src="<?php echo base_url();?>assets/jquery/jquery-ui.min.js""> </script>
  <script type='text/javascript' src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="<?php echo base_url();?>assets/jquery/jquery-ui.css">
   <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

 <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
</head>
 


<body style="background-color: #FAFBFE">
 
  <div class="d-flex" id="wrapper" >
    <!-- Sidebar -->
    <div class="bg-shine border-right " id="sidebar-wrapper">
           <h3 style="padding-top: 40px;padding-left:20px;padding-right:20px;padding-bottom: 5px;color: #FFFFFF;font-weight: 600">BRAINY </h3>
      <div class="list-group list-group-flush grup-sidebar sticky-top sticky-offset" id="sidebar-lal">
        <div class="sidebar-heading" style="padding-left: 0px;padding-right: 0px;padding:0px;" style="text-align: center">
           
              <img src="<?php echo base_url(); ?>assets/img/background8.jpg" width="150" height="150" style="border-radius: 50%;">
        </div>
        <br>
        <a href="<?php echo base_url(); ?>index.php/c_guru/dashboard_guru" class="list-group-item list-group-item-action bg-transparant">Dashboard</a>
        <a href="<?php echo base_url(); ?>index.php/c_guru/lamaran_kerja" class="list-group-item list-group-item-action bg-transparant">Lamaran Pekerjaan</a>
        <a href="<?php echo base_url(); ?>index.php/c_guru/permintaanmengajar" class="list-group-item list-group-item-action bg-transparant">DaftarPermintaan Mengajar</a>
        <a href="<?php echo base_url(); ?>index.php/c_guru/bimbinganguru" class="list-group-item list-group-item-action bg-transparant">Bimbingan Saat Ini</a>
        <a href="<?php echo base_url(); ?>index.php/c_guru/riwayat_guru" class="list-group-item list-group-item-action bg-transparant">Riwayat</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-light border-bottom bg-navbar sticky-top" style="background: #baea82;">
        <button class="btn button-sidebar" id="menu-toggle" style="background-color: #85b86b;
        color: white;"><i class="fa fa-bars" aria-hidden="true"></i></button>
        <div class="col order-12">
        <span>
            <ul class="ul-navbar-list" style="color: #FFFFFF;float: right;margin-top: 16px;">
            </ul>
        </span>
        </div>
        <div class="btn-group order-12" style="float: right;margin-top: 0px;">
            <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-family: sans-serif; background-color: #85b86b;">
              Elsa Akhmal
            </button>
              <div class="dropdown-menu" style="font-family: sans-serif;min-width: 135px !important;">
                <a style="color: #85b86b" class="dropdown-item" href="#" style="padding-right: 0px !important;">Profil</a>
                <a style="color: #85b86b" class="dropdown-item" href="<?php echo base_url(); ?>index.php/brainy_les/home" style="padding-right: 0px !important;">Keluar</a>
              </div>
            </div>
        
      </nav>
        <!-- END Navbar -->
        <script type="text/javascript">
          
  $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
  });
 </script>
        </script>