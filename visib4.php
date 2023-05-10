<?php

class Tanaman {
    public $nama ;
    protected $akar ;
    private $harga   ;

    public function __construct($nama= "nama", $daun= "daun", 
    $akar= "akar", $harga= 0){
            $this->nama    = $nama;
            $this->daun    = $daun;
            $this->akar    = $akar;
            $this->harga   = $harga;
            
    }   

    public function getHarga(){
        return $this->harga;
    }


    public function getLabel(){
        return "$this->daun, $this->akar";
    }

    public function getInfotanaman(){
        $str= "{$this->nama} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }
}

class Bunga extends Tanaman{
    public $jmlKelopak;

    public function __construct($nama= "nama", $daun= "daun", 
    $akar= "akar", $harga= 0, $jmlKelopak= 0) {

        parent::__construct($nama, $daun, $akar, $harga);

        $this->jmlKelopak = $jmlKelopak;

    }

    public function getInfotanaman (){

        $str= "bunga :". parent::getInfotanaman(). " - {$this->jmlKelopak} Kelopak.";

        return $str;
    }

}

class Pohon extends Tanaman {
    public $jmlBuah;

    public function __construct($nama= "nama", $daun= "daun", 
    $akar= "akar", $harga= 0, $jmlBuah= 0) {

        parent::__construct($nama, $daun, $akar, $harga);

        $this->waktuMain= $jmlBuah;

    }

    
    public function getInfotanaman (){

        $str= "pohon :". parent::getInfotanaman(). " / {$this->jmlBuah} perbuah.";

        return $str;
    }

    public function getakar() {
        return $this->akar;
    }

}

$Tanaman1 = new Bunga ("Mawar", "Oval", "Serabut", 15000, 20);
$Tanaman2 = new Pohon ("Mangga", "Lancip", "Tunggang", 70000, 20);

echo $Tanaman1->getInfotanaman();
echo "<br>";
echo $Tanaman2->getInfotanaman();
echo "<hr>";

echo $Tanaman2->getakar();
