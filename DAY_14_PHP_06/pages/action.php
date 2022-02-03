<?php
require_once '../vendor/autoload.php';
use App\classes\StringWordCount;
use App\classes\Student;

if (isset($_POST['btn']))
{
    $stringWordCount = new StringWordCount($_POST);
    $result          = $stringWordCount -> getWordString();
    include 'index.php';
}
else if (isset($_GET['status']))
{
    if ($_GET['status'] == 'search')
    {
        $student = new Student();
        $students = $student -> getAllStudent();
        include 'search.php';
    }
}
else {
    header('Location: index.php');
}