<?php
    //Membuat clas Mahasiswa
    class Mahasiswa {
    //dengan properti nama, nim, jurusan
        public $nama;
        public $nim;
        public $jurusan;
    //Membuat metode dengan nama metode constructor
    public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
    //Membuat metode dengan nama metode tampilkanData
    public function tampilkanData(){
        return "Nama = $this->nama <br> NIM = $this->nim <br> Jurusan = $this->jurusan";
    }
}
//Instansiasi objek dari kelas Mahasiswa
$mahasiswa = new Mahasiswa ("Sidiq Putra Nababan", "230302093", "Komputer dan bisnis");
echo $mahasiswa->tampilkanData();
?>
