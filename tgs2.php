<?php
class Sekolah {
    public $nama = "jihan";
    private $alamat = "cisarua";
    protected $jmlsis = 1500;
    public $jmlgur = 100;
    protected $jumkel= 300;

    public function getAlamat(){
        echo "alamat :" .$this->alamat;
    }

}

class PPLG extends Sekolah {
    public function getsiswa(){
        echo "jumlah siswa : ". $this->jmlsis;
               
    }

    public function getkelas(){
        echo "jumlah kelas : ". $this->jumkel;
               
    }
}


// public
$kelas1 = new Sekolah ();
echo "nama :". $kelas1->nama;
echo "<br>";
//private
echo $kelas1->getAlamat();
echo "<br>";
echo "jumlah guru :". $kelas1->jmlgur;
echo "<br>";
//protected
$kelas2= new PPLG();
echo $kelas2->getsiswa();
echo "<br>";
echo $kelas2->getkelas();
echo "<br>";