<?php
require_once 'vendor/autoload.php';
use App\classes\Count;

if (isset($_POST['btn'])) {
    $count = new Count($_POST);
    $result = $count->index();
    include 'index.php';
}
else {
    header('Location: index.php');
}

