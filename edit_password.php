<?php

ob_start();
session_start();
if(!isset($_SESSION['admin_user_name'])) header("location: login_admin.php");
    include "koneksi.php";

    ?>


    <html>
    <head>
        <title>STMIK SUMEDANG</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    </head>

    <body>
        <div class="container text-center pt-3" align = "center">
            <a href='/aplikasi_daftar_tamu/index.php'>

                <?php 

                $query = mysqli_query ($con, "SELECT * FROM gambar ORDER BY id DESC LIMIT 1");
                while($result = mysqli_fetch_array($query)) {
                    ?> 

                    <img class="img-responsive" style = "width: 100%; display:block; height: auto;" src="gambar/<?php echo $result['nama']; ?>"> <?php } ?></a>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="edit_password_sukses.php" method="post">
                                <table class="table">
                                    <div class="container text-center pt-5">
                                       <h1 class="mb-5"> - HALO - </h1>
                                   </div>


                                   <table width="542" border="0" align="center">
                                      <tbody>
                                       <div class="form-group row">
                                        
                                          
                                           <div class="col-12" > 
                                            <input class="form-control" type="text" name="password" placeholder="Masukan Password Baru" id="password" > </div>
                                        </div>
                                        <tr > 
                                            <td style="text-align:center">
                                                <button type="submit" class="btn btn-primary" align="center">Simpan</button>
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