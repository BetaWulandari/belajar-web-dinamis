<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak</title>
    <link rel="shortcut icon" href="../config/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../config/css/fontawesome.css">
    <link rel="stylesheet" href="../config/css/main.css">
    <link rel="stylesheet" href="../config/css/navbar.css">
</head>

<body>
    <nav>
        <div class="container">
            <div class="logo">
                <a href="../index.php">
                    <img src="../config/img/logo.png" alt="logo">
                </a>
            </div>
            <div class="hamburger">
                <i class="fas fa-bars"></i>
            </div>
            <ul class="links">
                <li><a href="../index.php">Beranda</a></li>
                <li><a href="kegiatan.php">Kegiatan</a></li>
                <li><a href="organisasi.php">Organisasi</a></li>
                <li><a href="informasi-desa.php">Info Desa</a></li>
                <li><a href="dokumentasi.php">Dokumentasi</a></li>
                <li><a href="kontak.php">Kontak</a></li>
            </ul>

        </div>
    </nav>

    <main>
		<br><h1 align="center" size="100px">KONTAK</h1><br><br>
		<table border="1" align="center">
		<?php 

			include 'mysqlconnect.php';

			$sql = "SELECT src,username_kontak FROM kontak";
			$result = mysqli_query($mysqli, $sql);

			while ($r=mysqli_fetch_array($result)) {

		?>
				<!-- html -->

				<tr>
					<td>
						<img src=<?php echo $r['src'];  ?> width=60 height=60>
					</td>
					<td><?php echo $r['username_kontak']; ?></td>
				</tr>
		<?php
			}
		?>
		</table>

    </main>

    <footer>
        <p>&copy; 2020 Muda Krida Utama</p>
    </footer>

    <script src="../config/js/jquery-3.5.1.min.js"></script>
    <script src="../config/js/fontawesome.js"></script>
    <script src="../config/js/navbar.js"></script>
</body>

</html>
