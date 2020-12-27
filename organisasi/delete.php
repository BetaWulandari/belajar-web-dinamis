<?php 
// connect db
include 'mysqlconnect.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id_pemuda'];


if (isset($id)) {
	echo $id;
	// menghapus data dari database
	$res = mysqli_query($mysqli,"DELETE FROM pemuda WHERE id_pemuda='$id'");
	
	if ($res) {
		header("location:tampilanOrganisasi.php");	
	}else {
		echo "Something is wrong";
	}	

}
 
?>