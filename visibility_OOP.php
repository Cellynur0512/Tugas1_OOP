<?php

class sekolah {
    public $nama = "SMK Wikrama Bogor";
    protected $jumsis = "600";
    public $jumgur = "100";
    protected $jumkel = "31";

    public function setNama($nama) {
        $this->nama = $nama;
    }
    public function setAlamat($alamat) {
        $this->alamat = $alamat;
    }
    public function setJumgur($jumgur) {
        $this->jumgur = $jumgur;
    }
}

class data extends sekolah {
    private $alamat = "Deket tukang foto copy";

    public function getJumsis($jumsis) {
        $this->jumsis = $jumsis;
    }
    public function getJumkel($jumkel) {
        $this->jumkel = $jumkel;
    }
    public function GetCetak() {

        echo "Nama : ".$this->nama; 
        echo "<br>";
        echo "Alamat : ".$this->alamat;
        echo "<br>";
        echo "Jumlah Siswa : ".$this->jumsis;
        echo "<br>";
        echo "Jumlah Guru : ".$this->jumgur;
        echo "<br>";
        echo "Jumlah Kelas : ".$this->jumkel;
    }
}

$data1 = new sekolah();
$data2 = new data();
echo $data2->getCetak();
echo "<hr>";