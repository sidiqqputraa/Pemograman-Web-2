<?php
//Membuat class mahasiswa
    class Mahasiswa {
    //Membuat Properti nama, nim, jurusan
        public $nama;
        public $nim;
        public $jurusan;

    //Contractor
    public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
    //Membuat Metode dengan nama metode tampilkanData
    public function tampilkanData(){
        return "<br> Nama = $this->nama <br> NIM = $this->nim <br> Jurusan = $this->jurusan";
    }
    //Membuat metode dengan nama metode updateJurusan
    public function updateJurusan($jurusan){
        $this->jurusan = $jurusan;
    }
    //Membuat metode dengan nama metode setNim
    public function setNim($nim){
        $this->nim = $nim;
    }
}
//Instansiasi Objek dari kelas Mahasiswa
$mahasiswa = new Mahasiswa ("Sidiq Putra Nababan", "230302093", "Komputer dan bisnis");
echo $mahasiswa->tampilkanData();
echo "<br>===========";
$mahasiswa->updateJurusan("Rekayasa Keamanan Cyber");
echo $mahasiswa->tampilkanData();
echo "<br>===========";
$mahasiswa->setNim("230202092");
echo $mahasiswa->tampilkanData();
?>

