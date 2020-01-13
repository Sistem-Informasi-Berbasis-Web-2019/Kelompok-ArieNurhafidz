<?php

ob_start();
session_start();
if(!isset($_SESSION['registrasi_nama'])) header("location: login_user.php");
    include "koneksi.php";

    ?>
    <?php



    ?>

    <html>
    <head>
        <title>STMIK SUMEDANG</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    </head>

    <body>
        <div class="container text-left pt-1"> <a class="btn btn-outline-primary btn-sm" href="logout_admin.php"> LOGOUT</a> </div>
        <div class="container text-center pt-3" align = "center">
            <a href='/aplikasi_daftar_tamu/index.php'> <?php 

            $query = mysqli_query ($con, "SELECT * FROM gambar ORDER BY id DESC LIMIT 1");
            while($result = mysqli_fetch_array($query)) {
                ?> 

                <img class="img-responsive" style = "width: 100%; display:block; height: auto;" src="gambar/<?php echo $result['nama']; ?>"> <?php } ?></a>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <form action="bukutamu_ulasan_sukses.php" method="post">
                            <table class="table">
                                <div class="container text-center pt-5">
                                   <h1 class="mb-5"> BUKU TAMU </h1>
                               </div>


                               <table width="542" border="0" align="center">
                                  <tbody>
                                    <div align="center">
                                        <p>Apakah Pelayanan Kami Memuaskan?</p>
                                        <label>
                                            <img src="gambar/ceklis.png" style="width: 50px; display: block; height: auto;">
                                            <input type="radio" class="radio_item" name="kepuasan" value="puas" />
                                            <p>Puas</p>
                                        </label>
                                        <label>
                                            <img src="gambar/silang.png" style="width: 50px; display: block; height: auto;">
                                            <input type="radio" class="radio_item" name="kepuasan" value="tidak puas" />
                                            <p>Tidak Puas</p>
                                        </label>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-email-input" class="col-2 col-form-label">Ulasan :</label>
                                        <div class="col-10"> 
                                            <input class="form-control" type="text" name="ulasan" placeholder="Masukan Ulasan Anda"  id="ulasan"> </div>
                                        </div>
                                        <tr > 
                                            <td style="text-align:center">
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </body>
                </html>

                

                <?php
                
                mysqli_close($con);
                ob_end_flush();

                ?>