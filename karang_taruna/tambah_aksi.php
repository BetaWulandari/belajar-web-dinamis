<?php 
// koneksi database
include 'koneksi.php';


 
if (isset($_POST['add'])) {
	// menangkap data yang di kirim dari form
	$id = $_POST['id_jabatan'];
	$nama = $_POST['nama_jabatan'];
	$jobdesc = $_POST['jobdesc'];
	
	$res = mysqli_query($koneksi,"INSERT INTO tb_jabatan(id_jabatan, nama_jabatan, jobdesc) VALUES('$id','$nama','$jobdesc')");
	
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