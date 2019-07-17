<!-- KONTEN ISI -->
<div class="container-fluid">
    <div class="part-title" style="padding: 20px;">
        <h3>Bimbingan Saat Ini</h3>
    </div>
    <div class="alert alert-danger" style="width: 980px; margin-left:40px;" role="alert">
      Belum Terdapat Bimbingan Belajar.
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
      	<td><button style="padding-top: 2px; padding-bottom: 2px;" type="button" class="btn btn-success">Detail</button></td>
        <td><button style="padding-top: 2px; padding-bottom: 2px;" type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">Akhiri</button></td>
        <td><button style="padding-top: 2px; padding-bottom: 2px;" type="button" class="btn btn-success">Kirim Pesan</button></td>
    	</tr>
      <tr>
        <th scope="row">1</th>
        <td>Matematika</td>
        <td>Susiana</td>
        <td>Kamis Sore</td>
        <td>Rp. 300000</td>
        <td><button style="padding-top: 2px; padding-bottom: 2px;" type="button" class="btn btn-success">Detail</button></td>
        <td><button style="padding-top: 2px; padding-bottom: 2px;" type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">Akhiri</button></td>
        <td><button style="padding-top: 2px; padding-bottom: 2px;" type="button" class="btn btn-success">Kirim Pesan</button></td>
      </tr>
      <tr>
        <th scope="row">1</th>
        <td>Matematika</td> 
        <td>Susiana</td>
        <td>Kamis Sore</td>
        <td>Rp. 300000</td>
        <td><button style="padding-top: 2px; padding-bottom: 2px;" type="button" class="btn btn-success">Detail</button></td>
        <td><button style="padding-top: 2px; padding-bottom: 2px;" type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">Akhiri</button></td>
        <td><button style="padding-top: 2px; padding-bottom: 2px;" type="button" class="btn btn-success">Kirim Pesan</button></td>
      </tr>
  </tbody>
</table>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
            Apakah anda yakin ingin mengakhiri kegiatan belajar ini ?
          </div>
          
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ratingDanUlasan">Ya</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="ratingDanUlasan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Rating dan Ulasan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div>
            <img src="<?php echo base_url(); ?>assets/img/background8.jpg" class="img-circle" width="80" style="padding-top: 5px; margin-left: 180px; border-radius: 50px" >
          </div>
          <div class="col-sm-10" style=" padding-top: 10px">
            <h5 style="font-weight: bold; margin-left: 130px;">Rendy Pangalila</h5>
            <div style="color: orange; margin-left: 160px;">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
          </div><br>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label" style="margin-left: 190px;">Ulasan:</label>
            <textarea style="width: 65%; margin-left: 80px;margin-right: 80px" class="form-control" id="message-text"></textarea>
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