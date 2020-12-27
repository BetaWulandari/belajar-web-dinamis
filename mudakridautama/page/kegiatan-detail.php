<?php

require_once '../config/connection.php';

$id_kegiatan = $_GET['id_kegiatan'];
$id_dokumentasi = $_GET['id_dokumentasi'];

$querykegiatan = "SELECT * FROM tb_kegiatan WHERE id_kegiatan = '$id_kegiatan'";
$resultkegiatan = mysqli_query($connect, $querykegiatan);
$kegiatan = [];
while ($row = mysqli_fetch_assoc($resultkegiatan)) {
    $kegiatan[] = $row;
}

$querydokumentasi = "SELECT * FROM tb_dokumentasi WHERE id_dokumentasi = '$id_dokumentasi'";
$resultdokumentasi = mysqli_query($connect, $querydokumentasi);
$dokumentasi = [];
while ($row = mysqli_fetch_assoc($resultdokumentasi)) {
    $dokumentasi[] = $row;
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Kegiatan</title>
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

    <main class="detail-kegiatan">
        <section>
            <div class="container">
                <?php foreach ($kegiatan as $k) : ?>
                    <?php foreach ($dokumentasi as $d) : ?>
                        <h2 class="title"><?= $k['nama_kegiatan']; ?></h2>
                        <img src="../config/img/kegiatan/<?= $d['gambar1']; ?>" alt="<?= $d['gambar1']; ?>">
                        <p class="description"><b><?= $k['tanggal_kegiatan']; ?></b> - <?= $k['deskripsi_kegiatan']; ?>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae, recusandae dicta excepturi impedit magni animi rerum corrupti dignissimos quibusdam. Soluta quaerat dolorem dolor neque porro amet eveniet expedita facere earum, officiis error quis maiores veniam rem unde harum, laudantium cumque vitae. Deleniti voluptates cupiditate laudantium eaque voluptatibus, ea et possimus officiis illum. Alias consequuntur minima fugit omnis necessitatibus labore eaque commodi nesciunt sit architecto sequi officia in distinctio atque sed cumque, perspiciatis eligendi consectetur harum culpa qui. Maiores, ex dolores, magnam quia itaimilique ut ipsum, rem voluptates nemo delectus impedit quae et quam illo in!</p>

                        <a href="dokumentasi.php?id_kegiatan=<?= $k['id_kegiatan']; ?>&id_dokumentasi=<?= $d['id_dokumentasi']; ?>" class="dokumentasi">Lihat Dokumentasi</a>
                    <?php endforeach; ?>
                <?php endforeach; ?>
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