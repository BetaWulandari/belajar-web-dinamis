<?php 
// connect db
include 'connect.php';
 
// menangkap data id yang di kirim dari url
$nik = $_GET['kode_pemasok'];


if (isset($kode)) {
	echo $kode;
	// menghapus data dari database
	$res = mysqli_query($mysqli,"DELETE FROM pemasok WHERE kode_pemasok='$kode'");
	
	if ($res) {
		// mengalihkan halaman kembali ke index.php
		header("location:index.php");	
	}else {
		echo "Something is wrong";
	}	

}
 
?>