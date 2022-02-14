<?php include 'header.php'?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto mt-5">
                <div class="card text-white">
                    <table class="table table-bordered table-hover">
                        <thead class="bg-dark text-white">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Image</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($products as $product){?>
                            <tr>
                                <td><?php echo $product['id'] ;?></td>
                                <td><?php echo $product['name'] ;?></td>
                                <td><h6><?php echo $product['description'] ;?></h6></td>
                                <td><?php echo $product['price'].'Tk.' ;?></td>
                                <td><img src="assets/img/<?php echo $product['image'] ;?>" alt="" class="w-100"></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php';?>
