<?php
class animal{
    public $nama;
    public $umur;
    public $jenishidup;

    public function setnama($nama){
        $this->nama=$nama;
    }
    public function setjenishidup($jenishidup){
        $this->jenishidup=$jenishidup;
    }
    public function getcetak(){
        echo "nama animal: ".$this->nama;
        echo "<br>";
        echo "jenis hidup: ".$this->jenishidup;
        echo "<br> ================================= <br>";
    }
}

$jerapah = new animal();
$jerapah->setnama("jerapah afrika");
$jerapah->setjenishidup("darat");
$jerapah->getcetak();

$burung = new animal();
$burung->setnama("burung garuda");
$burung->setjenishidup("udara");
$burung->getcetak();
?>