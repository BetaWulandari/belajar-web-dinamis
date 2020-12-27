<?php 
// koneksi database
include 'mysqlconnect.php';
 
if (isset($_POST['add'])) {
	// menangkap data yang di kirim dari form
	$nama = $_POST['nama_kontak'];
	$username = $_POST['username_kontak'];

	$src = "";
	switch ($nama) {
		case "Whatsapp":
			$src="aset/wa.png";
			break;

		case "Instagram":
			$src="aset/ig.png";
			break;

		case "Youtube":
			$src="aset/yt.png";
			break;

		case "Facebook":
			$src="aset/fb.png";
			break;
		
		default:
			$src="aset/twitter.png";
			break;
	}
	echo($src);
	$res = mysqli_query($mysqli,"INSERT INTO kontak(src,nama_kontak,username_kontak) VALUES('$src','$nama','$username')");
	
	if ($res) {
		header("location:tampilan.php");
	}else {
		echo "Something is wrong";
	}
	
} else {
	echo "kosong";
}
 
?>