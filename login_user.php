<?php

ob_start();
session_start();
if(isset($con['nama'])) header("location: bukutamu_ulasan.php");
  include "koneksi.php";

  if(isset($_POST['submit_login'])) {
    $username = $_POST['nama'];
    $password = $_POST['no_hp'];
    $sql_login = mysqli_query($con, "SELECT * FROM registrasi WHERE nama = '$username' AND no_hp = '$password'");

    if(mysqli_num_rows($sql_login)>0) {
      $row_akun = mysqli_fetch_array($sql_login);
      $_SESSION['registrasi_nama'] = $row_akun['nama'];
      $_SESSION['registrasi_no_hp'] = $row_akun['no_hp'];
      $waktu_masuk = "UPDATE registrasi SET waktu_keluar = NOW()";
      $waktu_masuk .= " WHERE nama = '{$_SESSION['registrasi_nama']}' LIMIT 1";
      $sql_login = mysqli_query($con, $waktu_masuk);
      if (!$sql_login) {
        die("Database query failed");
      }
      header("location: bukutamu_ulasan.php");
    }else {
      header("location: login_user.php?login-gagal");
    }
  }

  ?>

  <html>
  <head>
    <title>STMIK SUMEDANG</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
  </head>

  <body>
    <div class="container text-center pt-3" align = "center">
      <a href='/aplikasi_daftar_tamu/index.php'><?php 

      $query = mysqli_query ($con, "SELECT * FROM gambar ORDER BY id DESC LIMIT 1");
      while($result = mysqli_fetch_array($query)) {
        ?> 

        <img class="img-responsive" style = "width: 100%; display:block; height: auto;" src="gambar/<?php echo $result['nama']; ?>"> <?php } ?></a>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <form action="" method="post">
              <table class="table">
                <div class="container text-center pt-5">
                 <h1 class="mb-5"> BUKU TAMU </h1>
               </div>


               <table width="542" border="0" align="center">
                <tbody>
                 <div class="form-group row">
                  <label for="example-email-input" class="col-2 col-form-label">Nama</label>
                  <label for="example-email-input" class="col-0 col-form-label">:</label>
                  <div class="col-9"> 
                    <input class="form-control" type="text" name="nama" value="" placeholder="Masukan Nama Anda" required="kanan"> </div>
                  </div>
                  <div class="form-group row">
                   <label for="example-email-input" class="col-2 col-form-label">Nomor Handphone</label>
                   <label for="example-email-input" class="col-0 col-form-label">:</label>
                   <div class="col-9"> <input class="form-control" type="text" name="no_hp" value="" placeholder="Masukan Nomor Handphone Anda" required> </div>
                 </div>

                 <?php 
                 if(isset($_GET['login-gagal'])) {?>
                 <tr>
                  <td style="text-align:center">
                    <div>
                      <p>Maaf, Username / Password yang Anda masukan Salah</p>
                    </div>
                  </td>
                </tr>
                <?php }?>
                <tr > 
                  <td style="text-align:center">
                    <button type="submit" class="btn btn-primary" name="submit_login" value="Kirim">Masuk</button>
                  </td>
                </tr>
                <tr > 
                </tbody></table>
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




