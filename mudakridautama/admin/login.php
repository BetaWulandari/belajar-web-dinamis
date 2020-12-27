<?php

session_start();

require_once '../config/connection.php';
global $connect;

if (isset($_COOKIE['login'])) {
    $_SESSION['login'] = $username;
    header("Location: index.php");
    exit;
}

// check login
if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!$username || !$password) {
        $null = true;
    }

    $query = "SELECT * FROM tb_user WHERE username = '$username'";
    $result = mysqli_query($connect, $query);

    if (mysqli_num_rows($result) === 1) {
        $record = mysqli_fetch_assoc($result);

        if (isset($_POST['remember'])) {
            setcookie('login', 'login', time() + 60);
        }

        if ($password == $record['password']) {
            $_SESSION['login'] = $username;
            header('Location: index.php');
            exit;
        }
    }
    $error = true;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="shortcut icon" href="../config/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../config/css/main.css">
    <link rel="stylesheet" href="../config/css/loginStyle.css">
    <link rel="stylesheet" href="../config/css/fontawesome.css">

</head>

<body>

    <div class="login">
        <div class="boxLogin">
            <div class="logo">
                <img src="../config/img/logo.png" alt="logo">
            </div>
            <div class="form">
                <h3>Log In</h3>
                <form action="" method="post">
                    <div class="form-group">
                        <i class="icon fa fa-user"></i>
                        <input type="text" name="username" class="inputForm" placeholder="username" autocomplete="off" autofocus>
                    </div>
                    <div class="form-group">
                        <i class="icon fa fa-lock"></i>
                        <input type="password" name="password" class="inputForm" placeholder="password">
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="remember" class="rememberMe">
                        <p>ingat saya</p>
                    </div>
                    <button type="submit" name="login" class="btnLogin">Log in</button>
                </form>
            </div>
        </div>
    </div>

    <script src="../config/js/jquery-3.5.1.min.js"></script>
    <script src="../config/js/fontawesome.js"></script>
    <script src="../config/js/sweetalert2.all.min.js"></script>
</body>

</html>

<?php
if (isset($null)) {
    echo "<script>
    Swal.fire({
        title: 'masukkan username dan password terlebih dahulu',
        icon: 'warning',
        text: '',
        showConfirmButton: false,
        timer: 2000
      })
        </script>";
} else if (isset($error)) {
    echo "<script>
    Swal.fire({
        title: 'Username Atau Password Salah',
        text: '',
        icon: 'error',
        showConfirmButton: false,
        timer: 1500
      })
        </script>";
}
?>