<!DOCTYPE html>
<html>
<head>
	<title>Data</title>
</head>
<body>
	<br/>
	<a href="tampilanOrganisasi.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA</h3>
	<form method="post" action="tambahAksi.php">
		<table>
		<p>
            <label for="nama_jabatan">NAMA JABATAN: </label>
            <?php $jabatan = $nama_jabatan['nama_kontak']; ?>
            <select name="nama_kontak">
                <option <?php echo ($jabatan == 'ketua') ? "selected": "" ?>>ketua (1)</option>
                <option <?php echo ($jabatan == 'wakil ketua') ? "selected": "" ?>>wakil ketua(2)</option>
                <option <?php echo ($jabatan == 'sekretaris') ? "selected": "" ?>>sekretaris (3)</option>
                <option <?php echo ($jabatan == 'bendahara') ? "selected": "" ?>>bendahara (4)</option>
                <option <?php echo ($jabatan == 'humas') ? "selected": "" ?>>humas (5)</option>
            </select>
        </p>
        <p>
            <label for="nama_pemuda">NAMA PEMUDA: </label>
            <input type="text" name="nama_pemuda" value="<?php echo $jabatan['nama_pemuda'] ?>" />
        </p>
        <p>
        	<label for="id_jabatan">ID JABATAN:</label>
		  	<select name="id_jabatan" id="id_jabatan">
			    <option value="1">1</option>
			    <option value="2">2</option>
			    <option value="3">3</option>
			    <option value="4">4</option>
			    <option value="5">5</option>
		  	</select>
        </p>
			<tr>
				<td></td>
				<td><input type="submit" name="add" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>