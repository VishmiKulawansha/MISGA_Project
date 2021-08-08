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
                            <form class="form-horizontal" action="index.html">
                                <div class="form-group row mt-3">
                                    <div class="col-md-12">
                                        <input class="form-control" type="text" required="" placeholder="Full Name">
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <div class="col-md-12">
                                        <input class="form-control" type="text" required="" placeholder="Farmer Code">
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <div class="col-md-12">
                                        <input class="form-control" type="text" required="" placeholder="Name of the Farm (if any)">
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <div class="col-md-12">
                                        <input class="form-control" type="text" required="" placeholder="Address of Farm">
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <div class="col-md-12">
                                        <input class="form-control" type="text" required="" placeholder="Area of Farm (in Perches)">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input class="form-control" type="password" required="" placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input class="form-control" type="password" required="" placeholder="Confirm Password">
                                    </div>
                                </div>
                                <div>
                                    <div class="form-group row">
                                        <div class="col-md-12"></div>
                                        <div style="
                                                    font-family: Arial, sans-serif;
                                                     background-color: #ffffff; color: #333;
                                                    border-radius:5px ; 
                                                     margin-inline: 14px;
                                                     min-width:20ch;
                                                      padding: 05px;
                                                      font-size:12px;">Upload your photo</div>
                                        <input id="image" type="file" name="profile_photo" placeholder="Photo" required="" capture>
                                    </div>
                                    <div>
                                        <div class="form-group row">
                                            <div class="col-md-12"></div>
                                            <div style="
                                                    font-family: Arial, sans-serif;
                                                    background-color: #ffffff; color: #333;
                                                    border-radius:5px ; 
                                                    margin-inline: 14px;
                                                    min-width:20ch;
                                                     padding: 05px;
                                                     font-size:12px;">Upload your photo</div>
                                            <input id="image" type="file" name="profile_photo" placeholder="Photo" required="" capture>
                                        </div>
                                        <br />
                                        <div>
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
                                                    <button type="submit" class="btn btn-primary btn-block text-uppercase">Register</button>
                                                </div>
                                                <br> </br>


                                                <div>
                                                    &emsp;&ensp;Already a member? <a href="login.html">Sign in</a></div>


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