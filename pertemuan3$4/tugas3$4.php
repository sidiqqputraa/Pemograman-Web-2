<?php

    class Mahasiswa {
        public $nama;
        public $nim;
        public $jurusan;

    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    public function tampilkanData(){
        return "$this->nama, $this->nim, $this->jurusan.";
    }
}
    $mahasiswa = new Mahasiswa("Sidiq Putra Nababan", "230302093", "Teknik Informatika");
    echo $mahasiswa->tampilkanData();
?>