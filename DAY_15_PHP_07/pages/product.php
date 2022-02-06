<?php include ("header.php")?>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <?php foreach ($products as $element) {?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="assets/img/<?php echo $element['image']  ?>" alt="" class="card-img-top" />
                        <div class="card-body">
                            <h2 class="card-title"><?php echo $element['name']?></h2>
                            <h4>Price: <?php echo  $element['price'] ?></h4>
                            <h4>Brand: <?php echo  $element['brand'] ?></h4>
                            <h4>Category: <?php echo  $element['category'] ?></h4>
                            <hr/>
                            <a href="action.php?pages=product_details&id=<?php echo $element['ID']?>" class="btn btn-outline-success">Read more</a>
                        </div>
                    </div>

                </div>
            <?php }?>
        </div>
    </div>

</section>

<?php include ("footer.php")?>


<?php //include 'header.php';?>
<!--<section class="py-5 bg-light">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            --><?php //foreach ($products as $product) { ?>
<!--                <div class="col-md-4 mb-4">-->
<!--                    <div class="card">-->
<!--                        <img src="assets/img/--><?php //echo $product['image']; ?><!--" alt="" class="card-img-top"/>-->
<!--                        <div class="card-body">-->
<!--                            <h5>ID: --><?php //echo $product['ID']; ?><!--</h5>-->
<!--                            <h3 class="card-title">--><?php //echo $product['name']; ?><!--</h3>-->
<!--                            <h4>--><?php //echo $product['price']; ?><!--</h4>-->
<!--                            <h4>--><?php //echo $product['brand']; ?><!--</h4>-->
<!--                            <h4>--><?php //echo $product['category']; ?><!--</h4>-->
<!--                            <hr/>-->
<!--                            <a href="action.php?pages=product_view&id=--><?php //echo $product['ID']; ?><!--" class="btn btn-outline-success" name="product-btn">Read More</a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            --><?php //} ?>
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<?php //include 'footer.php';?>
