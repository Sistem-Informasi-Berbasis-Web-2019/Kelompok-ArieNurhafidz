<?php 
include("koneksi.php");
$query = mysqli_query ($con, "SELECT * FROM gambar ORDER BY id DESC LIMIT 1");
while($result = mysqli_fetch_array($query)) {
    ?> 

    <html>
    <head>
        <meta charset="UTF-8">
        <title>STMIK SUMEDANG</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    </head>
    <body>
        <div class="text-left pt-1"> <a class="btn btn-outline-primary btn-sm" href="login_admin.php"> ADMIN</a> </div>
        <div class="container text-center pt-0" align = "ascenter">
         <img class="img-responsive" style = "width: 100%; display:block; height: auto;" src="gambar/<?php echo $result['nama']; ?>"> 
         <?php } ?>

         <?php 
         $query = mysqli_query ($con, "SELECT * FROM tambah ORDER BY no DESC LIMIT 1");
         while($result = mysqli_fetch_array($query)) {
            ?> 

            <div class="text-center pt-5">
               <h1 class="mb-10"> <marquee direction="left" scrollamount="20" align="center"> <?php echo $result['runtext']; ?> </marquee> </h1>
           </div><?php } ?>
       </div>
       <div class="container text-center pt-10">
        <a class="btn btn-outline-primary btn-lg" href="bukutamu.php"> BUKU TAMU </a>
    </div>
    <script type="text/javascript" src='bootstrap/js/bootstrap.min.js'></script>
</body>
</html>