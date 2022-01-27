<?php
namespace App\classes;

class HelloWorld           //class
{
    public $name = 'BASIS';  // property

    public function index()    // method
    {
        echo "Hello ".$this->name;   // this keyword, own class predefined object
        // 3 major rules for variable
        // 1. start with $
        // 2. a-z, A-Z, 0-9, _
        // 3. no number at first

        // 3 standard rules for variable -> small letter, readable, meaningful
    }
}