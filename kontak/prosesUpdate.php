<?php
	include 'mysqlconnect.php';

	if(isset($_POST['edit'])){

	  $id    = $_POST['id_kontak'];
	  $nama    = $_POST['name_kontak'];
	  $username  = $_POST['username_kontak'];

	   $queryupdate = mysqli_query($mysqli, "UPDATE kontak SET nama_kontak = '$nama', username_kontak= '$username' WHERE id_kontak = $id");

	  if($queryupdate){
	  	header('location: tampilan.php');
	  }else{
	  	echo "Upss Something wrong..";
	  }
  }
?>
