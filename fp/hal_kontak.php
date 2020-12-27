<?php 

include 'koneksi.php';

$sql = "SELECT nama_kontak,link_kontak FROM kontak";
$result = mysqli_query($mysqli, $sql);

 ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>KONTAK</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/Logo.PNG" rel="icon">
  <link href="assets/img/Logo.PNG" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Sailor - v2.3.0
  * Template URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo"><a href="index.html"><img src="Logo.PNG" height="200px" width="80px" alt=""></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block ml-auto">

        <ul>
          <li><a href="index.html">Beranda</a></li>
          <li class="active"><a href="kepengurusan.html">Organisasi</a></li>
          <li><a href="#">Kegiatan</a></li>
          <li><a href="dokumentasi.html">Dokumentasi</a></li>
          <li><a href="pricing.html">Info Desa</a></li>
          <li><a href="blog.html">Kontak</a></li>
        </ul>

      </nav><!-- .nav-menu -->


    </div>
  </header><!-- End Header -->
      
 


  <h1 class="display-6" style="padding-top: 150px;">organisasi</h1>
  <div class="p-detail-kegiatan">
	

	<p size="50px">KONTAK</p><br>

	<div class="card">
		<div class="container">

			<?php
            while($record = mysqli_fetch_array($result)){
        	?>

		<p > <?= $record['nama_kontak'] ?> : <?= $record['link_kontak'] ?> </p>
		<?php 
			}
		 ?>

		</div>
	</div>
</body>
</html>

