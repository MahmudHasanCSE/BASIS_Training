<?php
require_once 'vendor/autoload.php';
use App\classes\Student;

$student = new  Student();
$student ->manage();
$student ->one();
$student ->two();
$student ->three();
$student ->ten();
$student ->tenOne();
$student ->text();
$student ->hello(); //Trait
Student::demo();