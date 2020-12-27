<?php 
// private

class Computer{
	public $cpu = "Intel i5 x64";
	protected $os = "Windows";
	private $factory_number = "1234-5678";
}

class checkOS extends Computer{

	public function get_factory_number(){
		return $this->factory_number;
	}
}

$dell = new checkOS();
echo $dell->get_factory_number(); //ERROR, krn private hanya bisa diakses dari dalam class, tidak bisa diakses oleh class turunan

 ?>