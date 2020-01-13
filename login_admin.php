<?php
ob_start();
session_start();
if(isset($con['user_name'])) header("location: admin.php");
  include "koneksi.php";

  if(isset($_POST['submit_login'])) {
    $username = $_POST['user_name'];
    $password = md5($_POST['password']);
    $sql_login = mysqli_query($con, "SELECT * FROM admin WHERE user_name = '$username' AND password = '$password'");

    if(mysqli_num_rows($sql_login)>0) {
      $row_akun = mysqli_fetch_array($sql_login);
      $_SESSION['admin_user_name'] = $row_akun['user_name'];
      $_SESSION['admin_password'] = $row_akun['password'];
      header("location: admin.php");
    }else {
      header("location: login_admin.php?login-gagal");
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
              <form action="" method="post">
                <table class="table">
                  <div class="container text-center pt-5">
                   <h1 class="mb-5"> BUKU TAMU </h1>
                 </div>

                 <table width="542" border="0" align="center">
                  <tbody>
                   <div class="form-group row">
                    <label for="example-email-input" class="col-2 col-form-label">User Name</label>
                    <label for="example-email-input" class="col-0 col-form-label">:</label>
                    <div class="col-9"> 
                      <input class="form-control" type="text" name="user_name" value="" placeholder="User Name" required="kanan"> </div>
                    </div>
                    <div class="form-group row">
                     <label for="example-email-input" class="col-2 col-form-label">Password</label>
                     <label for="example-email-input" class="col-0 col-form-label">:</label>
                     <div class="col-9"> <input class="form-control" type="password" name="password" value="" placeholder="Kata Sandi" required> </div>
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


