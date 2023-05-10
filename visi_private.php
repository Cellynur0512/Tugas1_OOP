<?php

class baju{
    public $merk;
    private $warna = "merah";
    protected $ukuran;

}
class bajo{
    public $merk;
    protected $ukuran;

    function tampil() {
        echo $this->warna;
    }

}

$baju1 = new baju();
$baju2 = new bajo();
echo $baju1->tampil();