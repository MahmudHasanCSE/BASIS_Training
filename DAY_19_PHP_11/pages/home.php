<?php include 'header.php'; ?>
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header bg-dark text-light">Prime Number</div>
                    <div class="card-body bg-dark text-light">
<!--                        <h1>--><?php //session_start(); echo isset($_SESSION['name']) ? $_SESSION['name'] : ''; ?><!--</h1>-->
                        <form action="action.php" method="POST">

                            <div class="form-group row">
                                <label class="col-md-3">Enter Your Number</label>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" name="given_number" placeholder="Enter Your Number"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3">Result</label>
                                <div class="col-md-9">
                                    <input type="text" value="<?php echo isset($result) ? $result : ''; ?>" class="form-control" readonly placeholder=""/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-outline-light" name="btn" value="Submit"/>
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