<?php
class mobil{
    public $merk = "merk",
           $nama = "nama",
           $warna = "warna",
           $kecepatan = "0",
           $getkondisi = "kondisi";
        
    public function inputmobil() {
        return "$this->merk, $this->nama, $this->warna";
    }

    public function getcetak() {
        echo "Kondisi "   .$this->getkondisi;
        echo "<br>";
        echo "Merk: "      .$this->merk;
        echo "<br>";
        echo "Nama: "     .$this->nama;
        echo "<br>";
        echo "Warna: "     .$this->warna;
        echo "<br>";
        echo "Kecepatan: " .$this->kecepatan;
        echo "<br> ================================= <br>";
    }
    public function getkondisi($getkondisi){
        $this->getkondisi=$getkondisi;
    }
}
$mobil1 = new mobil();
$mobil1->getkondisi = "maju";
$mobil1->merk = "Toyota";
$mobil1->nama = "Fortuner";
$mobil1->warna = "Hitam";
$mobil1->kecepatan = "250";
$mobil1->getcetak();

$mobil2 = new mobil();
$mobil2->getkondisi = "Mundur";
$mobil2->merk = "Honda";
$mobil2->nama = "Brio";
$mobil2->warna = "Hijau";
$mobil2->kecepatan = "100";
$mobil2 ->getcetak();



