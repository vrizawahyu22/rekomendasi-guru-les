<!-- KONTEN ISI -->
<div class="container-fluid">
    <div class="part-title" style="padding: 20px;">
        <h3>Riwayat</h3>
    </div>
    <div class="alert alert-danger" style="margin-left: 40px; margin-right: 40px;" role="alert">
      Belum Terdapat Permintaan Mengajar
    </div>
    <div class="isi">
      <table class="table">
      <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Murid</th>
        <th scope="col">Mata Pelajaran</th>
        <th scope="col">Jenjang</th>
        <th scope="col">Waktu</th>
        <th scope="col" colspan="3">Kelola</th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Elsa Akhmal</td>
        <td>Biologi</td>
        <td>SMA</td>
        <td>Rabu Sore</td>
        <td><button style="padding-top: 2px; padding-bottom: 2px;" type="button" class="btn btn-success">Detail</button></td>
        <td><button style="padding-top: 2px; padding-bottom: 2px;" type="button" class="btn btn-success" data-toggle="modal" data-target="#hapusriwayat">Hapus</button></td>
      </tr>
      <tr>
        <th scope="row">1</th>
        <td>Elsa Akhmal</td>
        <td>Biologi</td>
        <td>SMA</td>
        <td>Rabu Sore</td>
        <td><button style="padding-top: 2px; padding-bottom: 2px;" type="button" class="btn btn-success">Detail</button></td>
        <td><button style="padding-top: 2px; padding-bottom: 2px;" type="button" class="btn btn-success">Hapus</button></td>
      </tr>
  </tbody>
</table>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="hapusriwayat" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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