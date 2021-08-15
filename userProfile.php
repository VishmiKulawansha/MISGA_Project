<?php
session_start();
include 'includes/dbcon.php';

include 'includes/head.php';
include 'navbar.php';
include 'includes/header.php';
include 'includes/JS.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Profile - User</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Bootstrap-4-Custom-Radio.css">
    <link rel="stylesheet" href="assets/css/Checkbox-Button-1.css">
    <link rel="stylesheet" href="assets/css/Checkbox-Button.css">
    <link rel="stylesheet" href="assets/css/Map-locations-2-1.css">
    <link rel="stylesheet" href="assets/css/Map-locations-2.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Toggle-Switch.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
</head>

<body id="page-top">
    <div id="wrapper">

        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <form class="form-inline d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group"></div>
                        </form>
                        <ul class="nav navbar-nav flex-nowrap ml-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-right p-3 animated--grow-in" role="menu" aria-labelledby="searchDropdown">
                                    <form class="form-inline mr-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1" role="presentation"></li>
                            <li class="nav-item dropdown no-arrow mx-1" role="presentation">
                                <div class="shadow dropdown-list dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown"></div>
                            </li>
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow" role="presentation">
                                <div class="nav-item dropdown show no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">
                                        <!-- <span class="d-none d-lg-inline mr-2 text-gray-600 small">Valerie Luna</span> -->

                                        <img class="border rounded-circle img-profile" src="assets/img/avatars/avatar1.jpeg">
                                    </a>
                                    <div class="dropdown-menu show shadow dropdown-menu-right animated--grow-in" role="menu"><a class="dropdown-item" role="presentation" href="profile.html"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" role="presentation" href="#"><i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Settings</a>
                                        <div class="dropdown-divider"></div>
                                        <!-- <a class="dropdown-item" role="presentation" href="login.html"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a></div> -->
                                        <form action="includes/logout.inc.php" method="POST">
                                            <a class="dropdown-item" role="presentation">
                                                <button type="submit" class="dropdown-item" name="submit">
                                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-black-400"></i>&nbsp;Logout</button>
                                            </a>
                                    </div>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Profile</h3>
                    <div class="row mb-3">
                        <div class="col-lg-4">
                            <div class="card mb-3">
                                <div class="card-body text-center shadow"><img class="rounded-circle mb-3 mt-4" src="assets/img/dogs/image2.jpeg" width="160" height="160">
                                    <div class="mb-3"><button class="btn btn-primary btn-sm" type="button">Change Photo</button>
                                        <!-- Start: Rounded Button Danger --><a class="btn btn-danger btn-sm btn-circle ml-1" role="button"><i class="fas fa-trash text-white"></i></a>
                                        <!-- End: Rounded Button Danger -->
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-8">
                            <div class="row mb-3 d-none">
                                <div class="col">
                                    <div class="card text-white bg-primary shadow">
                                        <div class="card-body">
                                            <div class="row mb-2">
                                                <div class="col">
                                                    <p class="m-0">Peformance</p>
                                                    <p class="m-0"><strong>65.2%</strong></p>
                                                </div>
                                                <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                            </div>
                                            <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card text-white bg-success shadow">
                                        <div class="card-body">
                                            <div class="row mb-2">
                                                <div class="col">
                                                    <p class="m-0">Peformance</p>
                                                    <p class="m-0"><strong>65.2%</strong></p>
                                                </div>
                                                <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                            </div>
                                            <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php
                            include 'includes/scripts.php';
                            ?>


                            <div class="row">
                                <div class="col">
                                    <div class="card shadow mb-3">
                                        <div class="card-header py-3">
                                            <p class="text-primary m-0 font-weight-bold">User Details</p>
                                        </div>
                                        <div class="card-body">
                                            <form id="formUserDetails" class="formUserDetails" method="post" action="includes/profile.php">
                                                <div class="form-row">
                                                    <div class="col">
                                                        <div class="form-group"><label for="fullName"><strong>Full Name</strong></label><input class="form-control" type="text" placeholder="Full Name" name="fullName" required></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group"><label for="address"><strong>Address</strong></label><input class="form-control" type="address" placeholder="Address" name="address" required></div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col">
                                                        <div class="form-group"><label for="teleNumber"><strong>Whatsapp Number</strong></label><input class="form-control" type="text" placeholder="Whatsapp Number" name="teleNumber" required></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group"><label for="email"><strong>Email </strong></label><input class="form-control" type="text" placeholder="user@gmail.com" name="email" required></div>
                                                    </div>
                                                </div>
                                                <div class="form-group"><button class="btn btn-primary btn-sm" type="submit" id="updateCustomer" name="updateCustomer">Save Changes</button></div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="card shadow">
                                        <div class="card-header py-3">
                                            <p class="text-primary m-0 font-weight-bold">Change Password</p>
                                        </div>
                                        <div class="card-body">
                                            <form id="formPassword" class="was-validated" method="post" action="includes/profile.php" oninput='confirmPass.setCustomValidity(confirmPass.value != newPass.value ? "Passwords do not match." : "")'>
                                                <div class="form-group"><label for="address"><strong>New Password</strong></label><input class="form-control" type="password" id="newPass" name="newPass" required></div>
                                                <div class="form-group"><label for="address"><strong>Confirm Password</strong></label><input class="form-control" type="password" id="confirmPass" name="confirmPass" required></div>
                                                <div class="form-group"><button class="btn btn-primary btn-sm" type="submit" name="submitPassword">Save&nbsp;Changes</button></div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="form-group"><button class="btn btn-primary btn-sm" type="submit" name="submitInsurance">Save&nbsp;Changes</button></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <?php
    include_once 'includes/footer.php';
    ?>
    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/Map-locations-2.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>