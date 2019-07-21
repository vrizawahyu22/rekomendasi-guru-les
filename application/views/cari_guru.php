 <!DOCTYPE html>
 <html>
 <head>
   <title></title>
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
 <body style="background-image: url(<?php echo base_url();?>assets/img/background13.jpeg);">
  <div class="container shadow-lg p-3 mb-10 bg-grey rounded" style="background-color: white; margin-top: 200px;">
    <h3 class="title text-center mb-2">Cari Guru</h3><br>
    <form style="margin-left: 150px;padding-bottom: 50px;" action="">
  <div class="form-row align-items-center">
    <div class="col-sm-3 my-1">
      <label>Jenjang Pendidikan</label>
      <select class="form-control" id="example-text-input" name="pendidikan_sekarang">
        <option value="SD">SD</option>
        <option value="SMP">SMP</option>
        <option value="SMA">SMA</option>
      </select>
    </div>
    <div class="col-sm-3 my-1">
      <label>Mata Pelajaran</label>
      <select class="form-control" id="example-text-input" name="pendidikan_sekarang">
        <option value="Antropologi">Akuntansi</option>
        <option value="Antropologi">Antropologi</option>
        <option value="Bahasa Indonesia">Bahasa Indonesia</option>
        <option value="Bahasa Inggris">Bahasa Inggris</option>
        <option value="Bahasa Jepang">Bahasa Jepang</option>
        <option value="Biologi">Biologi</option>
        <option value="Ekonomi">Ekonomi</option>
        <option value="Fisika">Fisika</option>
        <option value="Kimia">Kimia</option>
        <option value="Matematika">Matematika</option>
        <option value="Sejarah">Sejarah</option>
      </select>
    </div>
    <div class="col-sm-3 my-1">
      <label>Banyak Pertemuan/minggu</label>
      <select class="form-control" id="example-text-input" name="pendidikan_sekarang">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
      </select>
    </div>
    <div class="col-sm-3 my-1">
      <button type="submit" class="btn btn-primary" style="margin-top: 30px;">Submit</button>
    </div>
  </div>
</form>
  </div>

 </body>
 </html>
 
