<?php
namespace App\classes;

class User
{
    public function getAllUser()
    {
        return [
            0 => [
                'id'       => 1,
                'name'     => 'tom',
                'email'    => 'tom@email.com',
                'password' => '111222',
            ],
            1 => [
                'id'       => 2,
                'name'     => 'bob',
                'email'    => 'bob@email.com',
                'password' => '111222',
            ],
            2 => [
                'id'       => 3,
                'name'     => 'admin',
                'email'    => 'admin@email.com',
                'password' => '111222',
            ],
        ];
    }
}