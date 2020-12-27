<?php 
// connect db
include 'mysqlconnect.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id_kontak'];


if (isset($id)) {
	echo $id;
	// menghapus data dari database
	$res = mysqli_query($mysqli,"DELETE FROM kontak WHERE id_kontak='$id'");
	
	if ($res) {
		header("Location:tampilan.php");	
	}else {
		echo "Something is wrong";
	}	

}
 
?>