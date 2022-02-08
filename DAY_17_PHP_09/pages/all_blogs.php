<?php include 'header.php'; ?>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <div class="">
                        <h1 class="text-center text-warning font-weight-bold">All Blogs</h1>
                    </div>
                    <div class="row">

                        <?php foreach ($allBlogs as $blog) { ?>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="<?php echo $blog['image'] ?>" alt="image" class="card-img-top"/>
                                <div class="card-body">
                                    <h4 class="card-title">Blog Title :<?php echo $blog['title'] ?></h4>
                                    <span class="text-muted">Author Name: <?php echo $blog['author'] ?></span>
                                    <p class="text-justify">Blog Description :<?php echo $blog['description'] ?></p>
                                </div>
                            </div>
                        </div>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>