<?php 

// connect db
$mysqli = new
mysqli("localhost","root","Beta123","bandara");

// check connection
if ($mysqli -> connect_errno) {
	echo "Failed to connect " . $mysqli -> connect_error;

	exit();
} 

 ?>