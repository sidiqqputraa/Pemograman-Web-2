<?php
    //Membuat clas Mahasiswa
    class Mahasiswa {
    //dengan properti nama, nim, jurusan
        public $nama;
        public $nim;
        public $jurusan;
        //Membuat merode dengan nama metode construstor
    public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    //Membuat metode dengan nama metode tampilkanData
    public function tampilkanData(){
        return "Nama = $this->nama <br> NIM = $this->nim <br> Jurusan = $this->jurusan";
    }

    //Membuat metode dengan nama metode updateJurusan
    public function updateJurusan($jurusan){
        $this->jurusan = $jurusan;
    }
}
//Instansiasi objek kelas Mahasiswa
$mahasiswa = new Mahasiswa ("Sidiq Putra Nababan", "230302093", "Komputer dan bisnis");
echo $mahasiswa->tampilkanData();
echo "<br>";
$mahasiswa->updateJurusan("Rekayasa Keamanan Cyber");
echo $mahasiswa->tampilkanData();
?>

