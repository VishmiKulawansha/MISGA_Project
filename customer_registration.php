<!DOCTYPE html>
<html>

<head>
    <!--=============== Header ===============-->
    <?php
    include 'includes/header.php';
    ?>
</head>

<body>
    <div class="page-header">
        <!--=============== Navbar ===============-->
        <?php
        include 'includes/navbar.php';
        ?>
    </div>
    <div id="page-content" class="page-content">
        <div class="banner">
            <div class="jumbotron jumbotron-bg text-center rounded-0" style="background-image: url('assets/img/bg-header.jpg');">
                <div class="container">
                    <h1 class="pt-5">
                        Register Page
                    </h1>
                    <p class="lead">
                        Save time and leave the groceries to us.
                    </p>

                    <div class="card card-login mb-5">
                        <div class="card-body">
                            <form class="form-horizontal" name="customer_registration" action="includes/customer.php" method="POST">
                                <div class="form-group row mt-3">
                                    <div class="col-md-12">
                                        <input class="form-control" type="text" required="" placeholder="Full Name" name="fullName">
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <div class="col-md-12">
                                        <input class="form-control" type="text" required="" placeholder="Address of delivery" name="address">
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <div class="col-md-12">
                                        <input class="form-control" type="phone" required="" placeholder="Whatsapp Number" name="teleNumber">
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <div class="col-md-12">
                                        <input class="form-control" type="email" required="" placeholder="Email" name="email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input class="form-control" type="password" required="" placeholder="Password" name="password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input class="form-control" type="password" required="" placeholder="Confirm Password" name="password">
                                    </div>
                                </div>
                                <div>
                                    <div class="col-md-12"></div>
                                    <input id="image" type="file" name="profilePhoto" placeholder="Photo" capture>
                                </div>
                                <div>
                                    <br />
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <div class="checkbox">
                                                <input id="checkbox0" type="checkbox" name="terms">
                                                <label for="checkbox0" class="mb-0">I Agree with <a href="terms.html" class="text-light">Terms & Conditions</a> </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row text-center mt-4">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary btn-block text-uppercase" name="Register">Register</button>
                                        </div>
                                    </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=============== footer ===============-->
    <?php
    include 'includes/footer.php';
    ?>
</body>

</html>