<?php
ob_start();
session_start();
if(!isset($_SESSION['admin_user_name'])) header("location: login_admin.php");
  include "koneksi.php";
  $page = null;
  if (isset($_GET["page"]))  {
    $page = $_GET["page"];
  } else {
    $page = 1;
  }

  include("koneksi.php"); 
  ?>

  <html>
  <head>
    <title>STMIK SUMEDANG</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
  </head>
  <body>
    <div class=""> <a class="btn btn-outline-primary btn-sm" href="logout_admin.php"> LOGOUT</a> </div>
    <div class="container text-center" align = "center">
      <a href='/aplikasi_daftar_tamu/admin.php'> <?php 

      $query = mysqli_query ($con, "SELECT * FROM gambar ORDER BY id DESC LIMIT 1");
      while($result = mysqli_fetch_array($query)) {
        ?> 

        <img class="img-responsive" style = "width: 100%; display:block; height: auto;" src="gambar/<?php echo $result['nama']; ?>"> <?php } ?></a>
      </div>
      <div class="container text-center pt-5">
       <h4 class="mb-1"> DATA BUKU TAMU </h4>
       <h4 class="mb-1"> STMIK SUMEDANG </h4>
       <a href="excel.php">Export ke Excell</a>
     </div>
     <div align="center">
       <div class="col-md-0">
        <table class="table table-bordered" style="margin-top:20px;" align="center">
          <thead>
           <tr>
            <th>NO</th>
            <th>FOTO</th>
            <th>NAMA</th>
            <th>ASAL</th>
            <th>NOMOR HP</th>
            <th>TUJUAN</th>
            <th>PERIHAL</th>
            <th>KEPUASAN</th>
            <th>ULASAN</th>
            <th>WAKTU MASUK</th>
            <th>WAKTU KELUAR</th>
          </tr>
        </thead>
        <?php 
        $sql2 = "SELECT COUNT(*) as total FROM registrasi";
        $totalPageQuery = mysqli_query ($con,$sql2);
        $totalPage = mysqli_fetch_array($totalPageQuery)["total"];

        $results_per_page = 10;
        $startIndex = $results_per_page * ($page - 1);
        $sql = "SELECT * FROM registrasi ORDER by no DESC LIMIT $startIndex,$results_per_page";

        $query = mysqli_query ($con,$sql);
        while($result = mysqli_fetch_array($query)) {
         ?> 
         <tr>
          <td><?php echo $result['no']; ?></td>
          <td><img src="<?php echo $result['photo']; ?>"></td>
          <td><?php echo $result['nama']; ?></td>
          <td><?php echo $result['asal']; ?></td>
          <td><?php echo $result['no_hp']; ?></td>
          <td><?php echo $result['tujuan']; ?></td>
          <td><?php echo $result['perihal']; ?></td>
          <td><?php echo $result['kepuasan'];?></td>
          <td><?php echo $result['ulasan'];?></td>
          <td><?php echo $result['waktu_masuk']; ?></td>
          <td><?php echo $result['waktu_keluar']; ?></td>
        </tr>
        <?php } 
        $number_of_pages = ceil($totalPage/$results_per_page);
        if (!isset($_GET['page'])) {
          $page = 1;
        } else {
          $page = $_GET['page'];
        }
        for ($page=1;$page<=$number_of_pages;$page++) {
          echo '<a href="lihat_data_tamu.php?page=' . $page . '">' . $page . '</a> ';
        }
        ?>
      </table>
    </div>	
    <?php for ($page=1;$page<=$number_of_pages;$page++) {
      echo '<a href="lihat_data_tamu.php?page=' . $page . '">' . $page . '</a> ';} ?>
      <div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
    </div>
  </body>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/modules/exporting.js"></script>
  <script src="https://code.highcharts.com/modules/export-data.js"></script>
  <script type="text/javascript">

    <?php
    $query = mysqli_query($con, "SELECT kepuasan, count(*) as number FROM registrasi GROUP BY kepuasan");
    ?>
  // Build the chart
  Highcharts.chart('container', {
    chart: {
      plotBackgroundColor: null,
      plotBorderWidth: null,
      plotShadow: false,
      type: 'pie'
    },
    title: {
      text: 'Tingkat Kepuasan Tamu Saat Berkunjung'
    },
    tooltip: {
      pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
      pie: {
        allowPointSelect: true,
        cursor: 'pointer',
        dataLabels: {
          enabled: true,
          format: '<b>{point.name}</b>: {point.percentage:.1f} %',
          style: {
            color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
          }
        },
        showInLegend: true
      }
    },
    series: [{
      name: 'TIngkat Kepuasan',
      colorByPoint: true,
      data: [
      <?php while($data = mysqli_fetch_assoc($query)) {?>
       {name:<?php 
        if($data['kepuasan'] == null){
          $data['kepuasan'] = "none";
        }
        echo json_encode($data['kepuasan']);?>,
        y:<?php echo $data['number'];?>},
        <?php } ?>          
        ]

      }]
    });
  </script>
  </html>

  <?php
  mysqli_close($con);
  ob_end_flush();
  ?>