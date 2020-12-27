<?php 

// protected (dari luar class)
class Computer extends Computer{
	public $cpu = "Intel i5 x64";
	protected $os = "Windows";
	private $factory_number = "1234-5678";
}

$dell = new Computer();
echo $dell->os; // ERROR, krn protected hanya bisa diakses dlm class dan class turunannya, tidak bisa diakses dari luar class

 ?>