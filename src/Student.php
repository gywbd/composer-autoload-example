<?php

namespace school;

class Student{
    private $name;
    private $age;
    private $gender;

    public function __construct($name,$age,$gender) {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    public function getGender() {
        return $this->gender;
    }
}

