<?php
//inheritance
//membuat class person
 class Person {
    protected $name;

    //constructor
    public function __construct($name){
        $this->name = $name;
    }
    //Membuat metode dengan nama methode getName
    public function getName() {
        return $this->name;
    }
 }
//membuat class student
 class Student extends Person {
    //Dengan properti StudentID
    private $studentID;
//Membuat metode dengan nama metode construct 
    public function __construct($name, $studentID) {
        parent::__construct($name);
        $this->studentID = $studentID;
    }
//Membuat metode dengan method getStudent
    public function getStudent(){
        return " <br> Nama : $this->name <br> 
        id = $this->studentID";
    }
//Membuat method dengan nama method setStudent
    public function setStudent() {
        return $this->studentID;
    }
}
//Instansiasi objek class Student
$student = new Student("Sidiq", "230302093");
echo $student->getStudent();
?>