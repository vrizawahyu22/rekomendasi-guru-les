<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<?php
  foreach ($data_guru as $data) {
    $nama = $data->nama;
    $tempat_lahir = $data->tempat_lahir;
    $tanggal_lahir = $data->tanggal_lahir;
    $jenis_kelamin = $data->jenis_kelamin;
    $alamat = $data->alamat;
    $telepon = $data->telepon;
    $email = $data->email;
    $jenjang_pendidikan = $data->jenjang_pendidikan;
    // $bidang_keahlian = $data->bidang_keahlian;
    // $tarif = $data->tarif;
    // $cv = $data->cv;
    // $foto = $data->foto;
    // $sertifikat1 = $data->sertifikat1;
    // $sertifikat2 = $data->sertifikat2;
    // $sertifikat3 = $data->sertifikat3;
    // $sertifikat4 = $data->sertifikat4;
    // $sertifikat5 = $data->sertifikat5;
    // $sertifikat6 = $data->sertifikat6;
  }
  foreach ($lamaran as $data) {
   
   
    $bidang_keahlian = $data->bidang_keahlian;
    $tarif = $data->tarif;
 }
?>

<div class="container-fluid">
    <div class="part-title" style="padding: 20px;">
        <h3>Lamaran Kerja</h3>
    </div>
    <?php if(isset($_SESSION['nolamaran'])){?>
    <div class="alert alert-danger" style="margin-left:  40px; margin-right: 40px;" role="alert">
        Belum Terdapat Lamaran Kerja. Buat Sekarang !!
    </div>
    <div class="isi">
     	<button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo" style="background-color: #85b86b; border: #85b86b">Buat</button>
		<div id="demo" class="collapse"><br><br>
			<h3>Form Lamaran Pekerjaan</h3><br>
			<form method="POST" action="<?php echo base_url(); ?>index.php/c_guru/addLamarKerja"enctype="multipart/form-data">
			<div class="form-group row">
		      <label for="example-text-input" class="col-3 col-form-label">Nama Lengkap</label>
		      <div class="col-9">
		      <input name="nama" class="form-control" type="text" value="<?php echo $nama?>" id="example-text-input">
		    </div>
		    </div>
		    <div class="form-group row">
		      <label for="example-text-input" class="col-3 col-form-label">Tempat Lahir</label>
		      <div class="col-9">
		      <input name="tempat_lahir" class="form-control" type="text" value="<?php echo $tempat_lahir?>" id="example-text-input">
		    </div>
		    </div>
		    <div class="form-group row">
		      <label for="example-text-input" class="col-3 col-form-label">Tanggal Lahir</label>
		        <div class="col-9">
		        <input name="tanggal_lahir" class="form-control" type="text" value="<?php echo $tanggal_lahir?>" id="example-text-input">
		        </div>
		    </div>
		    <div class="form-group row">
		      <label for="example-text-input" class="col-3 col-form-label">Jenis Kelamin</label>
		      <div class="col-9">
		      <input name="jenis_kelamin" class="form-control" type="text" value="<?php echo $jenis_kelamin?>" id="example-text-input">
		      </div>
		    </div>
		    <div class="form-group row">
		      <label for="example-text-input" class="col-3 col-form-label">Alamat</label>
		      <div class="col-9">
		      <input name="alamat" class="form-control" type="text" value="<?php echo $alamat?>" id="example-text-input">
		      </div>
		    </div>
		    <div class="form-group row">
		      <label for="example-text-input" class="col-3 col-form-label">Telepon</label>
		      <div class="col-9">
		      <input name="telepon" class="form-control" type="text" value="<?php echo $telepon?>" id="example-text-input">
		      </div>
		    </div>
		    <div class="form-group row">
		      <label for="example-text-input" class="col-3 col-form-label">Email</label>
		      <div class="col-9">
		      <input name="email" class="form-control" type="text" value="<?php echo $email?>" id="example-text-input">
		      </div>
		    </div>
		    <div class="form-group row">
		      <label for="example-text-input" class="col-3 col-form-label">Jenjang Pendidikan Yang Diampu</label>
		      <div class="col-9">
		      <select class="form-control" type="text" id="example-text-input" name="jenjang_pendidikan">
		      	<option value="SD"<?php if($jenjang_pendidikan=="SD"){echo "selected";}?>>SD</option>
	          	<option value="SMP"<?php if($jenjang_pendidikan=="SMP"){echo "selected";}?>>SMP</option>
	          	<option value="SMA"<?php if($jenjang_pendidikan=="SMA"){echo "selected";}?>>SMA</option>
	          </select>
		      </div>
		    </div>
		    <div class="form-group row">
		      <label for="example-text-input" class="col-3 col-form-label">Bidang Keahlian</label>
		      <div class="col-9">
		      <select class="form-control" type="text" id="example-text-input" name="bidang_keahlian">
		      	<option value="Matematika" >Matematika</option>
	          	<option value="Biologi" >Biologi</option>
	          	<option value="Kimia">Kimia</option>
	          	<option value="Fisika">Fisika</option>
	          	<option value="Bahasa Inggris">Bahasa Inggris</option>
	          </select>
		      </div>
		    </div>
		    <div class="form-group row">
		      <label for="example-text-input" class="col-3 col-form-label">Tarif Setiap Pertemuan</label>
		      <div class="col-9">
		      <input class="form-control" type="text" placeholder="Tarif" id="example-text-input" name="tarif">
		      </div>
		    </div>
		    <div class="form-group row">
		      <label for="example-text-input" class="col-3 col-form-label">Upload CV</label>
		      <div class="col-9">
		      <input type="file" name="cv" id="cv" required="">
		      </div>
		    </div>
		    <div class="form-group row">
		      <label for="example-text-input" class="col-3 col-form-label">Upload Foto 3 X 4</label>
		      <div class="col-9">
		      <input type="file" name="foto" id="foto" required="">
		      </div>
		    </div>
		    <div class="form-group row">
		      <label for="example-text-input" class="col-3 col-form-label">Upload Gambar Sertifikat Pendukung 1</label>
		      <div class="col-9">
		      <input type="file" name="sertifikat1" id="foto">
		      </div>
		    </div>
		    <div class="form-group row">
		      <label for="example-text-input" class="col-3 col-form-label">Upload Gambar Sertifikat Pendukung 2</label>
		      <div class="col-9">
		      <input type="file" name="sertifikat2" id="foto">
		      </div>
		    </div>
		    <div class="form-group row">
		      <label for="example-text-input" class="col-3 col-form-label">Upload Gambar Sertifikat Pendukung 3</label>
		      <div class="col-9">
		      <input type="file" name="sertifikat3" id="foto">
		      </div>
		    </div>
		    <div class="form-group row">
		      <label for="example-text-input" class="col-3 col-form-label">Upload Gambar Sertifikat Pendukung 4</label>
		      <div class="col-9">
		      <input type="file" name="sertifikat4" id="foto">
		      </div>
		    </div>
		    <div class="form-group row">
		      <label for="example-text-input" class="col-3 col-form-label">Upload Gambar Sertifikat Pendukung 5</label>
		      <div class="col-9">
		      <input type="file" name="sertifikat5" id="foto">
		      </div>
		    </div>
		    <div class="form-group row">
		      <label for="example-text-input" class="col-3 col-form-label">Upload Gambar Sertifikat Pendukung 6</label>
		      <div class="col-9">
		      <input type="file" name="sertifikat6" id="foto">
		      </div>
		    </div>
		    	<button style="margin-left: 450px;" type="submit" class="btn btn-success">Kirim</button>
		    </form>
    		</div>
    		<?php }?>
		</div>
		<?php if(isset($_SESSION['lamaran'])){?>
		<div class="isi" style="margin-top: 20px;">
			<h3>Lamaran Kerja</h3><br>
			<label style="font-weight: bold;">Status : &nbsp; &nbsp; &nbsp;<button type="button" class="btn btn-primary" style="padding-top: 0px; padding-bottom: 0px;">Menunggu</button></label><br><br>
			<div class="form-group row">
		      <label for="example-text-input" class="col-3 col-form-label" style="font-weight: bold;">Nama</label>
		      <div class="col-9">
		      <label  for="">: <?php echo $nama?></label>
		      </div>
		    </div>
		    <div class="form-group row">
		      <label for="example-text-input" class="col-3 col-form-label" style="font-weight: bold;">Tempat Lahir</label>
		      <div class="col-9">
		      <label for=""><?php echo $tempat_lahir?></label>
		      </div>
		    </div>
		    <div class="form-group row">
		      <label for="example-text-input" class="col-3 col-form-label" style="font-weight: bold;">Tanggal Lahir</label>
		      <div class="col-9">
		      <label for="">: <?php echo $tanggal_lahir?></label>
		      </div>
		    </div>
		    <div class="form-group row">
		      <label for="example-text-input" class="col-3 col-form-label" style="font-weight: bold;">Jenis Kelamin</label>
		      <div class="col-9">
		      <label for="">: <?php echo $jenis_kelamin?></label>
		      </div>
		    </div>
		    <div class="form-group row">
		      <label for="example-text-input" class="col-3 col-form-label" style="font-weight: bold;">Alamat</label>
		      <div class="col-9">
		      <label for="">:  <?php echo $alamat?></label>
		      </div>
		    </div>
		    <div class="form-group row">
		      <label for="example-text-input" class="col-3 col-form-label" style="font-weight: bold;">Telepon</label>
		      <div class="col-9">
		      <label for="">: <?php echo $telepon?></label>
		      </div>
		    </div>
		    <div class="form-group row">
		      <label for="example-text-input" class="col-3 col-form-label" style="font-weight: bold;">Email</label>
		      <div class="col-9">
		      <label for="">: <?php echo $telepon?></label>
		      </div>
		    </div>
		    <div class="form-group row">
		      <label for="example-text-input" class="col-3 col-form-label" style="font-weight: bold;">Jenjang Pendidikan Yang Diampu</label>
		      <div class="col-9">
		      <label for="">: <?php echo $jenjang_pendidikan?></label>
		      </div>
		    </div>
		    <div class="form-group row">
		      <label for="example-text-input" class="col-3 col-form-label" style="font-weight: bold;">Bidang Keahlian</label>
		      <div class="col-9">
		      <label for="">: <?php echo $bidang_keahlian?></label>
		      </div>
		    </div>
		    <div class="form-group row">
		      <label for="example-text-input" class="col-3 col-form-label" style="font-weight: bold;">Tarif Setiap Pertemuan</label>
		      <div class="col-9">
		      <label for="">: <?php echo $tarif;?></label>
		      </div>
		    </div>
		    <div class="form-group row">
		      <label for="example-text-input" class="col-3 col-form-label" style="font-weight: bold;">Lihat CV</label>
		      <div class="col-9">
		      	<button class="submit">Lihat</button>
		      </div>
		    </div>
		</div>
		<?php }?>
    </div>