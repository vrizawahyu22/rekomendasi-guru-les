<?php
  foreach ($berkas_lamaran_kerja->result() as $data) {
    $nama = $data->nama;
    $tempat_lahir = $data->tempat_lahir;
    $tanggal_lahir = $data->tanggal_lahir;
    $jenis_kelamin = $data->jenis_kelamin;
    $alamat = $data->alamat;
    $telepon = $data->telepon;
    $email = $data->email;
    $jenjang_pendidikan = $data->jenjang_pendidikan;
    $bidang_keahlian = $data->bidang_keahlian;
    $tarif = $data->tarif;
    $fotoresmi = $data->foto_resmi;
    $sertif1 = $data->sertifikat1;
    $sertif2 = $data->sertifikat2;
    $sertif3 = $data->sertifikat3;
    $sertif4 = $data->sertifikat4;
    $sertif5 = $data->sertifikat5;
    $sertif6 = $data->sertifikat6;
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Detail</title>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.css"/>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css"/>

  <script type="text/javascript" src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/bootstrap/js/bootstraps.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/bootstrap/js/bootstraps.bundle.min.js"></script>

  <script type='text/javascript' src="<?php echo base_url();?>assets/jquery/jquery-3.3.1.js"> </script>
  <script type='text/javascript' src="<?php echo base_url();?>assets/jquery/jquery.min.js"> </script>
  <script type='text/javascript' src="<?php echo base_url();?>assets/jquery/jquery.js""> </script>
  <script type='text/javascript' src="<?php echo base_url();?>assets/jquery/jquery-ui.js""> </script>
  <script type='text/javascript' src="<?php echo base_url();?>assets/jquery/jquery-ui.min.js""> </script>
  <script type='text/javascript' src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="<?php echo base_url();?>assets/jquery/jquery-ui.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body style="background-color: #e4eef6">
  <div class="container shadow p-3 mb-5 bg-white rounded" style="background-color: #ffffff; width: 750px;margin-top: 50px">
    <h3 style="margin-left: 260px;">Lamaran Kerja</h3><br>
    <img src="<?php echo base_url()?>assets/img/<?php echo $fotoresmi;?>" width="150" height="200" style="margin-left: 280px"><br><br>
    <h5 style="margin-left: 100px; color: #8fd3d8">Biodata  :</h5>
    <div style="margin-left: 150px"> 
        <div class="form-group row"> 
          <label for="example-text-input" class="col-4 col-form-label" style="font-weight: bold;">Nama Lengkap</label>
          <div class="col-7">
          <label for="">: <?php echo $nama?></label>
          </div>
        </div>
        <div class="form-group row">
          <label for="example-text-input" class="col-4 col-form-label" style="font-weight: bold;">Tempat Lahir</label>
          <div class="col-7">
          <label for="">: <?php echo $tempat_lahir?></label>
          </div>
        </div>
        <div class="form-group row">
          <label for="example-text-input" class="col-4 col-form-label" style="font-weight: bold;">Tanggal Lahir</label>
          <div class="col-7">
          <label for="">: <?php echo $tanggal_lahir?></label>
          </div>
        </div>
        <div class="form-group row">
          <label for="example-text-input" class="col-4 col-form-label" style="font-weight: bold;">Jenis Kelamin</label>
          <div class="col-7">
          <label for="">: <?php echo $jenis_kelamin?></label>
          </div>
        </div>
        <div class="form-group row">
          <label for="example-text-input" class="col-4 col-form-label" style="font-weight: bold;">Alamat</label>
          <div class="col-7">
          <label for="">: <?php echo $alamat?></label>
          </div>
        </div>
        <div class="form-group row">
          <label for="example-text-input" class="col-4 col-form-label" style="font-weight: bold;">Telepon</label>
          <div class="col-7">
          <label for="">: <?php echo $telepon?></label>
          </div>
        </div>
        <div class="form-group row">
          <label for="example-text-input" class="col-4 col-form-label" style="font-weight: bold;">Email</label>
          <div class="col-7">
          <label for="">: <?php echo $email?></label>
          </div>
        </div>
        <div class="form-group row">
          <label for="example-text-input" class="col-4 col-form-label" style="font-weight: bold;">Jenjang Pendidikan Yang Diampu</label>
          <div class="col-7">
          <label for="">: <?php echo $jenjang_pendidikan?></label>
          </div>
        </div>
        <div class="form-group row">
          <label for="example-text-input" class="col-4 col-form-label" style="font-weight: bold;">Bidang Keahlian</label>
          <div class="col-7">
          <label for="">: <?php echo $bidang_keahlian?></label>
          </div>
        </div>
        <div class="form-group row">
          <label for="example-text-input" class="col-4 col-form-label" style="font-weight: bold;">Tarif Setiap Pertemuan</label>
          <div class="col-7">
          <label for="">: <?php echo $tarif?></label>
          </div>
        </div>
      </div>
      <h5 style="margin-left: 100px; color: #8fd3d8">Curriculum Vitae  :</h5>
        <div style="margin-left: 150px" class="form-group row">
          <label for="example-text-input" class="col-4 col-form-label" style="font-weight: bold;">Lihat CV</label>
          <div class="col-7">
            <button class="btn">Lihat</button>
          </div>
        </div><br>
        <h5 style="margin-left: 100px; color: #8fd3d8">Sertifikat Pendukung  :</h5>
        <div class="row" style="margin-left: 120px; margin-right: 120px;">
            <div class="col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                   data-image="<?php echo base_url()?>assets/img/<?php echo $sertif1;?>"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="<?php echo base_url()?>assets/img/<?php echo $sertif1;?>"
                         alt="Another alt text">
                </a>
            </div>
            <div class="col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                   data-image="<?php echo base_url()?>assets/img/<?php echo $sertif2;?>"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="<?php echo base_url()?>assets/img/<?php echo $sertif2;?>"
                         alt="Another alt text">
                </a>
            </div>
            <div class="col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                   data-image="<?php echo base_url()?>assets/img/<?php echo $sertif3;?>"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="<?php echo base_url()?>assets/img/<?php echo $sertif3;?>"
                         alt="Another alt text">
                </a>
            </div>
            <div class="col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                   data-image="<?php echo base_url()?>assets/img/<?php echo $sertif4;?>"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="<?php echo base_url()?>assets/img/<?php echo $sertif4;?>"
                         alt="Another alt text">
                </a>
            </div>
            <div class="col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                   data-image="<?php echo base_url()?>assets/img/<?php echo $sertif5;?>"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="<?php echo base_url()?>assets/img/<?php echo $sertif5;?>"
                         alt="Another alt text">
                </a>
            </div>
            <div class="col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                   data-image="<?php echo base_url()?>assets/img/<?php echo $sertif6;?>"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="<?php echo base_url()?>assets/img/<?php echo $sertif6;?>"
                         alt="Another alt text">
                </a>
            </div>
            <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="image-gallery-title"></h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img id="image-gallery-image" class="img-responsive col-md-12" src="">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
                        </button>

                        <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        </div><br>
        <a href="<?php echo base_url(); ?>index.php/c_admin/daftarpermintaan"><button class="btn btn-secondary" style="margin-left:650px;">Tutup</button></a>
  </div>
  <script type="text/javascript">
  let modalId = $('#image-gallery');

$(document)
  .ready(function () {

    loadGallery(true, 'a.thumbnail');

    //This function disables buttons when needed
    function disableButtons(counter_max, counter_current) {
      $('#show-previous-image, #show-next-image')
        .show();
      if (counter_max === counter_current) {
        $('#show-next-image')
          .hide();
      } else if (counter_current === 1) {
        $('#show-previous-image')
          .hide();
      }
    }
  function loadGallery(setIDs, setClickAttr) {
      let current_image,
        selector,
        counter = 0;

      $('#show-next-image, #show-previous-image')
        .click(function () {
          if ($(this)
            .attr('id') === 'show-previous-image') {
            current_image--;
          } else {
            current_image++;
          }

          selector = $('[data-image-id="' + current_image + '"]');
          updateGallery(selector);
        });
         function updateGallery(selector) {
        let $sel = selector;
        current_image = $sel.data('image-id');
        $('#image-gallery-title')
          .text($sel.data('title'));
        $('#image-gallery-image')
          .attr('src', $sel.data('image'));
        disableButtons(counter, $sel.data('image-id'));
      }

      if (setIDs == true) {
        $('[data-image-id]')
          .each(function () {
            counter++;
            $(this)
              .attr('data-image-id', counter);
          });
      }
      $(setClickAttr)
        .on('click', function () {
          updateGallery($(this));
        });
    }
      });

// build key actions
$(document)
  .keydown(function (e) {
    switch (e.which) {
      case 37: // left
        if ((modalId.data('bs.modal') || {})._isShown && $('#show-previous-image').is(":visible")) {
          $('#show-previous-image')
            .click();
        }
        break;

      case 39: // right
       if ((modalId.data('bs.modal') || {})._isShown && $('#show-next-image').is(":visible")) {
          $('#show-next-image')
            .click();
        }
        break;

      default:
        return; // exit this handler for other keys
    }
    e.preventDefault(); // prevent the default action (scroll / move caret)
  });
</script>
</body>