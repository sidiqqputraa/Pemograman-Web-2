<?php

 class Person {
    protected $name;

    public function __construct($name){
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
 }

 class Student extends Person {
    private $studentID;

    public function __construct($name, $studentID) {
        parent::__construct($name);
        $this->studentID = $studentID;
    }

    public function getStudent(){
        return " <br> Nama : $this->name <br> 
        id = $this->studentID";
    }

    public function getName() {
        return "Nama : $this->name ID : $this->studentID";
    }

    public function setStudent() {
        $this->studentID = $studentID;
    }

    public function setName() {
        $this->name = $name;
    }
}
$student = new Student("Sidiq", "230302093");
echo $student->getStudent();
?>