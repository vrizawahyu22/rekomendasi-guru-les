<!-- KONTEN ISI -->
<div class="container-fluid">
    <div class="part-title" style="padding: 20px;">
        <h3>Permintaan Diterima</h3>
    </div>
    <div class="alert alert-danger" style="margin-left:40px; margin-right: 40px" role="alert">
              Belum Terdapat Permintaan Belajar yang Diterima.
            </div>
            <div class="alert alert-success"style="margin-left:40px; margin-right: 40px;" role="alert">
              <h4 class="alert-heading">Selamat !!</h4>
              Permintaan Belajar anda telah diterima, sistem akan memproses permintaan anda lebih lanjut apabila anda mengirim tagihan anda di rekening yang telah tersedia.
              <br>Klik menu bantuan untuk melihat informasi mengenai pembayaran.
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
	      <th scope="col">Kelola</th>
	    </tr>
	  	</thead>
  		<tbody>
    	<tr>
      	<th scope="row">1</th>
      	<td>Matematika</td>
      	<td>Susiana</td>
      	<td>Kamis Sore</td>
      	<td>Rp. 300000</td>
      	<td>Menunggu</td>
      	<td><button style="padding-top: 2px; padding-bottom: 2px;" type="button" class="btn btn-success">Detail</button></td>
        <td><button style="padding-top: 2px; padding-bottom: 2px;" type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">Upload</button></td>
    	</tr>
    	<tr>
      	<th scope="row">1</th>
      	<td>Matematika</td>
      	<td>Susiana</td>
      	<td>Kamis Sore</td>
      	<td>Rp. 300000</td>
      	<td>Menunggu</td>
      	<td><button style="padding-top: 2px; padding-bottom: 2px;" type="button" class="btn btn-success">Detail</button></td>
        <td><button style="padding-top: 2px; padding-bottom: 2px;" type="button" class="btn btn-success">Upload</button></td>
    	</tr>
    	<tr>
      	<th scope="row">1</th>
      	<td>Matematika</td>
      	<td>Susiana</td>
      	<td>Kamis Sore</td>
      	<td>Rp. 300000</td>
      	<td>Menunggu</td>
      	<td><button style="padding-top: 2px; padding-bottom: 2px;" type="button" class="btn btn-success">Detail</button></td>
        <td><button style="padding-top: 2px; padding-bottom: 2px;" type="button" class="btn btn-success">Upload</button></td>
    	</tr>
  </tbody>
</table>
    </div>
</div>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Kirim Bukti Pembayaran</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action=""">
          <div class="form-group">
            <input type="file" name="buktitransaksi" id="myFile" required="">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Kirim</button>
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