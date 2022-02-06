<?php include 'header.php';?>
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header bg-dark text-white">Password Generator</div>
                    <div class="card-body bg-dark text-white">
                        <form action="action.php" method="POST">
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Password Length</label>
                                <label class="col-md-9">
                                    <input type="number" class="form-control" name="password_length"/>
                                </label>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Your Password</label>
                                <label class="col-md-9">
                                    <input type="text" value="<?php echo isset($result) ? $result : ''; ?>" readonly class="form-control"/>
                                </label>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label"></label>
                                <label class="col-md-9">
                                    <input type="submit" class="btn btn-outline-success text-white" name="btn" value="Submit"/>
                                </label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php';?>
