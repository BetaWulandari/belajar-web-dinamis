<!DOCTYPE html>
<html>
<head>
	<title>Data Akademik_0138</title>
</head>
<body>
 
	<h2>DATA DOSEN</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA DOSEN</h3>
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>			
				<td>NIK</td>
				<td><input type="text" name="nik"></td>
			</tr>
			<tr>
				<td>NAMA DOSEN</td>
				<td><input type="text" name="nama_dosen"></td>
			</tr>
			<tr>
				<td>ALAMAT DOSEN</td>
				<td><input type="text" name="alamat_dosen"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="add" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>