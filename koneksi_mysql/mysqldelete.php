<?php 
// connect db
include 'mysqlconnect.php';
 
// menangkap data id yang di kirim dari url
$nik = $_GET['nik'];


if (isset($nik)) {
	echo $nik;
	// menghapus data dari database
	$res = mysqli_query($mysqli,"DELETE FROM dosen WHERE nik='$nik'");
	
	if ($res) {
		// mengalihkan halaman kembali ke index.php
		header("location:index.php");	
	}else {
		echo "Something is wrong";
	}	

}
 
?>