<!-- <?php
  foreach ($data_guru as $data) {
    $id = $data->ID;
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

?> -->
<!-- KONTEN ISI -->
<div class="container-fluid">
    <div class="part-title" style="padding: 20px;">
        <h3>Daftar Guru Les Privat</h3>
    </div>
    <div class="isi">
      <table class="table">
         <?php if(empty($data_guru)){ ?>
          <div class="alert alert-danger" style="margin-left: 40px; margin-right: 40px;" role="alert">
            Masih belum ada daftar guru les privat.
          </div>
          <?php }

        else{?>

        <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col" style="width: 400px">Nama Guru</th>
          <th scope="col" style="width: 200px">Status</th>
          <th scope="col" colspan="3">Kelola</th>
        </tr>
        </thead>
        <tbody>

          <?php 
          $no = 1;
            foreach ($data_guru as $row) :
          ?>
        <tr>
        <th scope="row"><?php echo $no?></th>
        <td><?php echo $row->nama?></td>
        <td><?php echo $row->status?></td>
        <td><button style="padding-top: 2px; padding-bottom: 2px;" type="button" class="btn btn-success" data-toggle="modal" data-target="#lihatprofilguru<?php echo $row->ID?>">Lihat Profil</button></td>
        <td><button style="padding-top: 2px; padding-bottom: 2px;" type="button" class="btn btn-success" data-toggle="modal" data-target="#hapusguru<?php echo $row->ID?>">Hapus</button></td>
        </tr>
        </tbody>
     <?php
          $no++;
          endforeach;
          
        ?> 
      </table>
    </div>
</div>
<!-- Modal -->

<?php foreach ($data_guru as $data) {?>
<div class="modal fade" id="lihatprofilguru<?php echo $data->ID?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Profil Guru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action=""">
            <img src="<?php echo base_url(); ?>assets/img/background8.jpg" width="150" height="150" style="border-radius: 50%; margin-left: 300px;"><br>
            <h3 style="margin-left: 300px;">Elsa Akhmal</h3>
            <button style="padding-top: 0px; padding-bottom: 0px; margin-left: 345px;" type="button" class="btn btn-success">Aktif</button><br>
            <button style="padding-top: 0px; padding-bottom: 0px; margin-left: 330px;" type="button" class="btn btn-danger">Tidak Aktif</button>
            <nav><br>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <a class="nav-item nav-link active" id="nav-profil-tab" data-toggle="tab" href="#nav-profil" role="tab" aria-controls="nav-profil" aria-selected="true">Profil</a>
              <a class="nav-item nav-link" id="nav-prestasi-tab" data-toggle="tab" href="#nav-prestasi" role="tab" aria-controls="nav-prestasi" aria-selected="false">Prestasi</a>
              <a class="nav-item nav-link" id="nav-rating-tab" data-toggle="tab" href="#nav-rating" role="tab" aria-controls="nav-rating" aria-selected="false">Rating</a>
              <a class="nav-item nav-link" id="nav-gaji-tab" data-toggle="tab" href="#nav-gaji" role="tab" aria-controls="nav-gaji" aria-selected="false">Gaji</a>
            </div>
            </nav><br><br>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-profil" role="tabpanel" aria-labelledby="nav-profil-tab">
                  <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Nama Lengkap</label>
                    <div class="col-10">
                    <input class="form-control" type="text" value="<?php echo $data->nama?>" id="example-text-input">
                  </div>
                  </div>
                  <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Tempat Lahir</label>
                    <div class="col-10">
                    <input class="form-control" type="text" value="<?php echo $data->tempat_lahir?>" id="example-text-input">
                  </div>
                  </div>
                  <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Tanggal Lahir</label>
                      <div class="col-10">
                      <input class="form-control" type="text" value="<?php echo $data->tanggal_lahir?>" id="example-text-input">
                      </div>
                  </div>
                  <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-10">
                    <input class="form-control" type="text" value="<?php echo $data->jenis_kelamin?>" id="example-text-input">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Alamat</label>
                    <div class="col-10">
                    <input class="form-control" type="text" value="<?php echo $data->alamat?>" id="example-text-input">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Telepon</label>
                    <div class="col-10">
                    <input class="form-control" type="text" value="<?php echo $data->telepon?>" id="example-text-input">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Email</label>
                    <div class="col-10">
                    <input class="form-control" type="text" value="<?php echo $data->email?>" id="example-text-input">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Jenjang Pendidikan Yang Diampu</label>
                    <div class="col-10">
                    <input class="form-control" type="text" value="<?php echo $data->jenjang_pendidikan?>" id="example-text-input">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Bidang Keahlian</label>
                    <div class="col-10">
                    <input class="form-control" type="text" value="<?php echo $data->bidang_keahlian?>" id="example-text-input">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Tentang</label>
                    <div class="col-10">
                    <textarea style="height: 200px" class="form-control" type="text" value="<?php echo $tentang?>" id="example-text-input"></textarea>
                    </div>
                  </div>
                  </div>
                  <div class="tab-pane fade" id="nav-prestasi" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="row">
                      <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                          <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                             data-image="<?php echo base_url(); ?>assets/img/background5.jpg"
                             data-target="#image-gallery">
                              <img class="img-thumbnail"
                                   src="<?php echo base_url(); ?>assets/img/background5.jpg"
                                   alt="Another alt text">
                          </a>
                      </div>
                      <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                          <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                             data-image="<?php echo base_url(); ?>assets/img/background5.jpg"
                             data-target="#image-gallery">
                              <img class="img-thumbnail"
                                   src="<?php echo base_url(); ?>assets/img/background5.jpg"
                                   alt="Another alt text">
                          </a>
                      </div>

                      <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                          <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                             data-image="<?php echo base_url(); ?>assets/img/background5.jpg"
                             data-target="#image-gallery">
                              <img class="img-thumbnail"
                                   src="<?php echo base_url(); ?>assets/img/background5.jpg"
                                   alt="Another alt text">
                          </a>
                      </div>
                      <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                          <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Test1"
                             data-image="<?php echo base_url(); ?>assets/img/background5.jpg"
                             data-target="#image-gallery">
                              <img class="img-thumbnail"
                                   src="<?php echo base_url(); ?>assets/img/background5.jpg"
                                   alt="Another alt text">
                          </a>
                      </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="nav-rating" role="tabpanel" aria-labelledby="nav-rating-tab">
                      <div class="square">
                        <div class="row">
                          <div class="col-sm-1">
                            <img src="<?php echo base_url(); ?>assets/img/background8.jpg" class="img-circle" width="80" style="padding-top: 5px; border-radius: 50px" >
                          </div>
                          <div class="col-sm-10" style="margin-left: 30px;">
                            <h5 style="font-weight: bold">Rendy Pangalila</h5>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <p>Suka sam cara mengajar nya yang asik dan menyenangkan. Good job buat kerjanya. Thanks a lot</p>
                          </div>
                      </div>
                    </div>
                     <div class="square">
                        <div class="row">
                          <div class="col-sm-1">
                            <img src="<?php echo base_url(); ?>assets/img/background8.jpg" class="img-circle" width="80" style="padding-top: 5px; border-radius: 50px" >
                          </div>
                          <div class="col-sm-10" style="margin-left: 30px;">
                            <h5 style="font-weight: bold">Rendy Pangalila</h5>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <p>Suka sam cara mengajar nya yang asik dan menyenangkan. Good job buat kerjanya. Thanks a lot</p>
                          </div>
                      </div>
                    </div>
                     <div class="square">
                        <div class="row">
                          <div class="col-sm-1">
                            <img src="<?php echo base_url(); ?>assets/img/background8.jpg" class="img-circle" width="80" style="padding-top: 5px;border-radius: 50px" >
                          </div>
                          <div class="col-sm-10" style="margin-left: 30px;">
                            <h5 style="font-weight: bold">Rendy Pangalila</h5>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <p>Suka sam cara mengajar nya yang asik dan menyenangkan. Good job buat kerjanya. Thanks a lot</p>
                          </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="nav-gaji" role="tabpanel" aria-labelledby="nav-gaji-tab">
                  <div class="square" style="height: 200px;">
                    <h2 style="margin-top: 80px; margin-left: 300px;color: grey">
                      Rp. 2000000
                    </h2>
                  </div>
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
<?php foreach ($data_guru as $data) {?>
<div class="modal fade" id="hapusguru<?php echo $data->ID?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><?php echo $data->nama?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo site_url(); ?>/c_admin/hapusguru/<?php echo $data->id_autorisasi?>">
          <div class="form-group">
            Apakah anda yakin ingin menghapus ?
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
        <button type="submit" class="btn btn-primary" data-toggle="modal">Ya</button>
      </div>
    </form>
 
    </div>
  </div>
</div>
 <?php }} ?>