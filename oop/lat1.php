<?php 
// class dan objek
// pembuatan class(blueprint)
class Mobil {

	// property
	public $nama;

	// method
	function set_nama($nama){
		$this->nama = $nama;
	} 
	function get_nama(){
		return $this->nama;
	}
}

// pembuatan object(instansiasi)
$nissan = new Mobil();
$nissan->set_nama('Nissan Skyline');
echo $nissan->get_nama();

echo "</br>";

// pembuatan object kedua
$nissan = new Mobil();
$nissan->set_nama('Lamborghini');
echo $nissan->get_nama();

?>