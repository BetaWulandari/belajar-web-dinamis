<?php 

session_start();

if (isset($_SESSION['nama']) && ($_SESSION['email'])) == true {
 	echo "ada";
 } else {
 	echo "tdk ada";
 }

  ?>