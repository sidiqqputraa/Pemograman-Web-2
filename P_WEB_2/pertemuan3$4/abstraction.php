<?php
    //Membuat classs pengguna
    abstract class pengguna {
    //Dengan nama properti nama
        protected $nama;
    //Membuat metode dengan nama metode constuct
    public function __construct($nama){
        $this->nama = $nama;
    }
    //Membuat metode dengan nama getNama
    public function getNama(){
        return $this->nama;
    }
    //membuat metode dengan nama aksesFitur
    abstract public function aksesFitur();
    //Membuat metode dengan nama metode akses
    public function akses($nama){
        $this->nama = $nama;
    }
}
    //Instansiasi objek kelas pengguna
class Dosen extends pengguna {
        private $mataKuliah;

    public function __construct($nama, $mataKuliah){
        parent::__construct($nama);
        $this->mataKuliah = $mataKuliah;
    }

    public function tampilkanDosen() {
        return "Nama : $this->nama <br> NPM : $this->mataKuliah";
    }

    public function aksesFitur(){
        return "Nama = $this->nama";
    }

    public function akses($nama){
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

    public function aksesFitur(){
        return "Nama = $this->nama NPM = $this->npm";
    }

    public function akses($nama){
        parent::akses($nama);
    }
}

$dosen = new Dosen ("Pak Andes", "Jaringan");
echo $dosen->tampilkanDosen();

echo "<br>";

$mahasiswa = new Mahasiswa ("Sidiq", "230302093");
echo $mahasiswa->tampilkanMahasiswa();
?>