<?php 
// koneksi database
include 'mysqlconnect.php';
 
if (isset($_POST['add'])) {
	// menangkap data yang di kirim dari form
	$nik = $_POST['nik'];
	$nama = $_POST['nama_dosen'];
	$alamat = $_POST['alamat_dosen'];
	
	$res = mysqli_query($mysqli,"INSERT INTO dosen(nik, nama_dosen, alamat_dosen) VALUES('$nik','$nama','$alamat')");
	
	if ($res) {
		// mengalihkan halaman kembali ke index.php
		header("location:index.php");
	}else {
		echo "Something is wrong";
	}
	
} else {
	echo "kosong";
}
 
?>