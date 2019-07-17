<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/dashboard.css">
<body style="background: #85b86b">
    <div class="wrapper">
            <section class="blog bgwhite p-t-20 p-b-30">
            <div class="container">
                <form style="margin-top: 30px;">
                    <h1 style="margin-left: 500px; padding-top: 30px;">Profil</h1>
                    <img src="<?php echo base_url(); ?>assets/img/background8.jpg" alt="Elsa Akhmal" class="avatar" style="margin-top: 20px; margin-left: 450px;"><br><br><br>
                    <div class="baris">
                        <div class="col-25">
                            <label for="fname">Nama Lengkap</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="fname" name="firstname" placeholder="Elsa Akhmal Rohmianti" style="background-color: white;" disabled>
                        </div>
                    </div>
                    
                    <div class="baris">
                        <div class="col-25">
                            <label for="Tanggal">Tanggal Lahir</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="ttl" name="ttl" placeholder="10 January 1997" style="background-color: white;" disabled>
                        </div>
                    </div>
                    <div class="baris">
                        <div class="col-25">
                            <label for="jeniskelamin">Jenis Kelamin</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="jk" name="jeniskelamin" placeholder="Perempuan" style="background-color: white;" disabled>
                        </div>
                    </div>
                    <div class="baris">
                        <div class="col-25">
                            <label for="alamat">Alamat</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="alamat" name="alamat" placeholder="Jln. Kertanegara" style="background-color: white;" disabled>
                        </div>
                    </div>
                    <div class="baris">
                        <div class="col-25">
                            <label for="telepon">No. Telp</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="telepon" name="telepon" placeholder="08256317387687" style="background-color: white;" disabled>
                        </div>
                    </div>
                    <div class="baris">
                        <div class="col-25">
                            <label for="email">Email</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="email" name="email" placeholder="elsabisa@gmail.com" style="background-color: white;" disabled>
                        </div>
                    </div>
                    <div class="baris">
                        <div class="col-25">
                            <label for="pendidikan">Pendidikan Saat Ini</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="pendidikan" name="pendidikan" placeholder="SMA" style="background-color: white;" disabled>
                        </div>
                    </div>
                    <div class="baris">
                        <div class="col-25">
                            <label for="tentang">Tentang</label>
                        </div>
                        <div class="col-75">
                            <textarea type="text" id="tentang" name="tentang" placeholder="nom nom nom nom" style="height:200px; background-color: white;" disabled></textarea>
                        </div>
                    </div>
                    <div>
                        <button class="btn btn-success" style="padding: 2px 10px 2px 10px; 
                        color: white; margin-bottom: 10px;">Kembali</button>
                    </div>
                </form>
            </div>
        </section>
    </div>
</body>

<style type="text/css">
    .col-25{
        margin-left: 70px;
    }
    .col-75{
        width: 60%;
    }
    .container{
        margin-left: 200px;
    }
    .avatar {
    vertical-align: middle;
    width: 150px;
    height: 150px;
    border-radius: 100%;
    }

</style>
