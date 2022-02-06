<?php
namespace App\classes;
require_once 'vendor/autoload.php';
use App\classes\Product;


class ProductDetails extends Product
{
    public function getProductDetails($key=''){
        return array_filter($this->data,function($element) use($key){
            if($element['ID'] === $key){
                return $element;
            }
        });
    }
}