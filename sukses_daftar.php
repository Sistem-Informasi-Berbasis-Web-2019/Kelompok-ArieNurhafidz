<?php
include("koneksi.php");

$nama  = $_POST['nama'];
$asal  = $_POST['asal'];
$no_hp  = $_POST['no_hp'] ;
$tujuan  = $_POST['tujuan'];
$perihal = $_POST['perihal'];
$imagePath = $_POST['image'];

$qSQL = "INSERT INTO `registrasi`(`no`, `nama`, `asal`, `no_hp`, `tujuan`, `perihal`, `waktu_masuk`, `photo`) VALUES ('no','$nama','$asal','$no_hp','$tujuan','$perihal', NOW(), '$imagePath')";
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
  $query = mysqli_query ($con, "SELECT * FROM gambar ORDER BY id DESC LIMIT 1");
  while($result = mysqli_fetch_array($query)) {
  ?> 

    <img class="img-responsive" style = "width: 100%; display:block; height: auto;" src="gambar/<?php echo $result['nama']; ?>"> <?php } ?></a>
  </div>
  <div class="container">
   <div class="row">
    <div class="col-md-12">
     <form action="sukses_daftar.php" method="post">
       <table class="table">
        <div class="container text-center pt-5">

          <?php 
          $query = mysqli_query ($con, "SELECT * FROM data_pegawai WHERE nama = '$tujuan'");
          $result = mysqli_fetch_array($query);
          ?> 

          <h1 class="mb-5"> BUKU TAMU </h1>
          <h4 class="mb-2"> Halo Bapak/Ibu <?php echo "$nama"; ?>, selamat datang di Kampus STMIK Sumedang. Bapak/Ibu <?php echo "$tujuan"; ?> berada di
           <?php if ($tujuan) {
             echo $result['ruangan'];
            } ?>.Terimakasih. </h4> 
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