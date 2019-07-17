<?php
  foreach ($data_guru as $data) {
    $nama = $data->nama;
    $tempat_lahir = $data->tempat_lahir;
    $tanggal_lahir = $data->tanggal_lahir;
    $jenis_kelamin = $data->jenis_kelamin;
    $alamat = $data->alamat;
    $telepon = $data->telepon;
    $email = $data->email;
    $jenjang_pendidikan = $data->jenjang_pendidikan;
    $bidang_keahlian = $data->bidang_keahlian;
    $tentang = $data->tentang;
    $foto = $data->foto;
  }

?>

<link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.4.0/css/bootstrap4-toggle.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.4.0/js/bootstrap4-toggle.min.js"></script>

<div class="container-fluid">
    <div class="part-title" style="padding: 20px;">
        <h3>Profil</h3>
    </div>
    <div class="isi">
  <nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-profil-tab" data-toggle="tab" href="#nav-profil" role="tab" aria-controls="nav-profil" aria-selected="true">Profil</a>
    <a class="nav-item nav-link" id="nav-prestasi-tab" data-toggle="tab" href="#nav-prestasi" role="tab" aria-controls="nav-prestasi" aria-selected="false">Prestasi</a>
    <a class="nav-item nav-link" id="nav-rating-tab" data-toggle="tab" href="#nav-rating" role="tab" aria-controls="nav-rating" aria-selected="false">Rating</a>
    <a class="nav-item nav-link" id="nav-gaji-tab" data-toggle="tab" href="#nav-gaji" role="tab" aria-controls="nav-gaji" aria-selected="false">Gaji</a>
  </div>
  </nav><br><br>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-profil" role="tabpanel" aria-labelledby="nav-profil-tab">
    <h3>Elsa Akhmal</h3>
    <div class="form-check pl-0">
      <input id="stackedCheck1" class="form-check-input" type="checkbox" data-toggle="toggle" data-width="80" data-height="30" checked>&nbsp;&nbsp;
      <label for="stackedCheck1" class="form-check-label">Aktif</label><br><br>
    </div>
    <label style="font-weight: bold;">Status : &nbsp; &nbsp; &nbsp;<button type="button" class="btn btn-primary" style="padding-top: 0px; padding-bottom: 0px;">AKTIF</button></label><br><br>
    <div class="form-group row">
      <label for="example-text-input" class="col-2 col-form-label">Nama Lengkap</label>
      <div class="col-10">
      <input class="form-control" type="text" value="<?php echo $nama?>" id="example-text-input" disabled>
    </div>
    </div>
    <div class="form-group row">
      <label for="example-text-input" class="col-2 col-form-label">Tempat Lahir</label>
      <div class="col-10">
      <input class="form-control" type="text" value="<?php echo $tempat_lahir?>" id="example-text-input" disabled>
    </div>
    </div>
    <div class="form-group row">
      <label for="example-text-input" class="col-2 col-form-label">Tanggal Lahir</label>
        <div class="col-10">
        <input class="form-control" type="text" value="<?php echo $tanggal_lahir?>" id="example-text-input" disabled>
        </div>
    </div>
    <div class="form-group row">
      <label for="example-text-input" class="col-2 col-form-label">Jenis Kelamin</label>
      <div class="col-10">
      <input class="form-control" type="text" value="<?php echo $jenis_kelamin?>" id="example-text-input" disabled>
      </div>
    </div>
    <div class="form-group row">
      <label for="example-text-input" class="col-2 col-form-label">Alamat</label>
      <div class="col-10">
      <input class="form-control" type="text" value="<?php echo $alamat?>" id="example-text-input" disabled>
      </div>
    </div>
    <div class="form-group row">
      <label for="example-text-input" class="col-2 col-form-label">Telepon</label>
      <div class="col-10">
      <input class="form-control" type="text" value="<?php echo $telepon?>" id="example-text-input" disabled>
      </div>
    </div>
    <div class="form-group row">
      <label for="example-text-input" class="col-2 col-form-label">Email</label>
      <div class="col-10">
      <input class="form-control" type="text" value="<?php echo $email?>" id="example-text-input" disabled>
      </div>
    </div>
    <div class="form-group row">
      <label for="example-text-input" class="col-2 col-form-label">Jenjang Pendidikan Yang Diampu</label>
      <div class="col-10">
      <input class="form-control" type="text" value="<?php echo $jenjang_pendidikan?>" id="example-text-input" disabled>
      </div>
    </div>
    <div class="form-group row">
      <label for="example-text-input" class="col-2 col-form-label">Bidang Keahlian</label>
      <div class="col-10">
      <input class="form-control" type="text" value="<?php echo $bidang_keahlian?>" id="example-text-input" disabled>
      </div>
    </div>
    <div class="form-group row">
      <label for="example-text-input" class="col-2 col-form-label">Tentang</label>
      <div class="col-10">
      <textarea style="height: 200px" class="form-control" type="text" id="example-text-input" disabled><?php echo $tentang?></textarea>
      </div>
    </div>
    <a href="<?php echo base_url(); ?>index.php/c_guru/edit_profil_guru"><button style="margin-left: 450px;" type="button" class="btn btn-success">Edit</button></a>
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
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"
                   data-image="<?php echo base_url(); ?>assets/img/background5.jpg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="<?php echo base_url(); ?>assets/img/background5.jpg"
                         alt="Another alt text">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"
                   data-image="<?php echo base_url(); ?>assets/img/background5.jpg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="<?php echo base_url(); ?>assets/img/background5.jpg"
                         alt="Another alt text">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"
                   data-image="<?php echo base_url(); ?>assets/img/background5.jpg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="<?php echo base_url(); ?>assets/img/background5.jpg"
                         alt="Another alt text">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"
                   data-image="<?php echo base_url(); ?>assets/img/background5.jpg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="<?php echo base_url(); ?>assets/img/background5.jpg"
                         alt="Another alt text">
                </a>
            </div>
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
      <h2 style="margin-top: 80px; margin-left: 350px;color: grey">
        Rp. 2000000
      </h2>
    </div>
  </div>
  </div>
  
</div>
    </div>
</div>

<style type="text/css">
  .btn:focus, .btn:active, button:focus, button:active {
  outline: none !important;
  box-shadow: none !important;
}

#image-gallery .modal-footer{
  display: block;
}

.thumb{
  margin-top: 15px;
  margin-bottom: 15px;
}
.square{
  border: 1px solid #e8e8e8;
  padding: 5px;
  margin: 2px;
}
.checked{
  color: orange;
}
</style>

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