<?php

ob_start();
session_start();
if(!isset($_SESSION['registrasi_nama'])) header("location: login_user.php");
  include "koneksi.php";

  ?>


  <?php
  include("koneksi.php");

  error_reporting(0);
  $ulasan  = $_POST['ulasan'];
  $kepuasan = $_POST['kepuasan'];

  $qSQL = "UPDATE  `registrasi` SET ulasan = '$ulasan', kepuasan = '$kepuasan' WHERE nama='" . $_SESSION['registrasi_nama'] . "'";

  mysqli_query($con, $qSQL);
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
     <form action="bukutamu_ulasan_sukses.php" method="post">
       <table class="table">
        <div class="container text-center pt-5">

         <h1 class="mb-5"> BUKU TAMU </h1>
         <h4 class="mb-2"> Halo Bapak/Ibu <?php echo $_SESSION['registrasi_nama']; ?>, terimakasih telah berkunjung di Kampus STMIK Sumedang.</h4>


       </div>

       <td style="text-align:center">
        <a class="btn btn-outline-primary btn-md" href='bukutamu.php'> SELESAI </a>
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