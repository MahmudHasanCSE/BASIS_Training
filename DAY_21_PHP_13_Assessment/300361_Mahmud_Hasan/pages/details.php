<?php include 'header.php';?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-1">
                <a href="action.php?pages=product"><i class="fa fa-arrow-circle-left text-dark">Back</i></a>
            </div>
            <div class="col-md-6">
                <img src="assets/img/<?php echo $result['image'];?>" alt=""class="card-img-top"/>
            </div>
            <div class="col-md-5 bg-dark text-white py-4">
                <p>Product ID: <?php echo $result['id'];?></p>
                <h1>Product Name: <?php echo $result['name'];?></h1>
                <h4>Product Price: BDT <?php echo $result['price'];?></h4>
                <p>Description: <?php echo $result['description'];?></p>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php';?>
