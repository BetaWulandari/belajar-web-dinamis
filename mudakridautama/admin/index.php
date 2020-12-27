<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

if (isset($_POST['logout'])) {

    $_SESSION = [];
    session_unset();
    session_destroy();
    setcookie('login', '', time() - 3600);

    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>

<body>
    <h1>Welcome admin</h1>
    <form action="" method="post">
        <button type="submit" name="logout">logout</button>
    </form>
</body>

</html>