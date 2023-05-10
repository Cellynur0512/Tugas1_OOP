<?php
class sepatu {

    private $merk = 'Nike';
    private $warna = 'Hitam';
    
    public function tampil()
    {
        echo "Sepatu ini bermerk $this->merk dan sepatu ini berwarna $this->warna";
    }

    public function __destruct()
    {
        echo '<br> Ini destruktor.';
    }

    public function __construct()
    {
    	echo 'Ini konstruktor. <br>';
    }

}

$sepatu1 = new sepatu();

echo $sepatu1->tampil();
?>