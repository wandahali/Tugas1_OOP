<?php
class produk {
    public  $judul,
            $penulis,
            $penerbit,
            $harga;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "0") {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    public function __destruct() {
        echo "<br>";
        echo "selesai";

    }

    public function getlab() {
        return "$this->penulis, $this->penerbit, $this->harga";
    }
}

$produk2 = new produk("laskar pelangi", "andrea", "Bentang Pustaka ","50000");
$produk3 = new produk("saya pamit", "Ria Ricis", "loveable", "150000");

echo "Buku: " . $produk2->getlab();
echo "<br> ==================================<br>";
echo "Buku: " .$produk3->getlab();
