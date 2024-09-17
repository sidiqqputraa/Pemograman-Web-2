<?php

    class Mahasiswa {
        private $nama;
        private $nim;
        private $jurusan;

    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    public function tampilkanData(){
        return "<br> nama : $this->nama <br> nim : $this->nim <br> jurusan : $this->jurusan";
    }

    public function getNama(){
        return $this->nama;
    }

    public function getNim(){
        return $this->nim;
    }

    public function getJurusan(){
        return $this->jurusan;
    }

    public function setNama($nama){
        $this->nama = $nama;
    }

    public function setNim($nim){
        $this->nim = $nim;
    }

    public function setJurusan($jurusan){
        $this->jurusan = $jurusan;
    }
}

    $mahasiswa = new Mahasiswa("Davu", "230302092", "Teknik Informatika");
    echo $mahasiswa->tampilkanData();
    echo "<br>========";
    $mahasiswa->setNama("Sidiq");
    echo $mahasiswa->tampilkanData();
    echo "<br>";
    $mahasiswa->setNim("230902099");
    echo $mahasiswa->tampilkanData();
?>