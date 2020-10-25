<?php
/*
Syntax
setcookie(name, value, expire, path, domain);
*/
setcookie("user", "Alex Porter", time()+3600);
echo "cookies telah dibuat";
?>
<br />
<a href="display_cookies.php">Melihat hasilnya</a>