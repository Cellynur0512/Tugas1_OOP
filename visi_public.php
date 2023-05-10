<?php

class baju{
    public $merk;
    private $warna;
    protected $ukuran;

    function tampil() {
        echo $this->merk = "apawe";
    }
}

$baju1 = new baju();
echo $baju1->tampil();