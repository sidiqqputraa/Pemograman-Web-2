<?php
    //Membuat class Mahasiswa 
    class Mahasiswa {
    //Dengan properti nama, nim, jurusan
        private $nama;
        private $nim;
        private $jurusan;

        //Membuat metode dengan nama metode constructor
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    //Membuat metode dengan nama metode tampilkanData
    public function tampilkanData(){
        return "<br> nama : $this->nama <br> nim : $this->nim <br> jurusan : $this->jurusan";
    }

    //Membuat metode dengan nama getName
    public function getNama(){
        return $this->nama;
    }

    //Membuat metode dengan nama getNim
    public function getNim(){
        return $this->nim;
    }
    //Membuat metode dengan nama getJurusan
    public function getJurusan(){
        return $this->jurusan;
    }

    //Membuat metode dengan nama setNama
    public function setNama($nama){
        $this->nama = $nama;
    }
    //Membuat metode dengan nama setNim
    public function setNim($nim){
        $this->nim = $nim;
    }
    //Membuat metode dengan nama setJurusan
    public function setJurusan($jurusan){
        $this->jurusan = $jurusan;
    }
}

    //Instansiasi objek class mahasiswa
    $mahasiswa = new Mahasiswa("Davu", "230302092", "Teknik Informatika");
    echo $mahasiswa->tampilkanData();
    echo "<br>========";
    $mahasiswa->setNama("Sidiq");
    echo $mahasiswa->tampilkanData();
    echo "<br>";
    $mahasiswa->setNim("230902099");
    echo $mahasiswa->tampilkanData();
?>