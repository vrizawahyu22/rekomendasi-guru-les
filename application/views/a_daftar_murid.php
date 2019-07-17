<!-- <?php
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

?> -->
<!-- KONTEN ISI -->
<div class="container-fluid">
    <div class="part-title" style="padding: 20px;">
        <h3>Daftar Murid</h3>
    </div>
    <div class="isi">
      <table class="table">

        <?php if(empty($data_murid)){ ?>
        <div class="alert alert-danger" style="margin-left: 40px; margin-right: 40px;" role="alert">
          Masih belum ada daftar murid.
        </div>

        <?php }

        else{?>

        <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col" style="width: 600px">Nama Murid</th>
          <th scope="col" colspan="3">Kelola</th>
        </tr>
        </thead>
        <tbody>

          <?php 
          $no = 1;
            foreach ($data_murid as $row) :
          ?>

        <tr>
        <th scope="row"><?php echo $no?></th>
        <td><?php echo $row->nama?></td>
        <td><button style="padding-top: 2px; padding-bottom: 2px;" type="button" class="btn btn-success" data-toggle="modal" data-target="#lihatprofilmurid<?php echo $row->id_autorisasi?>">Lihat Profil</button></td>
        <td><button style="padding-top: 2px; padding-bottom: 2px;" type="button" class="btn btn-success" data-toggle="modal" data-target="#hapusmurid<?php echo $row->id_autorisasi?>">Hapus</button></td>
        </tr>
        </tbody>
        <?php
          $no++;
          endforeach;
          }
        ?>
      </table>
    </div>
</div>
<!-- Modal -->
<?php foreach ($data_murid as $data) {?>
<div class="modal fade" id="lihatprofilmurid<?php echo $data->id_autorisasi?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Profil Murid</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="">
          <img src="<?php echo base_url(); ?>assets/img/background8.jpg" width="150" height="150" style="border-radius: 50%; margin-left: 300px;"><br><br>
            <h4 style="margin-left: 320px;">Elsa Akhmal</h4><br><br>
          <div class="form-group row">
              <label for="example-text-input" class="col-2 col-form-label">Nama Lengkap</label>
              <div class="col-10">
              <input class="form-control" type="text" value="<?php echo $data->nama?>" id="example-text-input" disabled="">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-text-input" class="col-2 col-form-label">Tanggal Lahir</label>
              <div class="col-10">
              <input class="form-control" type="text" value="<?php echo $data->tanggal_lahir?>" id="example-text-input" disabled="">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-text-input" class="col-2 col-form-label">Jenis Kelamin</label>
              <div class="col-10">
              <input class="form-control" type="text" value="<?php echo $data->jenis_kelamin?>" id="example-text-input" disabled="">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-text-input" class="col-2 col-form-label">Alamat</label>
              <div class="col-10">
              <input class="form-control" type="text" value="<?php echo $data->alamat?>" id="example-text-input" disabled="">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-text-input" class="col-2 col-form-label">Telepon</label>
              <div class="col-10">
              <input class="form-control" type="text" value="<?php echo $data->telepon?>" id="example-text-input" disabled="">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-text-input" class="col-2 col-form-label">Email</label>
              <div class="col-10">
              <input class="form-control" type="text" value="<?php echo $data->email?>" id="example-text-input" disabled="">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-text-input" class="col-2 col-form-label">Pendidikan Saat Ini</label>
              <div class="col-10">
              <input class="form-control" type="text" value="<?php echo $data->pendidikan?>" id="example-text-input" disabled="">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-text-input" class="col-2 col-form-label">Tentang</label>
              <div class="col-10">
              <input style="height: 200px" class="form-control" type="text" value="<?php echo $data->tentang?>" id="example-text-input" disabled="">
              </div>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
 <?php } ?>
<!-- Modal -->
<?php foreach ($data_murid as $data) {?>
<div class="modal fade" id="hapusmurid<?php echo $data->id_autorisasi?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Pesan Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo site_url(); ?>/c_admin/hapusmurid/<?php echo $data->id_autorisasi?>">
          <div class="form-group">
            Apakah anda yakin ingin menghapus ?
          </div>
          
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
        <button type="button" class="btn btn-primary" data-toggle="modal">Ya</button>
      </div>
    </div>
  </div>
</div>
 <?php } ?>