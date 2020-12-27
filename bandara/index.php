<!DOCTYPE html>
<html>
<head>
</head>
<body>

	<br/>
	<a href="insert.php">TAMBAH PENERBANGAN</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>nomor penerbangan</th>
			<th>nama bandara</th>
			<th>bandara asal</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$data = mysqli_query($mysqli,"SELECT nomor_penerbangan,nama_bandara,bandara_asal FROM penerbangan, bandara WHERE penerbangan.kode_bandara = bandara.kode_bandara ");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $d['nomor_penerbangan']; ?></td>
				<td><?php echo $d['nama_bandara']; ?></td>
				<td><?php echo $d['bandara_asal']; ?></td>
				<td>
					<a href="update.php?nik=<?php echo $d['nomor_penerbangan']; ?>">EDIT</a>
					<a href="delete.php?nik=<?php echo $d['nomor_penerbangan']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>
