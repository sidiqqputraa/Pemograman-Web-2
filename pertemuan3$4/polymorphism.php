<?php

    class pengguna {
        protected $nama;

    public function __construct($nama){
        $this->nama = $nama;
    }

    public function getNama(){
        return $this->nama;
    }

    public function aksesFitur(){
        return $this->nama;
    }
}

class Dosen extends pengguna {
        private $mataKuliah;

    public function __construct($nama, $mataKuliah){
        parent::__construct($nama);
        $this->mataKuliah = $mataKuliah;
    }

    public function getMataKuliah(){
        return $this->mataKuliah;
    }
}

$dosen = new Dosen ("Adit", "Pemograman");
echo $dosen->getNama();
echo "<br>";
echo $dosen->getMataKuliah();
echo "<br>";
echo $dosen->aksesFitur();
?>