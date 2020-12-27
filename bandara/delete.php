<?php 
// connect db
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$nomor_penerbangan = $_GET['nomor_penerbangan'];


if (isset($nomor_penerbangan)) {
	echo $nomor_penerbangan;
	// menghapus data dari database
	$res = mysqli_query($mysqli,"DELETE FROM penerbangan WHERE nomor_penerbangan='$nomor_penerbangan'");
	
	if ($res) {
		// mengalihkan halaman kembali ke index.php
		header("location:index.php");	
	}else {
		echo "Something is wrong";
	}	

}
 
?>