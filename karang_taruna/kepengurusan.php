<?php 

include 'koneksi.php';

$sql = "SELECT nama_pemuda, nama_jabatan FROM tb_pemuda, tb_jabatan WHERE tb_jabatan.id_jabatan = tb_pemuda.id_jabatan ";
$result = mysqli_query($koneksi, $sql);

 ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Organisasi</title>
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

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

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
	

	<p>Setiap organisasi tentunya memiliki kegiatan untuk dilaksanakan supaya perkumpulan nampak lebih hidup. Begitupun dengan karang taruna, kegiatan yang kita lakukan tak terlepas dari tugas utama serta kegiatan untuk menangani berbagai masalah sosial.</p><br>
	
	<h3>Struktur Kepengurusan</h3>

	<div class="card">
		<div class="container">

			<?php
            while($record = mysqli_fetch_array($result)){
        	?>

		<p> <?= $record['nama_jabatan'] ?> : <?= $record['nama_pemuda'] ?> </p>
		<?php 
			}
		 ?>



		</div>
	</div>

<div class="container">
<div class="row">

    <ul id="tree-data" style="display:none">
            <li id="root">
                Direktorat Utama
                <ul>
                    <li id="node1">
                       Direktorat Operasi
                       <ul>
                            <li id="node6">
                            Divisi Layanan
                            </li>
                            <li id="node6">
                            Divisi Kepersetaan
                            <ul>
                                <li id="node6">
                                Divisi Administrasi
                                </li>
                                <li id="node6">
                                Divisi Sosialisasi
                                </li>
                            </ul>
                            </li>
                            <li id="node6">
                            Divisi Aktuaria
                            </li>
                        </ul>
                    </li>
                    <li id="node2">
                        Direktorat Investasi
                        <ul>
                            <li id="node6">
                            Divisi Investasi
                            Pasar Uang
                            </li>
                            <li id="node6">
                            Divisi Investasi
                            Pasar Modal
                            </li>
                            <li id="node6">
                            Analisis Investasi
                            </li>
                        </ul>
                    </li>
                    <li id="node3">
                       Direktorat Umum
                        
                    </li>
                    <li id="node4">
                       Direktorat Keuangan
                       
                    </li>
                    <li id="node5">
                       Direktorat Informasi
                    </li>
                </ul>
                
            </li>
    </ul>
    <div id="tree-view"></div>  
<script>
    $(document).ready(function () {
    // create a tree
    $("#tree-data").jOrgChart({
        chartElement: $("#tree-view"), 
        nodeClicked: nodeClicked
    });
    // lighting a node in the selection
    function nodeClicked(node, type) {
        node = node || $(this);
        $('.jOrgChart .selected').removeClass('selected');
            node.addClass('selected');
        }
    });
</script>       
        
</div>
</div>
</body>
</html>

