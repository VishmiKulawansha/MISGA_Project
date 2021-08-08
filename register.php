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
                            <div class="row">
                                <div class="column">
                                    <a href='customer_registration.php' target="blank">
                                        <button>
                                            Customer Registration
                                        </button>
                                    </a>
                                </div>
                                <div class="column">
                                    <a href='farmer_registration.php' target="blank">
                                        <button>
                                            Farmer Registration
                                        </button>
                                    </a>
                                </div>
                            </div>
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