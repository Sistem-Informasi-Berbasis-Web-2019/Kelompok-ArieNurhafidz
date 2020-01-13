<html>
<head>
    <meta charset="UTF-8">
    <title>STMIK SUMEDANG</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<?php
?>
<?php 
include("koneksi.php");
$query = mysqli_query ($con, "SELECT * FROM gambar ORDER BY id DESC LIMIT 1");
while($result = mysqli_fetch_array($query)) {
    ?> 
    <body>
        <div class="container text-center pt-3" align = "center" >
            <a href='/aplikasi_daftar_tamu/index.php'><img class="img-responsive" style = "width: 100%; display:block; height: auto;" class="img-responsive" style = "width: 100%; display:block; height: auto;" src="gambar/<?php echo $result['nama']; ?>"> <?php } ?>
            </a>

            <div class="container text-center pt-5">
               <h1 class="mb-5"> BUKU TAMU </h1>
           </div>
       </div>
       <div class="container text-center pt-10">
        <a class="btn btn-outline-primary btn-lg" href="bukutamu_registrasi.php"> REGISTRASI </a>
        <a class="btn btn-outline-primary btn-lg" href="login_user.php"> ULASAN </a>
    </div>
    
    <script type="text/javascript" src='bootstrap/js/bootstrap.min.js'></script>
</body>
</html>
