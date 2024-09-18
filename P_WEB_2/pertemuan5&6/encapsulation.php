<?php
//Membuat class Person
 class Person {
    //dengan nama properti $nama
    protected $name;
//membuat metode dengan nama metode construct
    public function __construct($name){
        $this->name = $name;
    }
//Membuat metode dengan nama methode getName
    public function getName() {
        return $this->name;
    }
 }
//Membuat class Student
 class Student extends Person {
    private $studentID;
//membuat metode dengan nama metode construct
    public function __construct($name, $studentID) {
        parent::__construct($name);
        $this->studentID = $studentID;
    }
//Membuat metode dengan nama metode getStudent
    public function getStudent(){
        return " <br> Nama : $this->name <br> 
        id = $this->studentID";
    }
//Membuat metode dengan nama metode getName
    public function getName() {
        return "Nama : $this->name ID : $this->studentID";
    }
//Membuat method dengan nama method setStudent
    public function setStudent($studentID) {
        $this->studentID = $studentID;
    }
//Membuat metode dengan nama metode setName
    public function setName($name) {
        $this->name = $name;
    }
}
//Instansiasi objek class Student
$student = new Student("Sidiq", "230302093");
echo $student->getStudent();
?>