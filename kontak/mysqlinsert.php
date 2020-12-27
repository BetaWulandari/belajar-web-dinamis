<!DOCTYPE html>
<html>
<head>
	<title>Data Kontak</title>
</head>
<body>
 
	<h2>DATA KONTAK</h2>
	<br/>
	<a href="tampilan.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA KONTAK</h3>
	<form method="post" action="tambah_aksi.php">
		<table>
			<p>
            <label for="nama_kontak">NAMA KONTAK: </label>
            <?php $kontak = $nama_kontak['nama_kontak']; ?>
                <select name="nama_kontak">
                <option <?php echo ($kontak == 'Whatsapp') ? "selected": "" ?>>Whatsapp</option>
                <option <?php echo ($kontak == 'Instagram') ? "selected": "" ?>>Instagram</option>
                <option <?php echo ($kontak == 'Youtube') ? "selected": "" ?>>Youtube</option>
                <option <?php echo ($kontak == 'Facebook') ? "selected": "" ?>>Facebook</option>
                <option <?php echo ($kontak == 'Twitter') ? "selected": "" ?>>Twitter</option>
            </select>
        </p>
        <p>
            <label for="link_kontak">USERNAME KONTAK: </label>
            <input type="text" name="username_kontak" value="<?php echo $kontak['username_kontak'] ?>" />
        </p>
			<tr>
				<td></td>
				<td><input type="submit" name="add" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>