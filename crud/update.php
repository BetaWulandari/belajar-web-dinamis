<!DOCTYPE html>
<html>
<head>
	<title>Pemasok</title>
</head>
<body>
 
	<h2>DATA PEMASOK</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA PEMASOK</h3>
 
	<?php
		include 'connect.php';
		$kode = $_GET['kode_pemasok'];
		$data = mysqli_query($mysqli,"SELECT * FROM pemasok WHERE kode_pemasok='$kode'");
		$hasil = mysqli_fetch_array($data);	
	?>
	<form method="post" action="proses_update.php">
		<table>
			<tr>			
				<td>KODE PEMASOK</td>
				<td>
					<input type="text" name="kode_pemasok" value="<?php echo $hasil['kode_pemasok']; ?>" readonly>
				</td>
			</tr>
			<tr>
				<td>NAMA PEMASOK</td>
				<td><input type="text" name="name_pemasok" value="<?php echo $hasil['nama_pemasok']; ?>"></td>
			</tr>
			<tr>
				<td>ALAMAT PEMASOK</td>
				<td><input type="text" name="alamat_pemasok" value="<?php echo $hasil['alamat_pemasok']; ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="edit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form> 
</body>
</html>