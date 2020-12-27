<!DOCTYPE html>
<html>
<head>
	<title>Pemasok</title>
</head>
<body>
	
	<h2>Pemasok</h2>
	<br/>
	<a href="insert.php">TAMBAH PEMASOK</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>KODE PEMASOK</th>
			<th>NAMA PEMASOK</th>
			<th>ALAMAT PEMASOK</th>
		</tr>
		<?php 
		include 'connect.php';
		$data = mysqli_query($mysqli,"SELECT * FROM pemasok");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $d['kode_pemasok']; ?></td>
				<td><?php echo $d['nama_pemasok']; ?></td>
				<td><?php echo $d['alamat_pemasok']; ?></td>
				<td>
					<a href="update.php?nik=<?php echo $d['kode_pemasok']; ?>">EDIT</a>
					<a href="delete.php?nik=<?php echo $d['kode_pemasok']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>