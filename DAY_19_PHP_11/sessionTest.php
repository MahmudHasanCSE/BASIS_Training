<?php
session_start();

function reg($reg){
    (isset($_SESSION['reg']))? array_push($_SESSION['reg'],$reg) : $_SESSION['reg'][0] = $reg;
    
}

function printData(){
    echo "<pre>";
    print_r($_SESSION);
}

function printDataWithLoop(){
    echo "<br/>";echo "<br/>";echo "<br/>";
    echo "REGISTRATION INFO";
    echo "<br/>";echo "<br/>";echo "<br/>";
    foreach($_SESSION['reg'] as $reg){
       
            echo"Name: ". $reg[0];
            echo "<br/>";
            echo"Email: ". $reg[1];
            echo "<br/>";
            echo"Password: ". $reg[2];
            echo "<br/>";
            echo "<br/>";
       
    }

}





reg(['tom','tom@gmail.com','111222']);
reg(['bob','bob@gmail.com','111222']);
reg(['max','max@gmail.com','111222']);
printData();
printDataWithLoop();
echo "<br/>";
unset($_SESSION['reg']);


?>