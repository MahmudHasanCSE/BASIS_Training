<?php
namespace App\classes;

class Example
{
    // property
    public $name;
    public $email;
    public $mobile;
    public $firstName;
    public $lastName;
    public $x;
    public $y;
    public $z;
    public $data = []; // Array

    // method
    public function index()
    {
//        datatype:
//        echo 'Hello BASIS';
//        $x = 10;
//        $x = "10";
//        $x = 10.132;
//        $x = true;
//        echo gettype($x);

//        variable:
//        $this->firstName = 'Ibn';
//        $this->lastName = 'Fulan';
//        echo "Name: ".$firstName." ".$lastName;

//        operator:
//        * Arithmetic operator
//              * Binary (+, -, *, /, %)
//              * Unary (++, --, (-))
//        * Assignment operator (=, +=, -=, *=, /=, %=, .=)
//        * Conditional operator (>, >=, <, <=, ==, !=, ===,!==)
//        * Logical operator (&&, ||, !)

        $this->x = 10;
        $this->y = 20;
        $this->z = 30;
//        echo $this->x + $this->y;
//        echo '<br/>';
//        echo $this->x - $this->y;
//        echo '<br/>';
//        echo $this->x * $this->y;
//        echo '<br/>';
//        echo $this->x / $this->y;
//        echo '<br/>';
//        echo $this->x % $this->y;

//        echo $this->x++; //10
//        echo '<br/>';
//        echo ++$this->x;  // 12
//        echo '<br/>';
//        echo $this->x--; // 12
//        echo '<br/>';
//        echo --$this->x; // 10
//        echo '<br/>';
//        echo -$this->x; // -10

//        echo $this->x += $this->y; // x==30
//        echo '<br/>';
//        echo $this->x -= $this->y; // x==10
//        echo '<br/>';
//        echo $this->x *= $this->y; // x==200
//        echo '<br/>';
//        echo $this->x /= $this->y; // x==10
//        echo '<br/>';
//        echo $this->x %= $this->y; // x==10
//        echo '<br/>';
//        echo $this->x .= $this->y; // x==1020
//        echo '<br/>';
//        echo gettype($this->x);

//        echo $this->x > $this->y; // blank means false
//        echo $this->x < $this->y; // 1 means true
//        echo $this->x == $this->y; // blank means false
//        echo $this->x === $this->y; // blank means false, === checks strings also

//        $this->x = 10;
//        $this->y = 20;
//        $this->z = 30;
//        echo ($this->x > $this->y) && ($this->y > $this->z); // 0 && 0
//        echo '<br/>....<br/>';
//        echo ($this->x > $this->y) && ($this->y < $this->z); // 0 && 1
//        echo '<br/>....<br/>';
//        echo ($this->x < $this->y) && ($this->y > $this->z); // 1 && 0
//        echo '<br/>....<br/>';
//        echo ($this->x < $this->y) && ($this->y < $this->z); // 1 && 1
//        echo '<br/>....<br/>';
//
//        echo ($this->x > $this->y) || ($this->y > $this->z); // 0 && 0
//        echo '<br/>....<br/>';
//        echo ($this->x > $this->y) || ($this->y < $this->z); // 0 && 1
//        echo '<br/>....<br/>';
//        echo ($this->x < $this->y) || ($this->y > $this->z); // 1 && 0
//        echo '<br/>....<br/>';
//        echo ($this->x < $this->y) || ($this->y < $this->z); // 1 && 1
//        echo '<br/>....<br/>';

//        ====== Statement =======
//        * single line statement
//        * conditional statement: IF, IF ELSE, IF ELSE IF, SWITCH
//        * repeated statement: FOR, WHILE, DO WHILE, FOREACH

//        $this->x = 10;
//        if($this->x > 20) {
//            echo $this->x; //blank
//        }else {
//            echo 'Hello BASIS';
//        }

//        $this->x = 100;
//        if($this->x > 200) {
//            echo 'Hello World';
//        }
//        elseif($this->x < 20)
//        {
//            echo $this->x;
//        }
//        else {
//            echo 'Hello BASIS';
//        }

//        $this->x = 100;
//        switch ($this->x)
//        {
//            case 10:
//                echo 'Hello World';
//                break;
//            case 20:
//                echo 'Hello BASIS';
//                break;
//            case 30:
//                echo 'Hello Bangladesh';
//                break;
//            default:
//                echo 'Hello Dhaka';
//        }


//        for($this->y = 10; $this->y <= 15; $this->y++)
//        {
//            echo 'Hello World<br/>';
//        }
//
//        for($this->y = 99; $this->y >= 76; $this->y--)
//        {
//            echo $this->y.' ';
//        }
//
//        $this->x = 100;
//        while ($this->x < 110)
//        {
//            echo 'Hello World<br/>';
//            $this->x++;
//        }
//
//        $this->x = 100;
//        do {
//            echo 'Hello World<br/>';
//            $this->x++;
//        } while($this->x > 110);

//        Array: a special variable who can hold multiple data, loosely coupled type
        $this->data = [10, 20, 30, 'BASIS', 100.201, true];
//        echo $this->data;
//        echo $this->data[9];
        foreach ($this->data as $item)
        {
            echo $item.' ';
        }
    }
}