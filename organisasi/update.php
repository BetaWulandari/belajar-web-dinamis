<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
</head>
<body>
 
	<h2>DATA</h2>
	<br/>
	<a href="tampilanOrganisasi.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA</h3>
 
	<?php
		include 'mysqlconnect.php';
		$id_pemuda = $_GET['id_pemuda'];
		$data = mysqli_query($mysqli,"SELECT p.nama_pemuda, p.id_pemuda, p.id_jabatan, j.nama_jabatan FROM jabatan j INNER JOIN pemuda p ON p.id_jabatan = j.id_jabatan WHERE p.id_pemuda = '$id_pemuda' ");
		$hasil = mysqli_fetch_array($data);	
	?>
	<form method="post" action="prosesUpdate.php">
		<table>
			<tr>			
				<td>ID PEMUDA</td>
				<td>
					<input type="text" name="id_pemuda" value="<?php echo $hasil['id_pemuda']; ?>" readonly>
				</td>
			</tr>	
			<tr>
				<td>NAMA PEMUDA</td>
				<td><input type="text" name="name_pemuda" value="<?php echo $hasil['nama_pemuda']; ?>"></td>
			</tr>
			<tr>
				<td>ID JABATAN</td>
				<td><input type="text" name="id_jabatan" value="<?php echo $hasil['id_jabatan']; ?>" readonly></td>
			</tr>
			<tr>
				<td>NAMA JABATAN</td>
				<td><input type="text" name="nama_jabatan" value="<?php echo $hasil['nama_jabatan']; ?>" readonly></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="edit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form> 
</body>
</html>