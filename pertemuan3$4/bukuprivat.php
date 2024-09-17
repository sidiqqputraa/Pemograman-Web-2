<?php

    class buku {

        private $judul;
        private $penulis;

    public function __construct($judul, $$penulis) {
        $this->judul = $judul;
        $this->penulis = $penulis;
    }

    public function getJudul() {
        return $this->judul;
    }

    public function setJudul($judul) {
        return $this->judul;
    }
}
    $buku1 = new buku ("Pemograman PHP", "Andi Prasetya");
    echo $buku1->getJudul();
?>