<?php 
// constructor
class Mobil {
	public $nama;
	public $roda;
	public $kecepatan;

	// constructor
	function __construct($nama = "", $roda=4, $kecepatan=400){
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

$ayla = new Mobil("Ayla View");
echo $ayla->get_mobil();

?>