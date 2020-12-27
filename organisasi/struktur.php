<html>  
    <head>
        <style>
            * {
                padding: 1;
                margin: 2;
                box-sizing: border-box;
            }
    
            body {
                background: white;
            }
    
            .organisasi {
                background: white;
                min-height: 100vh;
                display: flex;
                flex-direction: column;
                align-items: center;
                padding: 1rem;
            }
    .box {
                padding: 1rem 2rem;
                margin-top: 2rem;
                background: blue;
                color: white;
            }
    
            .sekben,
            .anggota {
                display: flex;
                gap: 2rem;
                flex-wrap: wrap;
            }
        </style>
    </head>
<body>

    

        <!-- html -->
    <div class="organisasi">
        <h2>Struktur Organisasi</h2>
        <?php 

            include 'mysqlconnect.php';

            $sql = "SELECT p.nama_pemuda, j.nama_jabatan, p.id_pemuda FROM jabatan j INNER JOIN pemuda p ON p.id_jabatan = j.id_jabatan WHERE j.nama_jabatan IN ('ketua','wakil ketua')";
            $result = mysqli_query($mysqli, $sql);

            while ($r=mysqli_fetch_array($result)) {

                if ($r['nama_jabatan'] == 'ketua') {

        ?>
                    <div class="box" style="text-align: center;">
                        <span><?php echo $r['nama_jabatan']; ?></span><br>
                        <b><?php echo $r['nama_pemuda']; ?></b>
                    </div>
                <?php
                }
                ?>
                
                <?php 
                    if ($r['nama_jabatan'] == 'wakil ketua') {

                ?>
                  <div class="box" style="text-align: center;">
                        <span><?php echo $r['nama_jabatan']; ?></span><br>
                        <b><?php echo $r['nama_pemuda']; ?></b>
                    </div>  
                    <?php
                    }
                    ?>
            <?php
            }
            ?>

            <div class="sekben">
            <?php 
                $sql = "SELECT p.nama_pemuda, j.nama_jabatan, p.id_pemuda FROM jabatan j INNER JOIN pemuda p ON p.id_jabatan = j.id_jabatan WHERE j.nama_jabatan IN ('sekretaris','bendahara')";
                $result = mysqli_query($mysqli, $sql);

                while ($r=mysqli_fetch_array($result)) {
                    if ($r['nama_jabatan'] == 'sekretaris') {
                 
            ?>     
                    <div class="box" style="text-align: center;">
                        <span><?php echo $r['nama_jabatan']; ?></span><br>
                        <b><?php echo $r['nama_pemuda']; ?></b>
                    </div>
                    <?php 
                    }
                    if ($r['nama_jabatan'] == 'bendahara') {
                    ?>
                    <div class="box" style="text-align: center;">
                        <span><?php echo $r['nama_jabatan']; ?></span><br>
                        <b><?php echo $r['nama_pemuda']; ?></b>
                    </div>
                    <?php
                    }
                    ?>
                <?php    
                }
                ?>
            </div>
    </div>
</body>
</html>