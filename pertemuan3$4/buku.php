<?php

    class buku{

        public $judul;
        public $penulis;

    public function __construct(){
        $this->judul = $judul;
        $this->penulis = $penulis;
    }

    public function tampilkanInfo(){
        return "judul: $this->judul, penulis: $this->penulis";
    }
    }
    $buku1 = new buku("pemograman PHP", "Andi Prasetyo");
    echo $buku1->tampilkanInfo();
?>