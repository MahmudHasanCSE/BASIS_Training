<?php
namespace App\classes;

class Pattern
{
    protected $length;
    protected $i;
    protected $j;

    public function __construct($post=null)
    {
        $this->length = $post['input_length'];
    }

    public function index()
    {
        echo 'hello world';
    }
}