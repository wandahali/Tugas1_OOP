<?php

class mobil {
    public $nama;
    private $warna;
    protected $bentuk = "panjang";

    function cetak() {
        return $this->warna = "merah";
    }
}

class dogong  {
    function cetak(){
        return $this->bentuk;
    }
}

$mobil1 = new mobil();
$mobil2 = new dogong();

echo $mobil2->cetak();
