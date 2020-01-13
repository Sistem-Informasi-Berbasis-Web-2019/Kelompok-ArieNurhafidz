<!DOCTYPE html>
<html>

<head>
    <title>STMIK SUMEDANG</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="bootstrap/css/style.css" />
</head>

<body>
    <div class="container text-center pt-3" align="center">
        <a href='/aplikasi_daftar_tamu/index.php'>
            <?php 
            include("koneksi.php");
            $query = mysqli_query ($con, "SELECT * FROM gambar ORDER BY id DESC LIMIT 1");
            while($result = mysqli_fetch_array($query)) {
                ?>

                <img class="img-responsive" style="width: 100%; display:block; height: auto;" src="gambar/<?php echo $result['nama']; ?>">
                <?php } ?>
            </a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form action="sukses_daftar.php" method="post" id="regis_form">
                      <input type="hidden" name="image" value="" id="image_input">
                      <table class="table">
                        <div class="container text-center pt-5">
                            <h1 class="mb-5"> BUKU TAMU </h1>
                        </div>
                        <style>
                        #wrapper {
                           width: 300px;
                           margin: 0 auto;
                       }
                   </style>
                   <div class="app" id="wrapper">

                    
                    <div id="my_camera" style="width:320px; height:240px; display: inline-block;"></div>
                    
                    
                    <div align="center"><button id="snap_photo" style="display:block">Take Photo</button></div>

                    <img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" id="image_snap" style="width:320px; height:240px; display: inline-block; vertical-align: inherit"/>

                </div>
                <table width="542" border="0" align="center">
                    <tbody>

                        <div class="form-group row">
                            <label for="example-email-input" class="col-2 col-form-label">Nama</label>
                            <label for="example-email-input" class="col-0 col-form-label">:</label>
                            <div class="col-9">
                                <input class="form-control" type="text" name="nama" placeholder="Masukan Nama" id="nama " required> </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-email-input" class="col-2 col-form-label">Asal</label>
                                <label for="example-email-input" class="col-0 col-form-label">:</label>
                                <div class="col-9">
                                    <input class="form-control" type="text" name="asal" placeholder="Masukan Asal" id="asal"> </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-email-input" class="col-2 col-form-label">Nomor Handphone</label>
                                    <label for="example-email-input" class="col-0 col-form-label">:</label>
                                    <div class="col-9">
                                        <input class="form-control" type="text" name="no_hp" placeholder="Masukan No Hp" id="no_hp" required> </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-search-input" class="col-2 col-form-label">Tujuan ke</label>
                                        <label for="example-search-input" class="col-0 col-form-label">:</label>
                                        <div class="col-9">
                                            <select class="form-control" id="tujuan" name="tujuan">
               
                                                <?php 
                                                $query = mysqli_query ($con, "SELECT * FROM data_pegawai  ");
                                                while($result = mysqli_fetch_array($query)) {
                                                    ?>
                                                    <option value="<?php echo $result['nama']; ?>">
                                                        <?php echo $result['nama']; ?>
                                                    </option>
                                                    <?php } ?>

                                                </select>
                                            </div>
                                        </div>
                                    </tbody>
                                </table>
                                <div class="form-group row">
                                    <label for="example-email-input" class="col-2 col-form-label">Perihal</label>
                                    <label for="example-email-input" class="col-0 col-form-label">:</label>
                                    <div class="col-9">
                                        <input class="form-control" type="text" name="perihal" placeholder="Masukan Perihal" id="perihal"> </div>
                                    </div>
                                    <tr>
                                        <td style="text-align:center">
                                            <input type="button" class="btn btn-primary" align="center" id="simpan" value="Simpan" />
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>

                <script type="text/javascript" src="js/webcam.js"></script>
                <script type="text/javascript">
                  document.rea
                  var btnPhoto = document.getElementById('snap_photo');
                  var image_snap = document.getElementById('image_snap');
                  var simpan = document.getElementById('simpan');
                  var regis_form = document.getElementById('regis_form');
                  var image_input = document.getElementById('image_input');

                  Webcam.attach( '#my_camera' );

                  btnPhoto.onclick = function(e) {
                    e.preventDefault();
                    take_snapshot();
                }

                simpan.onclick = function(e) {
                    e.preventDefault();
                    var fileName = "foto_tamu/" + Date.now() + ".jpg";
                    var imageUri = image_snap.src;
                    Webcam.upload(imageUri, "upload.php?filename=" + fileName, function(code, text) {
                      if (code == 200) {
                        image_input.value = fileName;
                        regis_form.submit();
                    };
                    console.log(code);
                });
                }

                function take_snapshot() {
                    Webcam.snap( function(data_uri) {
                      image_snap.src = data_uri;
                  } );
                }
            </script>
        </body>

        </html>