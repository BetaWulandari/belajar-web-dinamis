<?php
// class dan objek
// pembuatan class(blueprint)
class Mobil {

    // Property
    public $nama;
    public $roda;
    public $kecepatan;

        // Method
        function set_nama($nama) {
            $this->nama = $nama;
        }
        function set_roda($roda) {
            $this->roda = $roda;
        }
        function set_kecepatan($kecepatan) {
            $this->kecepatan = $kecepatan;
        }
        function get_mobil() {
            return $this->nama . ' roda : ' . $this->roda . ' kecepatan : ' .
            $this->kecepatan;
        }
}

    //pembuatan object (instansiasi)
    $nissan = new Mobil();

    $nissan->set_nama('Nissan');
    $nissan->set_roda(4);
    $nissan->set_kecepatan(400);

    echo $nissan->get_mobil();
?>