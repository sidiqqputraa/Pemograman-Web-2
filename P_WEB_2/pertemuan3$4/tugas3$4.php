<?php
    //Membuat class Mahasiswa
    class Mahasiswa {
        //Dengan properti nama, nim, jurusan
        public $nama;
        public $nim;
        public $jurusan;
        //Membuat metode dengan nama metode construct
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
    //Membuat metode dengan nama metode tampilkanData
    public function tampilkanData(){
        return "$this->nama, $this->nim, $this->jurusan.";
    }
}
    //Instansiasi objek class Mahasiswa
    $mahasiswa = new Mahasiswa("Sidiq Putra Nababan", "230302093", "Teknik Informatika");
    echo $mahasiswa->tampilkanData();
?>