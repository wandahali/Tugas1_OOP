<?php
class sekolah {
    public $nama = "Wanda";
    protected $jmlsis = "34";
    public $jmlgur = "100";
    protected $jumkel = "300";

    public function setnama($nama){
        $this->nama = $nama;
    }
    public function setalamat($alamat){
        $this->alamat = $alamat;

    }
    public function setjumgur($jumgur){
        $this->jumgur = $jumgur;
    }
}
class PPLG extends sekolah {
    private $alamat = "Cicurug";
    
    public function setjmlsis($jmlsis){
        $this->jmlsis = $jmlsis;
    }
    public function setjumkel($jumkel){
        $this->jumkel = $jumkel;
    }

    public function getcetak() {

        echo "Nama: " .$this->nama;
        echo "<br>";
        echo " Alamat: " .$this->alamat;
        echo "<br>";
        echo "Jumlah Siswa: " .$this->jmlsis;
        echo "<br>";
        echo "Jumlah Guru: " .$this->jmlgur;
        echo "<br>";
        echo "Jumlah Kelas: " .$this->jumkel;
        

    }

}

$PPLG1= new sekolah();
$PPLG2= new PPLG();
echo $PPLG2->getcetak();
echo "<br> =================<br>";


