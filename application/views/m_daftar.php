<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Registrasi Murid</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- LINEARICONS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>fonts/linearicons/style.css">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

		<!-- DATE-PICKER -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/date-picker/css/datepicker.min.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/daftar.css">
	</head>

	<body style="">
		<div class="background">
			<div class="inner" style="margin-left: 280px;">
				<form action="<?php echo base_url(); ?>index.php/brainy_les/registermurid" method="post">
					<h3>Register</h3>
					<div class="form-row">
						<div class="form-wrapper">
							<label for="">Nama</label>
							<input name="nama" type="text" class="form-control" placeholder="Nama" required="">
						</div>
						<div class="form-wrapper">
							<label for="">Telepon</label>
							<input name="telepon" type="text" class="form-control" placeholder="Telepon" required="">
						</div>
					</div>
					<div class="form-row">
						<div class="form-wrapper">
			              <label for="">Jenis Kelamin</label>
			              <select name="jenis_kelamin" id="" class="form-control" required="">
			                <option value="Laki-Laki">Laki-Laki</option>
			                <option value="Perempuan">Perempuan</option>
			              </select>
			              <i class="zmdi zmdi-chevron-down"></i>
			            </div>
						<div class="form-wrapper">
							<label for="">Tanggal Lahir</label>
							<span class="lnr lnr-calendar-full"></span>
							<input name="tanggal_lahir" type="text" class="form-control datepicker-here" data-language='en'  data-date-format="yyyy-mm-d" id="dp2" required="">
						</div>
					</div>
					<div class="form-row last">
		            <div class="form-wrapper">
		              <label for="">Email</label>
		              <input name="email" type="text" class="form-control" placeholder="Email" required="">
		            </div>
		            <div class="form-wrapper">
		              <label for="">Password</label>
		              <input name="password" type="password" class="form-control" placeholder="Password" required="">
		            </div>
		          </div>
		          <button><span>Daftar</span></button>
				</form>
			</div>
		</div>
		
		<script src="<?php echo base_url(); ?>js/jquery-3.3.1.min.js"></script>

		<!-- DATE-PICKER -->
		<script src="<?php echo base_url(); ?>vendor/date-picker/js/datepicker.js"></script>
		<script src="<?php echo base_url(); ?>vendor/date-picker/js/datepicker.en.js"></script>

		<script src="<?php echo base_url(); ?>js/main.js"></script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>