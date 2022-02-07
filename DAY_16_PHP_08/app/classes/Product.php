<?php
namespace App\classes;

class Product
{
    protected $products = [];

    public function getAllProduct()
    {
        return [
            0 => [
                'id'          => 1,
              'name'          => 'T-Shirt',
              'category'      => 'Man Fashion',
                'brand'       => 'Yellow',
                'price'       => '3500',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusamus blanditiis, consectetur consequatur cumque dolor doloribus error expedita id laudantium modi molestias odio odit placeat quibusdam similique velit! Alias, soluta.',
                'image'       => 'a1.jpg',
            ],
            1 => [
                'id'          => 2,
                'name'        => 'Smart Watch',
                'category'    => 'Electronics',
                'brand'       => 'Samsung',
                'price'       => '12000',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusamus blanditiis, consectetur consequatur cumque dolor doloribus error expedita id laudantium modi molestias odio odit placeat quibusdam similique velit! Alias, soluta.',
                'image'       => 'a2.jpg',
            ],
            2 => [
                'id'          => 3,
                'name'        => 'Smart Phone',
                'category'    => 'Device',
                'brand'       => 'Apple',
                'price'       => '15000',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusamus blanditiis, consectetur consequatur cumque dolor doloribus error expedita id laudantium modi molestias odio odit placeat quibusdam similique velit! Alias, soluta.',
                'image'       => 'a3.jpg',
            ],
            3 => [
                'id'          => 4,
                'name'        => 'Laptop',
                'category'    => 'Device',
                'brand'       => 'Apple',
                'price'       => '150000',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusamus blanditiis, consectetur consequatur cumque dolor doloribus error expedita id laudantium modi molestias odio odit placeat quibusdam similique velit! Alias, soluta.',
                'image'       => 'a3.jpg',
            ],
            4 => [
                'id'          => 5,
                'name'        => 'Laptop',
                'category'    => 'Device',
                'brand'       => 'HP',
                'price'       => '150000',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusamus blanditiis, consectetur consequatur cumque dolor doloribus error expedita id laudantium modi molestias odio odit placeat quibusdam similique velit! Alias, soluta.',
                'image'       => 'a2.jpg',
            ],
            5 => [
                'id'          => 6,
                'name'        => 'Laptop',
                'category'    => 'Device',
                'brand'       => 'Dell',
                'price'       => '150000',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusamus blanditiis, consectetur consequatur cumque dolor doloribus error expedita id laudantium modi molestias odio odit placeat quibusdam similique velit! Alias, soluta.',
                'image'       => 'a1.jpg',
            ],
        ];
    }
    public function getProductById($id)
    {
        $this->products = $this->getAllProduct();
        foreach ($this->products as $product)
        {
            if ($product['id'] == $id)
            {
                return $product;
            }
        }
    }
}