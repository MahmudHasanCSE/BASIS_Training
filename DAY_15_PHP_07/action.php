<?php
require_once 'vendor/autoload.php';
use App\classes\Home;
use App\classes\PasswordGenerator;
use App\classes\Blog;
use App\classes\Product;
use App\classes\ProductDetails;

if (isset($_GET['pages']))
{
    if ($_GET['pages'] == 'home')
    {
        include 'pages/home.php';
    }
    elseif ($_GET['pages'] == 'password-generator')
    {
        include 'pages/password-generator.php';
    }
    elseif ($_GET['pages'] == 'blog')
    {
        $blog  = new Blog();
        $blogs = $blog->getAllBlog();
        include 'pages/blog.php';
    }
    elseif ($_GET['pages'] == 'products')
    {
        $product  = new Product();
        $products = $product->getAllProduct();
        include 'pages/product.php';
    }
    elseif ($_GET['pages']=='product_details'){
        $productDetail = new ProductDetails();
        $productDetails = $productDetail->getProductDetails($_GET['id']);
        include 'pages/product_details.php';
    }
}
elseif (isset($_POST['btn']))
{
    $passwordGenerator = new PasswordGenerator($_POST);
    $result = $passwordGenerator ->newPassword();
    include 'pages/password-generator.php';
}
else {
    $home = new Home();
    $home ->index();
}