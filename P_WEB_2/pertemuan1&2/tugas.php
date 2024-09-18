<?php
    //Membuat clas Dosen
    class Dosen {
    //Membuat properti nama, nip, mataKuliah
        public $nama;
        public $nip;
        public $mataKuliah;
    //Membuat metode dengan nama metode constuctor
    public function __construct($nama, $nip, $mataKuliah){
        $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
    }
    //Membuat metode dengan nama metode tampilkan Dosen
    public function tampilkanDosen() {
        return "Nama = $this->nama <br> NIP = $this->nip <br> Mata Kuliah = $this->mataKuliah";
    }
}

    //Instansiasi objek kelas Dosen
    $dosen = new Dosen("Pak Yusuf", "230302093", "Bahasa Indonesia");
    echo $dosen->tampilkanDosen();
    

?>