<!DOCTYPE html>
<html>
<head>
    <title>Rekomendasi Guru</title>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!------ Include the above in your HEAD tag ---------->
</head>
<body style="background-color: #e4eef6">
<div class="container shadow-lg p-3 mb-10 bg-white rounded" style="background-color: white; margin-top: 40px; padding-bottom: 100px">
    <h3 class="title text-center mb-2">Rekomendasi Guru</h3>
      <div class="title-w3ls-text text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
        <p>Kami telah menyiapkan guru yang cocok untuk anda, silahkan pilih salah satu guru yang anda sukai!</p>
      </div><br><br><br>
    <div class="row">
        <div class="col-sm-2 col-md-2">
            <img style="height: 220px" src="<?php echo base_url();?>assets/img/background6.jpg"
            alt="" class="img-rounded img-responsive" />
        </div>
        <div class="col-sm-4 col-md-4">
            <blockquote>
                <p>Elsa Akhmal</p> <small><cite title="Source Title">Matematika, Fisika</cite></small>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star-o"></span>
                <span class="fa fa-star-o"></span>
            </blockquote>
            <p> <i class="glyphicon glyphicon-gift"></i> 10 January 1997
                <br
                /> <i class="glyphicon glyphicon-envelope"></i> elsaakhmal01@gmail.com
                <br /> <i class="glyphicon glyphicon-map-marker"></i> Jln. Mayjend Panjaitan Gg 19</p>
                <button type="submit" class="btn btn-info" data-toggle="modal" data-target="#lihatprofilguru">Lihat Profil</button> &nbsp;
                <button type="submit" class="btn btn-success">Pilih Guru</button>
        </div>
        <div class="col-sm-2 col-md-2">
            <img style="height: 220px" src="<?php echo base_url();?>assets/img/background6.jpg
            " alt="" class="img-rounded img-responsive" />
        </div>
        <div class="col-sm-2 col-md-4">
            <blockquote>
                <p>Elsa Akhmal</p> <small><cite title="Source Title">Bahasa Inggris</cite></small>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star-o"></span>
                <span class="fa fa-star-o"></span>
            </blockquote>
            <p> <i class="glyphicon glyphicon-gift"></i> 10 January 1997
                <br
                /> <i class="glyphicon glyphicon-envelope"></i> elsaakhmal01@gmail.com
                <br /> <i class="glyphicon glyphicon-map-marker"></i> Jln. Mayjend Panjaitan Gg 19</p>
                <button type="submit" class="btn btn-info" data-toggle="modal" data-target="#lihatprofilmurid">Lihat Profil</button> &nbsp;
                <button type="submit" class="btn btn-success">Pilih Guru</button>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="lihatprofilguru" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Profil Guru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="">
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
                    <input class="form-control" type="text" value="" id="example-text-input">
                  </div>
                  </div>
                  <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Tempat Lahir</label>
                    <div class="col-10">
                    <input class="form-control" type="text" value="" id="example-text-input">
                  </div>
                  </div>
                  <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Tanggal Lahir</label>
                      <div class="col-10">
                      <input class="form-control" type="text" value="" id="example-text-input">
                      </div>
                  </div>
                  <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-10">
                    <input class="form-control" type="text" value="" id="example-text-input">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Alamat</label>
                    <div class="col-10">
                    <input class="form-control" type="text" value="" id="example-text-input">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Telepon</label>
                    <div class="col-10">
                    <input class="form-control" type="text" value="" id="example-text-input">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Email</label>
                    <div class="col-10">
                    <input class="form-control" type="text" value="" id="example-text-input">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Jenjang Pendidikan Yang Diampu</label>
                    <div class="col-10">
                    <input class="form-control" type="text" value="" id="example-text-input">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Bidang Keahlian</label>
                    <div class="col-10">
                    <input class="form-control" type="text" value="" id="example-text-input">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Tentang</label>
                    <div class="col-10">
                    <textarea style="height: 200px" class="form-control" type="text" value="" id="example-text-input"></textarea>
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
<style type="text/css">
    .checked{
        color: orange;
    }
    .container{
        box-shadow: box-shadow: 10px 10px 5px grey;
    }
</style>