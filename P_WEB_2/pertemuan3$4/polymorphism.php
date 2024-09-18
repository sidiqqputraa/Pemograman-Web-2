<?php
    //Membuat class pengguna
    class pengguna {
        //Dengan properti nama
        protected $nama;
        //Membuat metode dengan nama metode construct
    public function __construct($nama){
        $this->nama = $nama;
    }
    //Membuat metode dengan nama metode getNama 
    public function getNama(){
        return $this->nama;
    }
    //Membuat metode dengan nama metode aksesFitur
    public function aksesFitur(){
        return $this->nama;
    }
}
    //Membuat class Dosen
class Dosen extends pengguna {
    //Dengan properti mataKuliah
        private $mataKuliah;
    //Membuat metode dengan nama construct
    public function __construct($nama, $mataKuliah){
        parent::__construct($nama);
        $this->mataKuliah = $mataKuliah;
    }
    //Membuat metode dengan nama metide getMataKuiah
    public function getMataKuliah(){
        return $this->mataKuliah;
    }
}
    //Instansiasi objek class Dosen
$dosen = new Dosen ("Adit", "Pemograman");
echo $dosen->getNama();
echo "<br>";
echo $dosen->getMataKuliah();
echo "<br>";
echo $dosen->aksesFitur();
?>