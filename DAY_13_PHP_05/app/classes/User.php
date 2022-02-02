<?php


namespace App\classes;


class User
{
    protected $user = [];

    public function getAllUser()
    {
        $this->user =[
            0 => [
                'name'     => 'Max',
                'mobile'   => '0987654321',
                'location' => 'Dhaka',
            ],
            1 => [
                'name'     => 'Bob',
                'mobile'   => '0987654321',
                'location' => 'Dhaka',
            ],
        ];
        return $this->user;
    }
}