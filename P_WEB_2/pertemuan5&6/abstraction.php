<?php
    //Membuat class Person
 class Person {
    //Dengan properti nama
    protected $name;
    //Membuat metode dengan nama metode construct
    public function __construct($name){
        $this->name = $name;
    }
    //Membuat metode dengan nama metode getNama
    public function getName() {
        return $this->name;
    }
 }
//Membuat class Student
 class Student extends Person {
    //dengan properti studentID
    private $studentID;
//Membuat metode dengan nama metode contruct
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
}
//Membuat abstract class Course
    abstract class Course {
        //dengan properti coursename
        protected $coursename;
//Membuat netode dengan nama metode contruct
    public function __construct($coursename) {
        $this->coursename = $coursename;
    }
//Membuat abstract metode getCourseDetails
    abstract public function getCourseDetails();
    }
//Membuat class OnlineCourse
    class OnlineCourse extends Course {
        //dengan metode getCourse
        public function getCourseDetails() {
            return "<br> Nama Online : $this->coursename";
        }
    }
//Membuat class OfflineCourse
    class OfflineCourse extends Course {
        //dengan metode getCourseDetails
        public function getCourseDetails() {
            return "<br>Nama Offline : $this->coursename";
        }
    }
//Instansiasi objek class OnlineCourse
    $onlinecourse = new OnlineCourse("PWEB");
    echo $onlinecourse->getCourseDetails(); "<br>";
//Instasiasi objek class OfflineCourse
    $offlinecourse = new OfflineCourse("IPA");
    echo $offlinecourse->getCourseDetails();
?>