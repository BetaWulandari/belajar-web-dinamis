<?php 
// koneksi database
include 'koneksi.php';
 
if (isset($_POST['add'])) {
	// menangkap data yang di kirim dari form
	$nomor_penerbangan = $_POST['nomor_penerbangan'];
	$nama_bandara = $_POST['nama_bandara'];
	$bandara_asal = $_POST['bandara_asal'];
	$kode_bandara = $_POST['kode_bandara'];
	
	$res = mysqli_query($mysqli,"INSERT INTO penerbangan(nomor_penerbangan, nama_bandara,bandara_asal, kode_bandara) VALUES('$nomor_penerbangan','$nama_bandara','$bandara_asal', $kode_bandara)");
	
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