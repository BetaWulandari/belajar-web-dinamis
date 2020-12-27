<!DOCTYPE html>
<html>
<head>
	<title>Kontak</title>
</head>
<body>
	
	<h2>DATA KONTAK</h2>
	<br/>
	<a href="mysqlinsert.php">TAMBAH KONTAK</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>ID KONTAK</th>
			<th>NAMA KONTAK</th>
			<th>USERNAME KONTAK</th>
			<th>AKSI</th>
		</tr>
		<?php 
		include 'mysqlconnect.php';
		$data = mysqli_query($mysqli,"SELECT * FROM kontak");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $d['id_kontak']; ?></td>
				<td><?php echo $d['nama_kontak']; ?></td>
				<td><?php echo $d['username_kontak']; ?></td>
				<td>
					<a href="mysqlupdate.php?id_kontak=<?php echo $d['id_kontak']; ?>">EDIT</a>
					<a href="mysqldelete.php?id_kontak=<?php echo $d['id_kontak']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>