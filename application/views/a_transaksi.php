<!-- KONTEN ISI -->
<div class="container-fluid">
    <div class="part-title" style="padding: 20px;">
        <h3>Daftar Transaksi</h3>
    </div>
    <div class="alert alert-danger" style="margin-left: 40px; margin-right: 40px;" role="alert">
      Masih belum ada daftar transaksi.
    </div>
    <div class="isi">
      <table class="table">
        <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Murid</th>
          <th scope="col">Pembayaran Kepada</th>
          <th scope="col">Jumlah</th>
          <th scope="col" colspan="3">Kelola</th>
        </tr>
        </thead>
        <tbody>
        <tr>
        <th scope="row">1</th>
        <td>Elsa Akhmal</td>
        <td>Susiana</td>
        <td>Rp. 35.000</td>
        <td><button style="padding-top: 2px; padding-bottom: 2px;" type="button" class="btn btn-success">Lihat Bukti Pembayaran</button></td>
        <td><button style="padding-top: 2px; padding-bottom: 2px;" type="button" class="btn btn-success" data-toggle="modal" data-target="#terimatransaksi">Terima</button></td>
        <td><button style="padding-top: 2px; padding-bottom: 2px;" type="button" class="btn btn-success" data-toggle="modal" data-target="#tolaktransaksi">Tolak</button></td>
        </tr>
        </tbody>
      </table>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="terimatransaksi" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
            Apakah anda yakin ingin menerima transaksi ?
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
<div class="modal fade" id="tolaktransaksi" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
            Apakah anda yakin ingin menolak transaksi ?
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