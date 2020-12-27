<!DOCTYPE html>
<html>
<head>
	<title>Pemasok</title>
</head>
<body>
 
	<h2>DATA PEMUDA</h2>
	<br/>
	<h3>EDIT DATA PEMUDA DI JABATAN</h3>
 
	<?php
		include 'koneksi.php';
		$id_pemuda = $_GET['id_pemuda'];
		$data = mysqli_query($mysqli,"SELECT * FROM tb_pemuda WHERE id_pemuda='$id_pemuda'");
		$hasil = mysqli_fetch_array($data);	
	?>
	<form method="post" action="proses_update_pemuda.php">
		<table>
			<tr>			
				<td>ID PEMUDA</td>
				<td>
					<input type="text" name="id_pemuda" value="<?php echo $hasil['id_pemuda']; ?>">
				</td>
			</tr>
			<tr>
				<td>NAMA PEMUDA</td>
				<td><input type="text" name="name_pemuda" value="<?php echo $hasil['nama_pemuda']; ?>"></td>
			</tr>
			<tr>
				<td>GENDER PEMUDA</td>
				<td><input type="text" name="jk_pemuda" value="<?php echo $hasil['jk_pemuda']; ?>"></td>
			</tr>
			<tr>
				<td>ID JABATAN</td>
				<td><input type="text" name="id_jabatan" value="<?php echo $hasil['id_jabatan']; ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="edit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form> 
</body>
</html>