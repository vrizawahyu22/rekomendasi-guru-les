<!-- KONTEN ISI -->
<div class="container-fluid">
    <div class="part-title" style="padding: 20px;">
        <h3>Daftar Permintaan</h3>
    </div>    
    <div class="isi">
      <table class="table">
        <?php if(empty($data_guru)){ ?>
          <div class="alert alert-danger" style="margin-left: 40px; margin-right: 40px;" role="alert">
            Masih belum ada daftar permintaan.
          </div>
        <?php }

        else{?>          

        <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col" style="width: 400px;">Nama Guru</th>
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
        <td><a href="<?php echo base_url(); ?>index.php/c_admin/detail/<?php echo $row->id_autorisasi?>"><button style="padding-top: 2px; padding-bottom: 2px;" type="button" class="btn btn-success">Lihat Form Lamaran Kerja</button></a></td>
        <td><button style="padding-top: 2px; padding-bottom: 2px;" type="button" class="btn btn-success" data-toggle="modal" data-target="#setujui">Setuju</button></td>
        <td><button style="padding-top: 2px; padding-bottom: 2px;" type="button" class="btn btn-success" data-toggle="modal" data-target="#tolakpermintaan">Tolak</button></td>
        </tr>

        <?php
          $no++;
          endforeach;
          }
        ?>
        </tbody>
      </table>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="setujui" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Pesan Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action=""">
          <div class="form-group">
            Apakah anda yakin ingin menyetujui permintaan ?
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
<!-- Modal -->
<div class="modal fade" id="tolakpermintaan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Pesan Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action=""">
          <div class="form-group">
            Apakah anda yakin ingin menolak permintaan ?
          </div>
          
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-toggle="modal" data-target="#alasanmenolak">Ya</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="alasanmenolak" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Alasan Penolakan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action=""">
          <div class="form-group">
            <input style="width: 100%" type="text" name="alasanmenolak">
          </div>
          
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-toggle="modal" data-target="#alasanmenolak">Kirim</button>
      </div>
    </div>
  </div>
</div>