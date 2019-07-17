<?php
  foreach ($data_murid as $data) {
    $nama = $data->nama;
    $tanggal_lahir = $data->tanggal_lahir;
    $jenis_kelamin = $data->jenis_kelamin;
    $alamat = $data->alamat;
    $telepon = $data->telepon;
    $email = $data->email;
    $pendidikan_sekarang = $data->pendidikan;
    $tentang = $data->tentang;
  }

?>
     <!-- KONTEN ISI -->
        <div class="container-fluid">
         
         	<div class="part-title" style="padding: 20px;">
            <h3>Profil</h3>
          </div>
          <div class="isi">
            <div class="form-group row">
              <label for="example-text-input" class="col-2 col-form-label">Nama Lengkap</label>   
              <div class="col-10">
              <input class="form-control" type="text" value="<?php echo $nama?>" id="example-text-input" disabled="">
              </div>

            </div>
            <div class="form-group row">
              <label for="example-text-input" class="col-2 col-form-label">Tanggal Lahir</label>
              <div class="col-10">
              <input class="form-control" type="text" value="<?php echo $tanggal_lahir?>" id="example-text-input" disabled="">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-text-input" class="col-2 col-form-label">Jenis Kelamin</label>
              <div class="col-10">
              <input class="form-control" type="text" value="<?php echo $jenis_kelamin?>" id="example-text-input" disabled="">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-text-input" class="col-2 col-form-label">Alamat</label>
              <div class="col-10">
              <input class="form-control" type="text" value="<?php echo $alamat?>" id="example-text-input" disabled="">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-text-input" class="col-2 col-form-label">Telepon</label>
              <div class="col-10">
              <input class="form-control" type="text" value="<?php echo $telepon?>" id="example-text-input" disabled="">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-text-input" class="col-2 col-form-label">Email</label>
              <div class="col-10">
              <input class="form-control" type="text" value="<?php echo $email?>" id="example-text-input" disabled="">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-text-input" class="col-2 col-form-label">Pendidikan Saat Ini</label>
              <div class="col-10">
              <input class="form-control" type="text" value="<?php echo $pendidikan_sekarang?>" id="example-text-input" disabled="">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-text-input" class="col-2 col-form-label">Tentang</label>
              <div class="col-10">
              <textarea style="height: 200px" class="form-control" type="text" value="<?php echo $tentang?>" id="example-text-input" disabled=""><?php echo $tentang?></textarea>
              </div>
            </div>
            <a href="<?php echo base_url(); ?>index.php/c_murid/edit_profil"><button href="" style="margin-left: 450px;" type="submit" class="btn btn-success">Edit</button></a>
        </div>
</body>
