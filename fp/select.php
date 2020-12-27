<?php
// Create database connection using config file
include_once("koneksi.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT FROM nama_jabatan, nama_pemuda FROM jabatan, pemuda");
?>

<html>
<head>    
</head>

<body>
<a href="add.php">Add</a><br/><br/>

    <table width='80%' border=1>

    <tr>
        <th>Nama Jabatan</th> <th>Nama Pemuda</th> <th>Aksi</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['nama_jabatan']."</td>";
        echo "<td>".$user_data['nama_pemuda']."</td>";   
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>