<?php
namespace App\classes;

class Product
{
    protected $file;
    protected $directory;
    protected $products;
    protected $product;
    protected $name;
    protected $price;
    protected $description;
    protected $imageName;
    protected $tempPath;


    public function __construct($post=null, $file=null)
    {
//        echo '<pre>';
//        print_r($post);
//        print_r($file);

//        echo $file['image']['name'].'<br/>';
//        echo $file['image']['type'].'<br/>';
//        echo $file['image']['tmp_name'].'<br/>';

        $this->file      = $file;
        $this->imageName = $file['image']['name'];
        $this->imageName = $file['image']['tmp_name'];
        $this->directory = 'assets/img/product-image/'.$this->imageName;
    }

    public function index()
    {
        header('Location: action.php?pages=add-product');
    }

    public function newProduct()
    {
        move_uploaded_file($this->tempPath, $this->directory);
    }
}