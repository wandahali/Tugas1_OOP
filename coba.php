<?php

class Mobil {
    private $merk;
    private $nama;
    private $warna;
    private $kecepatan;
    
    public function inputDataMobil() {
        $this->merk = readline("Masukkan merk mobil: ");
        $this->nama = readline("Masukkan nama mobil: ");
        $this->warna = readline("Masukkan warna mobil: ");
        $this->kecepatan = readline("Masukkan kecepatan mobil: ");
    }
    
    public function getCetak() {
        echo "Merk mobil: " . $this->merk . "\n";
        echo "Nama mobil: " . $this->nama . "\n";
        echo "Warna mobil: " . $this->warna . "\n";
        echo "Kecepatan mobil: " . $this->kecepatan . "\n";
    }
    
    public function getKondisiMobil() {
        if ($this->kecepatan == 0) {
            echo "Mobil sedang berhenti.\n";
        } else if ($this->kecepatan < 20) {
            echo "Mobil sedang melaju lambat.\n";
        } else if ($this->kecepatan >= 20 && $this->kecepatan < 60) {
            echo "Mobil sedang melaju dengan kecepatan sedang.\n";
        } else {
            echo "Mobil sedang melaju dengan kecepatan tinggi.\n";
        }
    }
}

// contoh penggunaan class Mobil
$mobil = new Mobil();
$mobil->inputDataMobil();
$mobil->getCetak();
$mobil->getKondisiMobil();

?>
