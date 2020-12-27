<?php 
// inheritance

// parent class
class Smartphone{

	public $cpu;
	public $ram;
	public $os;

	function __construct($cpu, $ram, $os){
		$this->cpu = $cpu;
		$this->ram = $ram;
		$this->os = $os;
	}
}

// child class
class Xiaomi extends Smartphone{

	public $type;

	public function set_type($type){
		$this->type = $type;
	}

	function get_xiaomi(){
		$spec = "CPU : " . $this->cpu . "<br/>";
		$spec .= "RAM : " . $this->ram . "<br/>";
		$spec .= "OS : " . $this->os . "<br/>";
		$spec .= "type : " . $this->type . "<br/>";
		return $spec;
	}
}

// instansiasi object dr child class
$note = new Xiaomi("Octa", 12, "Android");
$note->set_type("note a8 pro");

$mix = new Xiaomi("Qualcom Octa", 12, "Android");
$mix->set_type("mix alpha");

echo $note->get_xiaomi();
echo "<hr/>";
echo $mix->get_xiaomi();

 ?>