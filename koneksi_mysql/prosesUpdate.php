<?php
	include 'mysqlconnect.php';

	if(isset($_POST['edit'])){

	  $nik     = $_POST['nik'];
	  $nama    = $_POST['name_dosen'];
	  $alamat  = $_POST['alamat_dosen'];

	   $queryupdate = mysqli_query($mysqli, "UPDATE dosen SET nama_dosen = '$nama', alamat_dosen= '$alamat' WHERE nik = $nik");

	  if($queryupdate){
	  	header('location: index.php');
	  }else{
	  	echo "Upss Something wrong..";
	  }
  }
?>
