<?php
/*
Menggunakan cookies yang telah dibentuk
*/
if (isset($_COOKIE["user"]))
 echo "Welcome " . $_COOKIE["user"] . "!<br />";
else
 echo "Welcome guest!<br />";
/*
Menghapus cookies
*/
// set the expiration date to one hour ago
// setcookie("user", "", time()-3600);
?>