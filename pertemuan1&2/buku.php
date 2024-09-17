<?php

    class buku {

        public $judul;
        public $penulis;

    public function __construct($judul, $penulis){
        $this->judul = $judul;
        $this->penulis = $penulis;
    }
    public function tampilkanInfo() {
        return "judul buku: $this->judul, nama penulis $this->penulis.";
    }
}
    $buku1 = new buku ("Pemograman PHP", "John doe");
    echo $buku1->tampilkanInfo();
?>