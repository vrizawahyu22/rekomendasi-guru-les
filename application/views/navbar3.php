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
</head>
 


<body style="background-color: #FAFBFE">
 
  <div class="d-flex" id="wrapper" >
    <!-- Sidebar -->
    <div class="bg-shine border-right " id="sidebar-wrapper">
           <h3 style="padding-top: 40px;padding-left:20px;padding-right:20px;padding-bottom: 5px;color: #FFFFFF;font-weight: 600">DASHBOARD </h3>
      <div class="list-group list-group-flush grup-sidebar sticky-top sticky-offset" id="sidebar-lal">
        <br>
        <a href="<?php echo base_url(); ?>index.php/c_admin/daftarpermintaan" class="list-group-item list-group-item-action bg-transparant">Daftar Permintaan</a>
        <a href="<?php echo base_url(); ?>index.php/c_admin/daftarguru" class="list-group-item list-group-item-action bg-transparant">Daftar Guru Les</a>
        <a href="<?php echo base_url(); ?>index.php/c_admin/daftarmurid" class="list-group-item list-group-item-action bg-transparant">Daftar Murid</a>
        <a href="<?php echo base_url(); ?>index.php/c_admin/transaksi" class="list-group-item list-group-item-action bg-transparant">Transaksi</a>
        <a href="<?php echo base_url(); ?>index.php/c_admin/daftargaji" class="list-group-item list-group-item-action bg-transparant">Daftar Gaji Guru</a>
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
        <span >
            <ul class="ul-navbar-list" style="color: #FFFFFF;float: right;margin-top: 16px;">
            </ul> 
        </span>
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