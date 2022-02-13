<?php
namespace App\classes;
trait CategoryTrait
{
    public $a = 'BASIS';
    public $b = 'BOB';

    public function hello()
    {
        echo $this->a.' '.$this->b;
    }
}