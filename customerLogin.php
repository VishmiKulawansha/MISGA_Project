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
                        Login Page
                    </h1>
                    <p class="lead">
                        Save time and leave the groceries to us.
                    </p>

                    <div class="card card-login mb-5">
                        <div class="card-body">
                            <form class="form-horizontal" action="shop.php" method="POST">
                                <div class="form-group row mt-3">
                                    <div class="col-md-12">
                                        <input class="form-control" type="text" required="" placeholder="Email"  name="email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input class="form-control" type="password" required="" placeholder="Password" name="password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12 d-flex justify-content-between align-items-center">
                                        <div class="checkbox">
                                            <input id="checkbox0" type="checkbox" name="remember">
                                            <label for="checkbox0" class="mb-0"> Remember Me? </label>
                                        </div>
                                        <a href="login.php" class="text-light"><i class="fa fa-bell"></i> Forgot password?</a>
                                    </div>
                                </div>
                                <div class="form-group row text-center mt-4">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-block text-uppercase">Log In</button>
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
        
<?php

// Starting the Session
session_start();

// Clear all the previously saved sessions
// remove all session variables
session_unset();

// destroy the session
session_destroy();

try {
    include_once 'dbcon.php';

    if (!$conn) {
        die("Connection Failed" . mysqli_connect_error());
    }
}

// Check if this form was submitted
if (isset($_POST['Register'])) {

    // Get the Posted Informations and assigned them to the local variables
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    //error handlers
    //check if inputs are empty
    if (empty($email) || empty($password)) {
        header("Location:../shop.php?Login-empty");
        exit();
         } else {
            // Set the query String
            $sql = "SELECT * FROM $customer WHERE 'email' = '$email' LIMIT 1";
    }

    // Reading the Specific Record
    $query = $conn->query($sql);

    // Check if record exist
    if ($query->num_rows > 0) {

        // Loop through the retrieve records
        while($record = $query->fetch_assoc()) {

            // Validate password
            if ($password == $record["email"]) {

                // Save the User Profile for later use
                $_SESSION['fullName'] = $record["fullName"];
                $_SESSION['address'] = $record["address"];
                $_SESSION['teleNumber'] = $record["teleNumber"];  
                $_SESSION['email'] = $record["email"];
                $_SESSION['password'] = $record["password"];

            } else {
                echo "Invalid password";
            }
        }
    }
     else {
          echo 'Record found for the selected!';
    }    
}

?>

</body>

</html>