<?php
namespace App\classes;
use App\classes\User;
class Calculator extends User
{
    public $firstNumber;
    protected $secondNumber;
    private $operator;
    public $result;

    public function __construct($data) // magic method
    {
//        echo is_array($data) ? 'data is array' : 'data is single variable';
        $this->firstNumber  = $data['first_number'];
        $this->secondNumber = $data['second_number'];
        $this->operator     = $data['operator'];
    }

    public function index()
    {
//        echo 'Hello World';
//        echo $this->firstNumber.'<br/>';
//        echo $this->secondNumber.'<br/>';
//        echo $this->one().'<br/>';
//        echo $this->two().'<br/>';

//        $this->user = new User();  // it works without extending but only public can be accessed
//        echo $this->user->city.'<br/>';
//        echo $this->user->login().'<br/>';
//        $this->user->login(); //

//        echo $this->add().'<br/>';
//        echo $this->sub().'<br/>';
//        echo $this->multiplication().'<br/>';
//        echo $this->division().'<br/>';

        switch ($this->operator)
        {
            case '+':
                $this->result = $this->add();
                break;
            case '-':
                $this->result = $this->sub();
                break;
            case '*':
                $this->result = $this->multiplication();
                break;
            case '/':
                $this->result = $this->division();
                break;
            case '%':
                $this->result = $this->mod();
                break;
        }
        return $this->result;
    }

    protected function add()
    {
        return $this->firstNumber + $this->secondNumber;
    }

    protected function sub()
    {
        return $this->firstNumber - $this->secondNumber;
    }

    protected function multiplication()
    {
        return $this->firstNumber * $this->secondNumber;
    }

    protected function division()
    {
        return $this->firstNumber / $this->secondNumber;
    }

    protected function mod()
    {
        return $this->firstNumber % $this->secondNumber;
    }
}