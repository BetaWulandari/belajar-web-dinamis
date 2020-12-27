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
	<h3>TAMBAH DATA PEMASOK</h3>
	<form method="post" action="aksi_insert.php">
		<table>
			<tr>			
				<td>KODE PEMASOK</td>
				<td><input type="text" name="kode_pemasok"></td>
			</tr>
			<tr>
				<td>NAMA PEMASOK</td>
				<td><input type="text" name="nama_pemasok"></td>
			</tr>
			<tr>
				<td>ALAMAT PEMASOK</td>
				<td><input type="text" name="alamat_pemasok"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="add" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>