<?php 
// access modifier (visibility)

// public
class Computer{
	public $cpu = "Intel i5 x64";
	protected $os = "Windows";
	private $factory_number = "1234-5678";
}

$dell = new Computer();
echo $dell->cpu;

 ?>