<!-- KONTEN ISI -->
<div class="container-fluid">
    <div class="part-title" style="padding: 20px;">
        <h3>Daftar Gaji Guru</h3>
    </div>
    <div class="alert alert-danger" style="margin-left: 40px; margin-right: 40px;" role="alert">
      Daftar Masih Kosong.
    </div>
    <div class="isi">
      <table class="table">
        <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Guru</th>
          <th scope="col">Jumlah Gaji</th>
          <th scope="col" colspan="3">Kelola</th>
        </tr>
        </thead>
        <tbody>
        <tr>
        <th scope="row">1</th>
        <td>Susiana</td>
        <td>Rp. 350000</td>
        <td><button style="padding-top: 2px; padding-bottom: 2px;" type="button" class="btn btn-success"data-toggle="modal" data-target="#penarikan">Penarikan</button></td>
        </tr>
        </tbody>
      </table>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="penarikan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Pesan Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="">
          <div class="form-group row">
          <label for="example-text-input" class="col-4 col-form-label">Jumlah Saldo</label>
          <div class="col-8">
          <input class="form-control" type="text" value="" id="example-text-input">
          </div>
          </div>
          <div class="form-group row">
          <label for="example-text-input" class="col-4 col-form-label">Jumlah Penarikan</label>
          <div class="col-8">
          <input class="form-control" type="text" value="" id="example-text-input">
          </div>
          </div>
          <button class="btn btn-primary" style="margin-left: 220px;">Oke</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
      </div>
    </div>
  </div>
</div>