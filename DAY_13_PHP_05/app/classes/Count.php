<?php
namespace App\classes;

class Count
{
    public $startingNumber;
    public $endingNumber;
    public $myList = [];
    public $result;
    public $count;

    public function __construct($data)
    {
        $this->startingNumber = min((int)$data['starting_number'],(int)$data['ending_number']);
        $this->endingNumber = max((int)$data['starting_number'],(int)$data['ending_number']);
//        $this->result = $data['result'];
    }

    public function index()
    {
        for($this->count = $this->startingNumber; $this->count <= $this->endingNumber; $this->count++)
        {
            $this->myList[] = $this->count;
//            print_r($this->result);
        }
        $this->result = implode(" ",$this->myList);
        return $this->result;
    }
}