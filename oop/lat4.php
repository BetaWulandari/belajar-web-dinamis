<?php 
// constructor
class Mobil {
	public $nama;
	public $roda;
	public $kecepatan;

	// constructor
	function __construct($nama, $roda, $kecepatan){
		$this->nama = $nama;
		$this->roda = $roda;
		$this->kecepatan = $kecepatan;
	}

	// method
	function get_mobil(){
		return $this->nama . ' roda : ' . $this->roda . ' kecepatan : ' .
        $this->kecepatan;
	}
}

// pembuatan object (instansiasi)

// $bugatti = new Mobil("Bugatti",4); ERROR krn ada 3 parameter tp yang diisi hanya 2 parameter
$bugatti = new Mobil("Bugatti",4,400); // TIDAK ERROR(BENAR)

echo $bugatti->get_mobil();

?>