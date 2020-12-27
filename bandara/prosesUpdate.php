<?php
	include 'koneksi.php';

	if(isset($_POST['edit'])){

	  $nomor_penerbangan     = $_POST['nomor_penerbangan'];
	  $kode_bandara    = $_POST['kode_bandara'];
	  $bandara_asal  = $_POST['bandara_asal'];
	  $bandara_tujuan  = $_POST['bandara_tujuan'];

	   $queryupdate = mysqli_query($mysqli, "UPDATE penerbangan SET nomor_penerbangan = '$nomor_penerbangan', kode_bandara= '$kode_bandara' , bandara_asal = '$bandara_asal', bandara_tujuan= '$bandara_tujuan' WHERE nomor_penerbangan = $nomor_penerbangan");

	  if($queryupdate){
	  	header('location: index.php');
	  }else{
	  	echo "Upss Something wrong..";
	  }
  }
?>
