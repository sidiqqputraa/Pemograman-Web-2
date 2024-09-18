<?php
    //Membuat class pengguna
    class pengguna {
        //Mebuat properti nama
        protected $nama;
        //Membuat metode dengan nama construct
    public function __construct($nama){
        $this->nama = $nama;
    }
    //Membuat metode dengan nama metode getNama
    public function getNama(){
        return $this->nama;
    }
}
    //Membuat clas Dosen
    class Dosen extends pengguna {
        //Dengan properti mataKuliah
        private $mataKuliah;
        //Menggunakan metode construct
    public function __construct($nama, $mataKuliah){
        parent::__construct($nama);
        $this->mataKuliah = $mataKuliah;
    }
    //Membuat metode dengan nama mmetode getMakaKuliah
    public function getMataKuliah(){
        return $this->mataKuliah;
    }
}
//Instansiasi objek class pengguna dan Dosen
$dosen = new Dosen ("Adit", "Pemograman");
echo $dosen->getNama();
echo "<br>";
echo $dosen->getMataKuliah();
?>