<?php
    //Membuat class Mahasiswa
    class Mahasiswa {
    //Membuat Properti dengan properti nama, nim, jurusan
        public $nama;
        public $nim;
        public $jurusan;
    //Membuat metode dengan nama metode consturctor
    public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
    //membuat metode dengan nama metode tampilkanData
    public function tampilkanData(){
        return "Nama = $this->nama <br> NIM = $this->nim <br> Jurusan = $this->jurusan";
    }
}
//instansiasi objek dari kelas Mahasiswa
$mahasiswa = new Mahasiswa ("Sidiq Putra Nababan", "230302093", "Komputer dan bisnis");
echo $mahasiswa->tampilkanData();
?>