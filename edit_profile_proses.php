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
  <body>
    <div class="container text-left pt-1"> <a class="btn btn-outline-primary btn-sm" href="logout_admin.php"> LOGOUT</a> </div>
    <div class="container text-center pt-3" align = "center">
      <a href='/aplikasi_daftar_tamu/admin.php'>

        <?php 
        $query = mysqli_query ($con, "SELECT * FROM gambar ORDER BY id DESC LIMIT 1");
        while($result = mysqli_fetch_array($query)) {
          ?> 

          <img class="img-responsive" style = "width: 100%; display:block; height: auto;" src="gambar/<?php echo $result['nama']; ?>"> <?php } ?></a>
          <div class="container text-center pt-5">
           <h1 class="mb-5"> - HALO - </h1>
         </div>
       </div>
       <div class="container text-center pt-10">
        <body>
          <form method="post" enctype="multipart/form-data" action="edit_profile_proses.php">
            <input type="file" name="gambar" class="btn btn-outline-primary btn-lg" >
            <input class="btn btn-outline-primary btn-lg" type="submit" value="Upload">
          </form>
        </body>
      </div>
      <script type="text/javascript" src='bootstrap/js/bootstrap.min.js'></script>
    </body>
    </html>


    <?php
    $nama_file = $_FILES['gambar']['name'];
    $ukuran_file = $_FILES['gambar']['size'];
    $tipe_file = $_FILES['gambar']['type'];
    $tmp_file = $_FILES['gambar']['tmp_name'];

    $path = "gambar/".$nama_file;
    if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){ 
      if($ukuran_file <= 5000000){ 
        if(move_uploaded_file($tmp_file, $path)){ 
          $qSQL = "INSERT INTO gambar (nama,ukuran,tipe) VALUES('".$nama_file."','".$ukuran_file."','".$tipe_file."')";

          mysqli_query($con, $qSQL); 
          if(mysqli_query($con, $qSQL)){ 
            header("location: edit_profile.php"); 
          }else{
            echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
            echo "<br><a href='edit_profile.php'>Kembali Ke Form</a>";
          }
        }else{
          echo "Maaf, Gambar gagal untuk diupload.";
          echo "<br><a href='edit_profile.php'>Kembali Ke Form</a>";
        }
      }else{
        echo "Maaf, Ukuran gambar yang diupload tidak boleh lebih dari 1MB";
        echo "<br><a href='edit_profile.php'>Kembali Ke Form</a>";
      }
    }else{
      echo "<p align=center>Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG</p>";

    }
    ?>


    <div class="container text-center pt-5">
     <h1 class="mb-5"> - HALO - </h1>
   </div>


   <?php
   mysqli_close($con);
   ob_end_flush();
   ?>