<?php
//Membuat class Person
 class Person {
    //Dengan properti nama
    protected $name;
//Membuat method dengan nama method contruct
    public function __construct($name){
        $this->name = $name;
    }
//Membuat method dengan nama method getName
    public function getName() {
        return $this->name;
    }
 }
//Membuat class Student
 class Student extends Person {
    //dengan properti studentID
    private $studentID;
//Membuat method dengan nama method contruct
    public function __construct($name, $studentID) {
        parent::__construct($name);
        $this->studentID = $studentID;
    }
//membuat method dengan nama method getStudent
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