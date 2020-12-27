<?php 
// koneksi database
include 'koneksi.php';


 
if (isset($_POST['add'])) {
	// menangkap data yang di kirim dari form
	$id = $_POST['id_pemuda'];
	$nama = $_POST['nama_pemuda'];
	$jk = $_POST['jk_pemuda'];
	$id_jbt = $_POST['id_jabatan'];
	
	$res = mysqli_query($koneksi,"INSERT INTO tb_pemuda(id_pemuda, nama_pemuda, jk_pemuda, id_jabatan) VALUES('$id','$nama','$jk','$id_jbt')");
	
	if ($res) {
		// mengalihkan halaman kembali ke index.php
		header("location:kepengurusan.php");
	}else {
		echo "Something is wrong";
	}
	
} else {
	echo "kosong";
}
 
?>