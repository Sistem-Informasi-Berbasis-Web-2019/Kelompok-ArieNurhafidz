<?php

ob_start();
session_start();
if(!isset($_SESSION['admin_user_name'])) header("location: login_admin.php");
    include "koneksi.php";

    ?>

    <html>
    <head>
        <meta charset="UTF-8">
        <title>STMIK SUMEDANG</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    </head>
    <?php
    ?>
    <body>
        <div class="text-left pt-1"> <a class="btn btn-outline-primary btn-sm" href="logout_admin.php"> LOGOUT</a> </div>
        <div class="container text-center pt-3" align = "center">
            <a href='/aplikasi_daftar_tamu/admin.php'><?php 

            $query = mysqli_query ($con, "SELECT * FROM gambar ORDER BY id DESC LIMIT 1");
            while($result = mysqli_fetch_array($query)) {
                ?> 

                <img class="img-responsive" style = "width: 100%; display:block; height: auto;" src="gambar/<?php echo $result['nama']; ?>"> <?php } ?></a>

                <div class="container text-center pt-5">
                   <h1 class="mb-5"> - HALO - </h1>
               </div>
           </div>
           <div class="container text-center pt-10">
            <a class="btn btn-outline-primary btn-lg" href="lihat_data.php"> LIHAT DATA </a>
            <a class="btn btn-outline-primary btn-lg" href="tambah.php"> EDIT WEBSITE </a>
        </div>
        
        <script type="text/javascript" src='bootstrap/js/bootstrap.min.js'></script>
    </body>
    </html>

    <?php
    
    mysqli_close($con);
    ob_end_flush();

    ?>