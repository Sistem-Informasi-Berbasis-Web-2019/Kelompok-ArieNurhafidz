<?php
ob_start();
session_start();
if(!isset($_SESSION['admin_user_name'])) header("location: login_admin.php");
  include "koneksi.php";

  

  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename=Daftar Tamu.xls");
  ?>

  <html>
  <head>
    <title>STMIK SUMEDANG</title>
  </head>
  <body>
    <div class="container text-center pt-5">
     <h4 class="mb-1" align="center"> DATA BUKU TAMU DISKOMINFO </h4>
     <h4 class="mb-1" align="center"> PROVINSI JAWA BARAT </h4>
   </div>
   <div class="container" align="center">
    <div class="col-md-0">
      <table  border="1" class="table table-bordered" style="margin-top:20px;" align="center">
        <tr>
          <th>NO</th>
          <th>NAMA</th>
          <th>ASAL</th>
          <th>NOMOR HP</th>
          <th>TUJUAN</th>
          <th>PERIHAL</th>
          <th>ULASAN</th>
          <th>WAKTU MASUK</th>
          <th>WAKTU KELUAR</th>
        </tr>
        <?php 
        $query = mysqli_query ($con, "SELECT * FROM registrasi ORDER BY no ASC");
        while($result = mysqli_fetch_array($query)) {
          ?> 
          <tr>
            <td><?php echo $result['no']; ?></td>
            <td><?php echo $result['nama']; ?></td>
            <td><?php echo $result['asal']; ?></td>
            <td><?php echo $result['no_hp']; ?></td>
            <td><?php echo $result['tujuan']; ?></td>
            <td><?php echo $result['perihal']; ?></td>
            <td><?php echo $result['ulasan']; ?></td>
            <td><?php echo $result['waktu_masuk']; ?></td>
            <td><?php echo $result['waktu_keluar']; ?></td>
          </tr>
          <?php } ?>
        </table>
      </div>  
    </div>
  </body>
  </html>

  <?php
  mysqli_close($con);
  ob_end_flush();
  ?>