<!-- KONTEN ISI -->
<div class="container-fluid">
    <div class="part-title" style="padding: 20px;">
        <h3>Permintaan Ditolak</h3>
    </div>
    <div class="alert alert-danger" style="margin-left:  40px; margin-right: 40px;" role="alert">
      Belum Terdapat Permintaan Belajar yang Ditolak.
    </div>
    <div class="isi">
    	<table class="table">
	  	<thead>
	    <tr>
	      <th scope="col">No</th>
	      <th scope="col">Mata Pelajaran</th>
	      <th scope="col">Nama Guru</th>
	      <th scope="col">Waktu</th>
	      <th scope="col">Biaya</th>
	      <th scope="col">Status</th>
	      <th scope="col" colspan="3">Kelola</th>
	    </tr>
	  	</thead>
  		<tbody>
    	<tr>
      	<th scope="row">1</th>
      	<td>Matematika</td>
      	<td>Susiana</td>
      	<td>Kamis Sore</td>
      	<td>Rp. 300000</td>
      	<td>Ditolak</td>
      	<td><button style="padding-top: 2px; padding-bottom: 2px;" type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">Detail</button></td>
        <td><button style="padding-top: 2px; padding-bottom: 2px;" type="button" class="btn btn-success" data-toggle="modal" data-target="#hapusPermintaanDitolak">Hapus</button></td>
    	</tr>
    	<tr>
      	<th scope="row">1</th>
      	<td>Matematika</td>
      	<td>Susiana</td>
      	<td>Kamis Sore</td>
      	<td>Rp. 300000</td>
      	<td>Ditolak</td>
      	<td><button style="padding-top: 2px; padding-bottom: 2px;" type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">Detail</button></td>
        <td><button style="padding-top: 2px; padding-bottom: 2px;" type="button" class="btn btn-success" data-toggle="modal" data-target="#hapusPermintaanDitolak">Hapus</button></td>
    	</tr>
    	<tr>
      	<th scope="row">1</th>
      	<td>Matematika</td>
      	<td>Susiana</td>
      	<td>Kamis Sore</td>
      	<td>Rp. 300000</td>
      	<td>Ditolak</td>
      	<td><button style="padding-top: 2px; padding-bottom: 2px;" type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">Detail</button></td>
        <td><button style="padding-top: 2px; padding-bottom: 2px;" type="button" class="btn btn-success" data-toggle="modal" data-target="#hapusPermintaanDitolak">Hapus</button></td>
    	</tr>
  </tbody>
</table>
    </div>
</div>
<!-- Modal -->
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Kamu ditolak karena jarak kamu terlalu jauh dengan guru yang kamu pilih coba cari yang lain selain aku :(
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="hapusPermintaanDitolak" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Hapus</h5>
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
 <script>
  $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
  });
 </script>
