<?php

require "vendor/autoload.php";

use school\Student;
use school\Classroom;

$data = DB::getAllStudents();

$classroom = new Classroom();
foreach($data as $s) {
    $student = $classroom->addStudent($s);
}

$students = $classroom->getAllStudents();

foreach($students as $student) {
    echo hello($student->getName());
}
