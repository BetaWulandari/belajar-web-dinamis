<!DOCTYPE html>
<html>
<head></head>
<body>
	<?php 
// define variables and set to empty values
$nama = $alamat = $kondisi_kesehatan = $keluhan = $nohp = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$nama = test_input($_POST["nama"]);
	$alamat = test_input($_POST["alamat"]);
	$kondisi_kesehatan = test_input($_POST["kondisi_kesehatan"]);
	$keluhan = test_input($_POST["keluhan"]);
	$nohp = test_input($_POST["nohp"]);
}

function test_input($data){
	$data = trim($data);
	$data = stripcslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>

<h2>Biodata Beta</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
	Nama: <input type="text" name="nama"><br><br>
	Alamat: <input type="address" name="alamat"><br><br>
	No.HP: <input type="numeric" name="nohp">
	Kondisi kesehatan: 
	<input type="radio" name="kondisi_kesehatan" value="sehat">Sehat
	<input type="radio" name="kondisi_kesehatan" value="sakit">Sakit
	<br><br>
	Keluhan: <textarea name="keluhan" rows="5" cols="50"></textarea>
	<input type="submit" name="submit" value="Submit">
</form>

<?php 
	echo "<h2>BIODATA</h2>";
	echo "$nama";
	echo "<br>";
	echo "$alamat";
	echo "<br>";
	echo "$nohp";
	echo "<br>";
	echo "$kondisi_kesehatan";
	echo "<br>";
	echo "Keluhan";
?>
</body>
</html>