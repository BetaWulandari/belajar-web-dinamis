<?php
	include 'mysqlconnect.php';

	if(isset($_POST['edit'])){

	  $id_pemuda     = $_POST['id_pemuda'];
	  $nama_pemuda    = $_POST['name_pemuda'];
	  $id_jabatan  = $_POST['id_jabatan'];


	   $queryupdate = mysqli_query($mysqli, "UPDATE pemuda SET nama_pemuda = '$nama_pemuda', id_jabatan= '$id_jabatan' WHERE id_pemuda = '$id_pemuda'");

	  if($queryupdate){
	  	header('location: tampilanOrganisasi.php');
	  }else{
	  	echo "Upss Something wrong..";
	  }
  }
?>
