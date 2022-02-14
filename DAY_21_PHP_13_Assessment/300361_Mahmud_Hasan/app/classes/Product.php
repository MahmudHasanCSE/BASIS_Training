<?php
namespace App\classes;

class Product
{
    protected $products = [];
    protected $search_product;
    protected $result = [];
    protected $search_id;

    public function __construct($post = null)
    {
        if (isset($post['search_btn'])) {
            $this->search_id = $post['search'];
        }
    }

    public function getAllProduct(){

        return [
            0 => [
                'id'            => '1',
                'name'          => 'T-Shirt',
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam architecto at cumque dicta, doloribus est incidunt, maiores neque nesciunt optio praesentium quidem quo sapiente tempore vero? Assumenda dolores doloribus id!',
                'price'         => '1500',
                'image'         => 'a1.jpg',
            ],
            1 => [
                'id'            => '2',
                'name'          => 'Mobile',
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam architecto at cumque dicta, doloribus est incidunt, maiores neque nesciunt optio praesentium quidem quo sapiente tempore vero? Assumenda dolores doloribus id!',
                'price'         => '1500',
                'image'         => 'a2.jpg',
            ],
            2 => [
                'id'            => '3',
                'name'          => 'Watch',
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam architecto at cumque dicta, doloribus est incidunt, maiores neque nesciunt optio praesentium quidem quo sapiente tempore vero? Assumenda dolores doloribus id!',
                'price'         => '1500',
                'image'         => 'a3.jpg',
            ],
            3 => [
                'id'            => '4',
                'name'          => 'Laptop',
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam architecto at cumque dicta, doloribus est incidunt, maiores neque nesciunt optio praesentium quidem quo sapiente tempore vero? Assumenda dolores doloribus id!',
                'price'         => '1500',
                'image'         => 'a3.jpg',
            ],
            4 => [
                'id'            => '5',
                'name'          => 'Shirt',
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam architecto at cumque dicta, doloribus est incidunt, maiores neque nesciunt optio praesentium quidem quo sapiente tempore vero? Assumenda dolores doloribus id!',
                'price'         => '1500',
                'image'         => 'a2.jpg',
            ],
            5 => [
                'id'            => '6',
                'name'          => 'Shoe',
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam architecto at cumque dicta, doloribus est incidunt, maiores neque nesciunt optio praesentium quidem quo sapiente tempore vero? Assumenda dolores doloribus id!',
                'price'         => '1500',
                'image'         => 'a1.jpg',
            ],
        ];
    }
    public function getProductById($id){

        $this->products = $this->getAllProduct();
        foreach ($this->products as $product){

            if ($product['id'] == $id){
                return $product;
            }
        }
    }

    public function searchProduct(){

        $this->search_product = $this->getAllProduct();
        foreach ($this->search_product as $prod){
            if ($this->search_id == $prod['id']){
                $this->result = $prod;
                break;
            }
        }
        return $this->result;
    }
}