<?php 
// protected (dari class turunannya)

class Computer{
	public $cpu = "Intel i5 x64";
	protected $os = "Windows";
	private $factory_number = "1234-5678";
}

class checkOS extends Computer{

	public function get_os(){
		return $this->os;
	}
}

$dell = new checkOS();
echo $dell->get_os();

 ?>