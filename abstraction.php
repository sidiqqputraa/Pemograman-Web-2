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

    abstract class Course {
        protected $coursename;

    public function __construct($coursename) {
        $this->coursename = $coursename;
    }

    abstract public function getCourseDetails();
    }

    class OnlineCourse extends Course {
        public function getCourseDetails() {
            return "<br> Nama Online : $this->coursename";
        }
    }

    class OfflineCourse extends Course {
        public function getCourseDetails() {
            return "<br>Nama Offline : $this->coursename";
        }
    }

    $onlinecourse = new OnlineCourse("PWEB");
    echo $onlinecourse->getCourseDetails(); "<br>";

    $offlinecourse = new OfflineCourse("IPA");
    echo $offlinecourse->getCourseDetails();
?>