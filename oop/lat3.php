<?php
// constructor
//pembuatan class(blueprint)

    class Mobil {
        // Property
        public $nama;
        public $roda;
        public $kecepatan;

            // constructor
            function __construct($nama, $roda, $kecepatan){
                $this->nama = $nama;
                $this->roda = $roda;
                $this->kecepatan = $kecepatan;
            }
            // method get mobil
            function get_mobil(){
                return $this->nama . ' roda : ' . $this->roda . ' kecepatan : ' .
                $this->kecepatan;
            }
    }
    
    //pembuatan object (instansiasi)
    $nissan = new Mobil("Nissan", 4, 400);
    echo $nissan->get_mobil();
 ?>