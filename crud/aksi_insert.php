<?php 
// koneksi database
include 'connect.php';
 
if (isset($_POST['add'])) {
	// menangkap data yang di kirim dari form
	$nik = $_POST['kode_pemasok'];
	$nama = $_POST['nama_pemasok'];
	$alamat = $_POST['alamat_pemasok'];
	
	$res = mysqli_query($mysqli,"INSERT INTO pemasok(kode_pemasok, nama_pemasok, alamat_pemasok) VALUES('$kode','$nama','$alamat')");
	
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