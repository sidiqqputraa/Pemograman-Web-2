<?php

    abstract class pengguna {
        protected $nama;

    public function __construct($nama){
        $this->nama = $nama;
    }

    public function getNama(){
        return $this->nama;
    }

    abstract public function aksesFitur();

    public function akses($nama){
        $this->nama = $nama;
    }
}

class Dosen extends pengguna {
        private $mataKuliah;

    public function __construct($nama, $mataKuliah){
        parent::__construct($nama);
        $this->mataKuliah = $mataKuliah;
    }

    public function tampilkanDosen() {
        return "Nama : $this->nama <br> NPM : $this->mataKuliah";
    }

    public function aksesFitur() {
        parent::akses($nama);
    }
}

class Mahasiswa extends pengguna {
    protected $npm;

    public function __construct($nama, $npm){
        parent::__construct($nama);
        $this->npm = $npm;
    }
    public function tampilkanMahasiswa(){
        return "Nama : $this->nama <br> NPM : $this->npm";
    }

    public function aksesFitur() {
        parent::akses($nama);
    }
}

$dosen = new Dosen ("Pak Andes", "Jaringan");
echo $dosen->tampilkanDosen();

echo "<br>";

$mahasiswa = new Mahasiswa ("Sidiq", "230302093");
echo $mahasiswa->tampilkanMahasiswa();
?>