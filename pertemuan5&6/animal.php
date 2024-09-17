<?php

    class Animal {
        protected $nama;

    public function __construct($nama){
        $this->nama = $nama;
    }

    public function getNama() {
        return $this->nama;
    }
}
 
    class Dog extends Animal {
        public function makeSound() {
            return "Woof!";
        }
    }

    class cat extends Animal {
        public function makeSound() {
            return "Woew!";
        }
    }

    $dog = new Dog("Buddy");
    echo $dog->getNama() . "says". $dog->makeSound()
?>