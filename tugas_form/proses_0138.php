<html>
<body>
	Nama Lengkap : <?php echo $_POST["nama"]; ?><br>
	Alamat : <?php echo $_POST["alamat"]; ?><br>
	Email : <?php echo $_POST["email"]; ?><br>
	Gender : <?php 
		if ("pria" == Pria) {
			echo $_POST["pria"];
		} else {
			echo $_POST["wanita"];
		}
	 	?><br>
	Deskripsi Diri : <?php echo $_POST["deskripsi_diri"]; ?>
</body>
</html>