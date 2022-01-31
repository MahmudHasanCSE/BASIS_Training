<?php
namespace App\classes;

class Example
{
    public $student = [];

    public function index()
    {
//        $this->student = [10, 20, 'BASIS', 12.21, false, true];
//
//        echo $this->student[3].'<br/>';
//        echo $this->student[5].'<br/>';
//
//        foreach ($this->student as $item)
//        {
//            echo $item.'<br/>';
//        }
//
//        foreach ($this->student as $key => $item)
//        {
//            echo 'Index: '.$key.' value: '.$item.'<br/>';
//        }

        $this->student = [
            0 => [
                'name'   => 'Lee',
                'email'  => 'lee@gmail.com',
                'mobile' => [
                    'mobile1' => '01727345699',
                    'mobile2' => '01727345698',
                ],
            ],
            1 => [
                'name'   => 'Max',
                'email'  => 'max@gmail.com',
                'mobile' => [
                    'mobile1' => '01727345699',
                    'mobile2' => '01727345698',
                ],
            ],
            2 => [
                'name'   => 'Tom',
                'email'  => 'tom@gmail.com',
                'mobile' => [
                    'mobile1' => '01727345699',
                    'mobile2' => '01727345698',
                ],
            ],
            3 => 'BASIS',
            4 => [
                'name'   => 'Bob',
                'email'  => 'bob@gmail.com',
                'mobile' => [
                    'mobile1' => '01727345699',
                    'mobile2' => '01727345698',
                ],
            ],
        ];

//        echo $this->student[2]['name'].'<br/>';
//        echo $this->student[2]['email'].'<br/>';
//        echo $this->student[2]['mobile'].'<br/>';

//        foreach ($this->student as $key => $item)
//        {
//            echo $item['name'].' '.$item['email'].' '.$item['mobile'].' '.'<br/>';
//            if($key == 0){
//            echo $item['name'].' '.$item['email'].' '.$item['mobile'].' '.'<br/>';
//            break;
//            }

//        }

//        echo '<pre>';
//        print_r($this->student);
//        var_dump($this->student);

        foreach ($this->student as $key => $item)
        {
            if(is_array($item))
            {
                foreach ($item as $value){
                    if (is_array($value))
                    {
                        foreach ($value as $v_value)
                        {
                            echo $v_value.' ';
                        }
                    }
                    else
                    {
                        echo $value.' ';
                    }
                }
                echo '<br/>';
            }
            else
            {
                echo $item;
            }
            echo '<br/>';
        }
    }
}