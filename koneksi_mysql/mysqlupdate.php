<!DOCTYPE html>
<html>
<head>
	<title>Edit_0138</title>
</head>
<body>
 
	<h2>DATA DOSEN</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA DOSENN</h3>
 
	<?php
		include 'mysqlconnect.php';
		$nik = $_GET['nik'];
		$data = mysqli_query($mysqli,"SELECT * FROM dosen WHERE nik='$nik'");
		$hasil = mysqli_fetch_array($data);	
	?>
	<form method="post" action="prosesUpdate.php">
		<table>
			<tr>			
				<td>NIK</td>
				<td>
					<input type="text" name="nik" value="<?php echo $hasil['nik']; ?>" readonly>
				</td>
			</tr>	
			<tr>
				<td>NAMA DOSEN</td>
				<td><input type="text" name="name_dosen" value="<?php echo $hasil['nama_dosen']; ?>"></td>
			</tr>
			<tr>
				<td>ALAMAT DOSEN</td>
				<td><input type="text" name="alamat_dosen" value="<?php echo $hasil['alamat_dosen']; ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="edit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form> 
</body>
</html>