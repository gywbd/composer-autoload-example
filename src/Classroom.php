<?php
namespace school;


class Classroom {
    private $students;

    public function __construct(){
        $this->students=[];
    }

    public function addStudent($s){
        $student = new Student($s['name'],$s['age'],$s['gender']);
        $this->students[] = $student;
    }

    public function getAllStudents(){
        return $this->students;
    }
}
