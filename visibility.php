<?php

class data{
    public $nama;
    private $rombel;
    protected $rayon;

    function cetak(){
        return $this->rombel = "PPLG X-1";
    }
}

class biodata extends data{
    function cetak(){
        return $this->rayon = "Cisarua 5";
    }
}

$data1 = new data();
$data2 = new biodata();

echo $data2->cetak();