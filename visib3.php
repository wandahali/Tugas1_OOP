<?php

class produk {
    public $judul,
           $penulis,
           $penerbit;
           
          private $harga;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "pemerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

        public function getharga() {
            return $this->harga;
        }
    

        public function getlabel() {
            return "$this->penulis, $this->penerbit";
        }

        public function getinfoproduk() {
            $str = "{$this->judul} | {$this->getlabel()} (Rp. {$this->harga})";

            return $str;
        }

}


 class komik extends produk {
    public $jmhalaman;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit",
        $harga = 0, $jmhalaman = 0 ) {

            parent::__construct( $judul, $penulis, $penerbit, $harga );

            $this->jmhalaman = $jmhalaman;
        }

        public function getinfoproduk() {
            $str = "komik :" . parent::getinfoproduk() . " - {$this->jmhalaman} halaman.";

            return $str;
        }
}

class game extends produk {
    public $waktumain;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktumain = 0) {
        parent::__construct( $judul, $penulis, $penerbit, $harga );

        $this->waktumain = $waktumain;
    }


    public function getharga() {
        return $this->harga;
    }


    public function getinfoproduk() {
        $str = "game :" . parent::getinfoproduk() . " ~ {$this->waktumain} jam.";
        return $str;
    }
}
 
class cetakinfoproduk {
    public function cetak( produk $produk ) {
        $str = "{$produk->judul} | {$produk->getlabel()} {Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new komik("naruto", "masashi", "shonen jump", 3000, 100);
$produk2 = new game("subway", "neil", "sonny", 27000, 2000);

echo $produk1->getinfoproduk();
echo "<br>";
echo $produk2->getinfoproduk();
echo "<hr>";
     

echo $produk1->getharga();