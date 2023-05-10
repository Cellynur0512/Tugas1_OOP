<?php

class baju{
    public $merk;
    private $warna;
    protected $ukuran;

}
class bajo{
    public $merk;
    private $warna;

    function tampil() {
        echo $this->ukuran = "m";
    }
}

$baju1 = new baju();
$baju2 = new bajo();
echo $baju2->tampil();