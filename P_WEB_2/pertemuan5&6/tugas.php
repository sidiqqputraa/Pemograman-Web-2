<?php
//Membuat classPerson
    class Person {
        //Dengan properti nama
        protected $nama;
//Membuat method dengan nama method contruct
    public function __construct($nama) {
        $this->nama = $nama;
    }
//membuat method dengan nama method getRole
    public function getRole() {
        return "Nama : $this->nama";
    }
//Membuat method dengan nama methos getNama
    public function getNama() {
        $this->nama;
    }
}
//Membuat class Dosen
    class Dosen extends Person {
        //Dengan properti nidn
        private $nidn;
    //Membuat method dengan nama method construct
        public function __construct($nama, $nidn){
            parent::__construct($nama);
            $this->nidn = $nidn;
        }
//Membuat methode dengan nama methode getRole
        public function getRole() {
            return parent::getRole(). " <br> 
                    NIDN : $this->nidn";
        }
         //Membuat methode dengan nama methode setRole
        public function setRole() {
            return "NIDN : $this->nidn";
    }
}
//Membuat class Mahasiswa
    class Mahasiswa extends Person {
        //Dengan nama properti nim
        private $nim;
//Membuat methode dengan nama methode contruct
    public function __construct($nama, $nim) {
        parent::__construct($nama);
        $this->nim = $nim;
    }
//Membuat methode dengan nama methode getRole
    public function getRole() {
        return parent::getRole()." <br>
                NIM : $this->nim";
    }
//Membuat methode dengan nama methode setRole
    public function setRole() {
        return "NIM : $this->nim";
    }
}
//Membuat abstract class Jurnal 
    abstract class Jurnal extends Person {
        protected $penulis;
//Methode dengan nama methode contruct
    public function __construct($penulis){
        $this->penulis = $penulis;
    }
//Membuat abstract methode getjurnal
    abstract public function getJurnal();
    }
//Membuat class JurnalDosen
    class JurnalDosen extends Jurnal {
//MEmbuat methode dengan nama methode contruct
        public function __construct($penulis)    
        {
            parent::__construct($penulis);
        }
        //MEmbuat methode dengan nama methode getJurnal
        public function getJurnal() {
            return "Nama Jurnal : $this->penulis";
        }
    }
//Membuat class JurnalMahasiswa
    class JurnalMahasiswa extends Jurnal {
        //Membuat methode dengan nama methode getJurnal
        public function getJurnal() {
            return "Nama Mahasiswa : $this->penulis";
        }
    }
//Instansiasi objek class Jurnal Dosen
    $jurnal = new JurnalDosen("Risqi");
    echo $jurnal->getJurnal();

?>