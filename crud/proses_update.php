<?php
	include 'connect.php';

	if(isset($_POST['edit'])){

	  $kode     = $_POST['kode_pemasok'];
	  $nama    = $_POST['name_pemasok'];
	  $alamat  = $_POST['alamat_pemasok'];

	   $queryupdate = mysqli_query($mysqli, "UPDATE pemasok SET nama_pemasok = '$nama', alamat_dosen= '$alamat' WHERE kode_pemasok = $kode");

	  if($queryupdate){
	  	header('location: index.php');
	  }else{
	  	echo "Upss Something wrong..";
	  }
  }
?>
