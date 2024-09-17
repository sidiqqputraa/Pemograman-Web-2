<?php

    class Mahasiswa {
        public $nama;
        public $nim;
        public $jurusan;

    public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    public function tampilkanData(){
        return "Nama = $this->nama <br> NIM = $this->nim <br> Jurusan = $this->jurusan";
    }

    public function updateJurusan($jurusan){
        $this->jurusan = $jurusan;
    }
}

$mahasiswa = new Mahasiswa ("Sidiq Putra Nababan", "230302093", "Komputer dan bisnis");
echo $mahasiswa->tampilkanData();
echo "<br>";
$mahasiswa->updateJurusan("Rekayasa Keamanan Cyber");
echo $mahasiswa->tampilkanData();
?>

