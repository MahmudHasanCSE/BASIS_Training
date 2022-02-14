<?php
namespace App\classes;

class Register
{


    public function getAllUser(){

        return [
            0 => [
                'id'       => 1,
                'name'     => 'tom',
                'email'    => 'tom@email.com',
                'password' => '111222',
                'image'    => 's3.jpg',
            ],
            1 => [
                'id'       => 2,
                'name'     => 'bob',
                'email'    => 'bob@email.com',
                'password' => '111222',
                'image'    => 's3.jpg',
            ],
            2 => [
                'id'       => 3,
                'name'     => 'mahmud',
                'email'    => 'mahmud@email.com',
                'password' => '111222',
                'image'    => 's3.jpg',
            ],
        ];
    }
}