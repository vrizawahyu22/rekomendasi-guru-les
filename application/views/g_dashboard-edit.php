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
    $bidang_keahlian = $data->bidang_keahlian;
    $tentang = $data->tentang;
    $foto = $data->foto;
  }

?>

<div class="container-fluid">
    <div class="part-title" style="padding: 20px;">
        <h3>Profil</h3>
    </div>
    <div class="isi">
      <form action="<?php echo base_url(); ?>index.php/c_guru/update_profil" method="POST">
    <div class="form-group row">
      <label for="example-text-input" class="col-2 col-form-label">Nama Lengkap</label>
      <div class="col-10">
      <input name="nama" class="form-control" type="text" value="<?php echo $nama?>" id="example-text-input">
    </div>
    </div>
    <div class="form-group row">
      <label for="example-text-input" class="col-2 col-form-label">Tempat Lahir</label>
      <div class="col-10">
      <input name="tempat_lahir" class="form-control" type="text" value="<?php echo $tempat_lahir?>" id="example-text-input">
    </div>
    </div>
    <div class="form-group row">
      <label for="example-text-input" class="col-2 col-form-label">Tanggal Lahir</label>
        <div class="col-10">
        <input name="tanggal_lahir" class="form-control" type="text" value="<?php echo $tanggal_lahir?>" id="example-text-input">
        </div>
    </div>
    <div class="form-group row">
      <label for="example-text-input" class="col-2 col-form-label">Jenis Kelamin</label>
      <div class="col-10">
      <input name="jenis_kelamin" class="form-control" type="text" value="<?php echo $jenis_kelamin?>" id="example-text-input">
      </div>
    </div>
    <div class="form-group row">
      <label for="example-text-input" class="col-2 col-form-label">Alamat</label>
      <div class="col-10">
      <input name="alamat" class="form-control" type="text" value="<?php echo $alamat?>" id="example-text-input">
      </div>
    </div>
    <div class="form-group row">
      <label for="example-text-input" class="col-2 col-form-label">Telepon</label>
      <div class="col-10">
      <input name="telepon" class="form-control" type="text" value="<?php echo $telepon?>" id="example-text-input">
      </div>
    </div>
    <div class="form-group row">
      <label for="example-text-input" class="col-2 col-form-label">Email</label>
      <div class="col-10">
      <input name="email" class="form-control" type="text" value="<?php echo $email?>" id="example-text-input">
      </div>
    </div>
    <div class="form-group row">
      <label for="example-text-input" class="col-2 col-form-label">Jenjang Pendidikan Yang Diampu</label>
      <div class="col-10">
        <select class="form-control" id="example-text-input" name="jenjang_pendidikan">
          <option value="SD" <?php if($jenjang_pendidikan=="SD"){echo "selected";}?> >SD</option>
          <option value="SMP" <?php if($jenjang_pendidikan =="SMP"){echo "selected";}?>>SMP</option>
          <option value="SMA" <?php if($jenjang_pendidikan=="SMA"){echo "selected";}?>>SMA</option>
        </select>
      </div>
    </div>
    <div class="form-group row">
      <label for="example-text-input" class="col-2 col-form-label">Bidang Keahlian</label>
      <div class="col-10">
      <input name="bidang_keahlian" class="form-control" type="text" value="<?php echo $bidang_keahlian?>" id="example-text-input">
      </div>
    </div>
    <div class="form-group row">
      <label for="example-text-input" class="col-2 col-form-label">Tentang Saya</label>
      <div class="col-10">
      <textarea name="tentang" style="height: 200px" class="form-control" type="text" id="example-text-input"><?php echo $tentang?></textarea> 
      </div>  
    </div>
    <div class="form-group row">
      <label for="example-text-input" class="col-2 col-form-label">Upload Foto Profil</label>
        <div class="col-10">
          <input type="file" name="foto" id="foto">
        </div>
    </div>
    <a href=""><button style="margin-left: 450px;" type="submit" class="btn btn-success">Simpan</button></a>
  </form>
    </div>
  </div>