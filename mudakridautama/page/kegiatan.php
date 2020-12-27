<?php

require_once '../config/connection.php';

$querykegiatan = "SELECT * FROM tb_kegiatan, tb_dokumentasi WHERE tb_kegiatan.id_kegiatan = tb_dokumentasi.id_kegiatan";
$resultkegiatan = mysqli_query($connect, $querykegiatan);
$kegiatan = [];
while ($row = mysqli_fetch_assoc($resultkegiatan)) {
    $kegiatan[] = $row;
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kegiatan</title>
    <link rel="shortcut icon" href="../config/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../config/css/fontawesome.css">
    <link rel="stylesheet" href="../config/css/main.css">
    <link rel="stylesheet" href="../config/css/navbar.css">
    <link rel="stylesheet" href="../config/css/pageStyle.css">
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
    <main class="kegiatan">
        <h1 class="heading">Kegiatan</h1>

        <section>

            <div class="text">
                <div class="container">
                    <p>Ada berbagai macam kegiatan yang diselenggarakan oleh karang taruna Muda Krida Utama. Beberapa kegiatan dilaksanakan setiap periode waktu tertentu. Keseruan kegiatan-kegiatan akan kami ceritakan dihalaman ini. Silahkan membaca <i class="fa fa-smile" style="color: orange;"></i></p>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <h2 class="title">Macam Kegiatan</h2>
                <div class="box-card">

                    <?php foreach ($kegiatan as $k) : ?>
                        <div class="card">
                            <h4 class="name"><?= $k['nama_kegiatan']; ?></h4>
                            <div class="content">
                                <img src="../config/img/kegiatan/<?= $k['gambar1']; ?>" alt="" class="image">
                                <h6 class="description">
                                    <b><?= $k['tanggal_kegiatan']; ?></b> - <?= $k['deskripsi_kegiatan']; ?>
                                </h6>
                            </div>
                            <a href="kegiatan-detail.php?id_kegiatan=<?= $k['id_kegiatan']; ?>&id_dokumentasi=<?= $k['id_dokumentasi']; ?>" class="detail">Lihat Selengkapnya</a>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2020 Muda Krida Utama</p>
    </footer>

    <script src="../config/js/jquery-3.5.1.min.js"></script>
    <script src="../config/js/fontawesome.js"></script>
    <script src="../config/js/navbar.js"></script>
</body>

</html>