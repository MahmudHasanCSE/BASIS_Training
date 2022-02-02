<?php

require_once '../vendor/autoload.php';
use App\classes\StringWordCount;

if (isset($_POST['btn'])){
    $count  = new StringWordCount($_POST);
//    $result = $count->index();
    $word   = $count -> wordCount();
    $character   = $count -> characterCount();
    include 'index.php';
}else{
    header('Location: index.php');
}

