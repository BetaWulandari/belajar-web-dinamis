<?php 
// koneksi database
include 'mysqlconnect.php';
 
if (isset($_POST['add'])) {
	// menangkap data yang di kirim dari form
	$pemuda = $_POST['nama_pemuda'];
	$jabatan = $_POST['nama_jabatan'];
	$id_jabatan =$_POST['id_jabatan'];
	$nama_jabatan = "";
	switch ($id_jabatan) {
		case 1:
			$nama_jabatan = "ketua";
			break;

		case 2:
			$nama_jabatan = "wakil ketua";
			break;

		case 3:
			$nama_jabatan = "sekretaris";
			break;

		case 4:
			$nama_jabatan = "bendahara";
			break;

		case 5:
			$nama_jabatan = "humas";
			break;
		
		default:
			$id_jabatan = 6;
			break;
	}
	echo($id_jabatan);
	$res = mysqli_query($mysqli,"INSERT INTO pemuda(nama_pemuda,id_jabatan) VALUES('$pemuda','$id_jabatan')");
	
	if ($res) {
		header("location:tampilanOrganisasi.php");
	}else {
		echo "Something is wrong";
	}
	
} else {
	echo "kosong";
}
 
?>