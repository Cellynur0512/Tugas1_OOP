<?php

class sepatu{
    public $merk,
           $warna,
           $ukuran;

    public function setMerk($merk){
        $this->merk=$merk;
    }
    public function setWarna($warna){
        $this->warna=$warna;
    }
    public function setUkuran($ukuran){
        $this->ukuran=$ukuran;
    }
    public function getCetak(){
        echo "<br> ==================== <br>";
        echo "Merk Sepatu: ".$this->merk;
        echo "<br>";
        echo "Warna Sepatu: ".$this->warna;
        echo "<br>";
        echo "Ukuran Sepatu: ".$this->ukuran;
        echo "<br> ==================== <br>";
    }
    public function __destruct(){
        echo "selesai";
    }
    public function __construct(){
        echo "dimulai";
    }
}

$sepatu1 = new sepatu();
$sepatu1->setMerk("Nike");
$sepatu1->setWarna("Hitam");
$sepatu1->setUkuran(41);
$sepatu1->getCetak();
?>