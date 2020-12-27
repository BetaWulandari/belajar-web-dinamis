<!DOCTYPE html>
<html>
<head>
	<title>Data Akademik_0138</title>
</head>
<body>
	
	<h2>DATA DOSEN</h2>
	<br/>
	<a href="mysqlinsert.php">TAMBAH DOSEN</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>NIK</th>
			<th>NAMA DOSEN</th>
			<th>ALAMAT DOSEN</th>
		</tr>
		<?php 
		include 'mysqlconnect.php';
		$data = mysqli_query($mysqli,"SELECT * FROM dosen");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $d['nik']; ?></td>
				<td><?php echo $d['nama_dosen']; ?></td>
				<td><?php echo $d['alamat_dosen']; ?></td>
				<td>
					<a href="mysqlupdate.php?nik=<?php echo $d['nik']; ?>">EDIT</a>
					<a href="mysqldelete.php?nik=<?php echo $d['nik']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>