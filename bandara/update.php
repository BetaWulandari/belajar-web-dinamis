<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA PENERBANGAN</h3>
 
	<?php
		include 'koneksi.php';
		$nomor_penerbangan = $_GET['nomor_penerbangan'];
		$data = mysqli_query($mysqli,"SELECT * FROM penerbangan WHERE nomor_penerbangan='$nomor_penerbangan'");
		$hasil = mysqli_fetch_array($data);	
	?>
	<form method="post" action="prosesUpdate.php">
		<table>
			<tr>			
				<td>nomor penerbangan</td>
				<td>
					<input type="text" name="nomor_penerbangan" value="<?php echo $hasil['nomor_penerbangan']; ?>">
				</td>
			</tr>
			<tr>
				<td>kode_bandara</td>
				<td><input type="text" name="kode_bandara" value="<?php echo $hasil['kode_bandara']; ?>"></td>
			</tr>
			<tr>
				<td>bandara_asal</td>
				<td><input type="text" name="bandara_asal" value="<?php echo $hasil['bandara_asal']; ?>"></td>
			</tr>
			<tr>
				<td>bandara_tujuan</td>
				<td><input type="text" name="bandara_tujuan" value="<?php echo $hasil['bandara_tujuan']; ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="edit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form> 
</body>
</html>