<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
</head>
<body>
 
	<h2>DATA KONTAK</h2>
	<br/>
	<a href="tampilan.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA KONTAK</h3>
 
	<?php
		include 'mysqlconnect.php';
		$id = $_GET['id_kontak'];
		$data = mysqli_query($mysqli,"SELECT * FROM kontak WHERE id_kontak='$id'");
		$hasil = mysqli_fetch_array($data);	
	?>
	<form method="post" action="prosesUpdate.php">
		<table>
			<tr>
				<td>ID KONTAK</td>
				<td>
				<input type="text" name="id_kontak" value="<?php echo $hasil['id_kontak']; ?>" readonly></td>
			</tr>
			<tr>
				<td>NAMA KONTAK</td>
				<td>
				<input type="text" name="name_kontak" value="<?php echo $hasil['nama_kontak']; ?>"></td>
			</tr>
			<tr>
				<td>USERNAME KONTAK</td>
				<td><input type="text" name="username_kontak" value="<?php echo $hasil['username_kontak']; ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="edit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form> 
</body>
</html>