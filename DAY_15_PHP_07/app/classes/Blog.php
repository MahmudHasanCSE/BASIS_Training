<?php
namespace App\classes;

class Blog
{
    protected $blogs;

    public function getAllBlog()
    {
        return [
            0 => [
                'title'       => 'A new Blog',
                'description' => 'Blog Description',
                'author'      => 'Max',
                'image'       => 'a1.jpg',
            ],
            1 => [
                'title'       => 'A new Blog',
                'description' => 'Blog Description',
                'author'      => 'Tom',
                'image'       => 'a2.jpg',
            ],
            2 => [
                'title'       => 'A new Blog',
                'description' => 'Blog Description',
                'author'      => 'Bob',
                'image'       => 'a3.jpg',
            ],
        ];
    }
}