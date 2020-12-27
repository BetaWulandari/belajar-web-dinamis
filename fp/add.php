<html>
<head>
    <title>Add</title>
</head>

<body>
    <a href="select.php">Go to Home</a>
    <br/><br/>

    <form action="add.php" method="POST" name="form1">
        <fieldset>
        <p>
            <label for="nama_jabatan">Nama Jabatan: </label>
            <select name="nama_jabatan">
                <option>Ketua [1]</option>
                <option>Wakil Ketua [2]</option>
                <option>Sekretaris [3]</option>
                <option>Bendahara [4]</option>
                <option>Humas [5]</option>
                <option>Divisi Keamanan [6]</option>
                <option>Divisi Logistik [7]</option>
            </select>
        </p>
        <p>
            <label for="id_jabatan">ID Jabatan: </label>
            <select name="id_jabatan">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
            </select>
        </p>
        <p>
            <label for="nama_pemuda">Nama Pemuda: </label>
            <input type="text" name="nama_pemuda"/>
        </p>
        <p>
            <input type="submit" value="ADD" name="tambah" />
        </p>
        </fieldset>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['tsmbah'])) {
        $nama_jabatan = $_POST['nama_jabatan'];
        $nama_pemuda = $_POST['nama_pemuda'];
        $id_jabatan = $_POST['id_jabatan'];

        // include database connection file
        include_once("koneksi.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO pemuda(nama_pemuda, id_jabatan) VALUES('$nama_pemuda', '$id_jabatan')");

        // Show message when user added
        echo "User added successfully. <a href='select.php'>View Added</a>";
    }
    ?>
</body>
</html>