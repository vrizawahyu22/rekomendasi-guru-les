<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/navbar_sidebar.css"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-color: #FAFBFE">
  <div class="container shadow p-3 mb-5 bg-white rounded" style="background-color: #ffffff; width: 750px;margin-top: 50px">
  <form>
    <h3>Form Permintaan Belajar</h3><br><br>
    <div class="form-group">
      <label for="nama">Nama</label>
      <input type="text" class="form-control" id="nama" aria-describedby="nama" placeholder="Nama anda">
    </div>
    <div class="form-group">
      <label for="tanggallahir">Tanggal Lahir</label>
      <input type="text" class="form-control" id="tanggallahir" aria-describedby="tanggallahir" placeholder="Tanggal lahir anda">
    </div>
    <div class="form-group">
      <label for="jk">Jenis Kelamin</label>
      <input type="text" class="form-control" id="jk" aria-describedby="jk" placeholder="Jenis kelamin">
    </div>
    <div class="form-group">
      <label for="alamat">Alamat</label>
      <input type="text" class="form-control" id="alamat" aria-describedby="alamat" placeholder="Alamat anda">
    </div>
    <div class="form-group">
      <label for="telepon">Telepon</label>
      <input type="text" class="form-control" id="telepon" aria-describedby="telepon" placeholder="Nomor telepon">
    </div>
    <div class="form-group">
      <label for="email">Alamat</label>
      <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="Email anda">
    </div>
    <div class="form-group">
      <label for="mp">Mata Pelajaran</label>
      <input type="text" class="form-control" id="mp" aria-describedby="mp" placeholder="Mata pelajaran">
    </div>
    <div class="form-group">
      <label for="paketles">Paket Les</label>
      <select class="form-control" type="text" id="example-text-input">
            <option value="1">1 Bulan</option>
              <option value="2">2 Bulan</option>
              <option value="3">3 Bulan</option>
              <option value="4">4 Bulan</option>
              <option value="5">5 Bulan</option>
              <option value="6">6 Bulan</option>
      </select>
    </div>
    <div class="form-group">
      <label for="sesi">Jumlah Sesi Per Minggu</label>
      <select class="form-control" type="text" id="example-text-input">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
      </select>
    </div>
    <div class="form-group">
      <label for="totalpertemuan">Total Pertemuan</label>
      <input type="text" class="form-control" id="totalpertemuan" aria-describedby="totalpertemuan" placeholder="">
    </div>
    <div class="form-group">
      <label for="biaya">Total Biaya</label>
      <input type="biaya" class="form-control" id="biaya" aria-describedby="biaya" placeholder="">
    </div>
    <div class="form-group">
      <label for="target">Target Yang Ingin Dicapai</label>
      <input type="text" class="form-control" id="target" aria-describedby="target" placeholder="Target atau keinginan anda" style="height: 200px;">
      <small id="emailHelp" class="form-text text-muted">Target atau keinginan anda yang ingin dicapai selama melakukan bimbingan belajar.</small>
    </div>
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Saya setuju bahwa informasi yang saya berikan adalah BENAR</label>
    </div><br>
    <button type="button" class="btn btn-primary btn-lg btn-block">Kirim</button>
  </form>
</div>
</body>
  <script type="text/javascript">
    $(document).ready(function(){
      $('#sesi').change(function(){
        var banyak = $(this).val();
        var html =
      })
    })
  </script>