<!DOCTYPE html>
<html>
<head>
	<title>Kontak</title>
</head>
<body>
	<br/>
	<a href="insert.php">TAMBAH</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>ID PEMUDA</th>
			<th>NAMA PEMUDA</th>
			<th>NAMA JABATAN</th>
			<th>AKSI</th>
		</tr>
		<?php 
		include 'mysqlconnect.php';
		$data = mysqli_query($mysqli,"SELECT p.nama_pemuda, j.nama_jabatan, p.id_pemuda FROM jabatan j INNER JOIN pemuda p ON p.id_jabatan = j.id_jabatan");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $d['id_pemuda']; ?></td>
				<td><?php echo $d['nama_pemuda']; ?></td>
				<td><?php echo $d['nama_jabatan']; ?></td>
				<td>
					<a href="update.php?id_pemuda=<?php echo $d['id_pemuda']; ?>">EDIT</a>
					<a href="delete.php?id_pemuda=<?php echo $d['id_pemuda']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>