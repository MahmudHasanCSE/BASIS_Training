<?php
namespace App\classes;

class Student
{
    public function getAllStudent()
    {
        return[
            0 => [
                'name' => 'Max',
                'mobile' => '0987654321',
                'email' => 'max@email.com',
                'address' => 'Dek',
            ],
            1 => [
                'name' => 'Bob',
                'mobile' => '0987654321',
                'email' => 'bob@email.com',
                'address' => 'Dek',
            ],
            2 => [
                'name' => 'Ben',
                'mobile' => '0987654321',
                'email' => 'ben@email.com',
                'address' => 'Dek',
            ],
            3 => [
                'name' => 'Doe',
                'mobile' => '0987654321',
                'email' => 'doe@email.com',
                'address' => 'Dek',
            ],
            4 => [
                'name' => 'Ken',
                'mobile' => '0987654321',
                'email' => 'ken@email.com',
                'address' => 'Dek',
            ],
            5 => [
                'name' => 'Kai',
                'mobile' => '0987654321',
                'email' => 'kai@email.com',
                'address' => 'Dek',
            ],
        ];
    }
}