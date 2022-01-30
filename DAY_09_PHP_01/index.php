<?php

require_once 'vendor/autoload.php'; // require or require_once, predefined syntax to link files
use App\classes\HelloWorld;

$helloWorld = new HelloWorld();
$helloWorld->index();