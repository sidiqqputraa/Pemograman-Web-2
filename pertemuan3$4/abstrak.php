<?php

    abstract class pengguna {
        protected $nama;

    public function __construct($nama){
        $this->nama = $nama;
    }

    public function getNama(){
        return $this->nama;
    }

    abstract public function aksesFitur($nama);

    public function akses(){
        $this->nama = $nama;
        return "<br> Nama berhasil dirubah menjadi $this->nama";
    }
}

class Dosen extends pengguna {
        private $mataKuliah;

    public function __construct($nama, $mataKuliah){
        parent::__construct($nama);
        $this->mataKuliah = $mataKuliah;
    }

    public function tampilkanDosen(){
        return "Nama : $this->nama <br> Matkul : $this->mataKuliah";
    }

    public function aksesFitur($nama){
        parent:: akses($nama);
    }
}
class Mahasiswa extends pengguna{
    protected $npm;

    public function __construct($nama, $npm){
        parent::__construct($nama);
        $this->npm = $npm;
    }

    public function tampilkanMahasiswa(){
        return "Nama : $this->nama <br> NPM : $this->npm";
    }

    public function aksesFitur($nama){
        parent::akses($nama);
    }
}


$dosen = new Dosen ("Adit", "Pemograman");
echo $dosen->getNama();
echo "<br>";
echo $dosen->aksesFitur("Sidiq");
?>