<?php 
// static keyword & koneksi db

class config{
	protected static $hostname = "localhost";
	protected static $username = "root";
	protected static $password = "Beta123";
	protected static $database = "akademik";
}

class connection extends config{

	public $connect;

	public function __construct(){
		$this->connect = mysqli_connect(parent::$hostname, parent::$username,
			parent::$password, parent::$database);

		if (mysqli_connect_errno()) {
			echo "koneksi database gagal : " . mysqli_connect_errno();
		} else {
			echo "koneksi database berhasil";
		}
	}
}

$koneksi = new connection();

 ?>