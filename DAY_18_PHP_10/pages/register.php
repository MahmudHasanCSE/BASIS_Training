<?php include 'header.php'; ?>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header bg-dark text-light">Registration Form</div>
                        <div class="card-body bg-dark text-light">
                            <form action="action.php" method="POST">

                                <div class="form-group row">
                                    <label class="col-md-3">Full Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="full_name" required placeholder="Full Name"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3">Email Address</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email" required placeholder="Email Address"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3">Phone Number</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="mobile" required placeholder="Phone Number"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3">Subject</label>
                                    <div class="col-md-9">
                                        <label><input type="checkbox" name="subject[]" value="Bengali"/> Bengali </label>
                                        <label><input type="checkbox" name="subject[]" value="English"/> English </label>
                                        <label><input type="checkbox" name="subject[]" value="Math"/> Math </label>
                                        <label><input type="checkbox" name="subject[]" value="Physics"/> Physics </label>
                                        <label><input type="checkbox" name="subject[]" value="Chemistry"/> Chemistry </label>
                                        <label><input type="checkbox" name="subject[]" value="Biology"/> Biology </label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-light" name="register_btn" value="Submit"/>
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