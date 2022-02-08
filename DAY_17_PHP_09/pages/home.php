<?php include 'header.php'; ?>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-5 mx-auto">
                    <div class="card">
                        <div class="card-header bg-dark text-white">
                            <h4>Please input the fields carefully.</h4>
                        </div>
                        <div class="card-body bg-dark text-white">
                            <?php if (isset($message)) { ?>
                                <h2 class="text-center font-weight-bold text-success"><?php echo $message; ?></h2>
                            <?php } ?>
                            <form action="action.php" method="POST" enctype="multipart/form-data">

                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Blog Title</label>
                                    <div class="col-md-8">
                                        <input type="text" name="title" class="form-control" placeholder="Title"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Author Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="author_name" class="form-control" placeholder="Author Name"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Description</label>
                                    <div class="col-md-8">
                                        <textarea name="description" class="form-control" rows ="5" placeholder="Type here..."></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Blog Image</label>
                                    <div class="col-md-8">
                                        <input type="file" class="form-control-file" name="image"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label"></label>
                                    <div class="col-md-8">
                                        <input type="submit" class="btn btn-outline-light btn-block" name="btn" value="Save"/>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>