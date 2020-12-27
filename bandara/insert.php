<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA PENERBANGAN</h3>
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>			
				<td>nomor penerbangan</td>
				<td><input type="text" name="nomor_penerbangan"></td>
			</tr>
			<tr>
				<label for="kode_bandara">kode bandara</label>
  <select name="kode_bandara" id="kode_bandara">
    <option value="1">1</option>
    <option value="2">2</option>
  </select>
			</tr>
			<tr>
				<td>bandara asal</td>
				<td><input type="text" name="bandara_asal"></td>
			</tr>
			<tr>
				<td>bandara tujuan</td>
				<td><input type="text" name="bandara_tujuan"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="add" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>