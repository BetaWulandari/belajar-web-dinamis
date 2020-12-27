<!DOCTYPE html>
<html>
<head>
	<title>Tambah</title>
</head>
<body>
 
	<h2>DATA JABATAN</h2>
	<br/>
	<br/>
	<h3>TAMBAH DATA JABATAN</h3>
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>			
				<td>id jabatan</td>
				<td><input type="text" name="id_jabatan"></td>
			</tr>
			<tr>
				<td>nama jabatan</td>
				<td><input type="text" name="nama_jabatan"></td>
			</tr>
			<tr>
				<td>jobdesc</td>
				<td><input type="text" name="jobdesc"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="add" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>