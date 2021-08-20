<?php

session_start();
include 'includes/dbcon.php';
if (isset($_POST["add"])) {
    if (isset($_SESSION["cart"])) {
        $item_array_id = array_column($_SESSION["cart"], "product_id");
        if (!in_array($_GET["id"], $item_array_id)) {
            $count = count($_SESSION["cart"]);
            $item_array = array(
                'product_id' => $_GET["id"],
                'item_name' => $_POST["hidden_name"],
                'product_price' => $_POST["hidden_price"],
                'item_quantity' => $_POST["quantity"],
            );
            $_SESSION["cart"][$count] = $item_array;
            echo '<script>window.location="shop.php"</script>';
        } else {
            echo '<script>alert("Product is already Added to Cart")</script>';
            echo '<script>window.location="shop.php"</script>';
        }
    } else {
        $item_array = array(
            'product_id' => $_GET["id"],
            'item_name' => $_POST["hidden_name"],
            'product_price' => $_POST["hidden_price"],
            'item_quantity' => $_POST["quantity"],
        );
        $_SESSION["cart"][0] = $item_array;
    }
}

if (isset($_GET["action"])) {
    if ($_GET["action"] == "delete") {
        foreach ($_SESSION["cart"] as $keys => $value) {
            if ($value["product_id"] == $_GET["id"]) {
                unset($_SESSION["cart"][$keys]);
                echo '<script>alert("Product has been Removed...!")</script>';
                echo '<script>window.location="shop.php"</script>';
            }
        }
    }
}
?>


<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<body>

    <style>
        .product {
            border: 1px solid #eaeaec;
            margin: -1px 19px 3px -1px;
            padding: 10px;
            text-align: center;
            background-color: #efefef;
        }

        table,
        th,
        tr {
            text-align: center;
        }

        .title2 {
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }

        h2 {
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }

        table th {
            background-color: #efefef;
        }

        .btn-grad {
            background-image: linear-gradient(to right, #77A1D3 0%, #79CBCA 51%, #77A1D3 100%)
        }

        .btn-grad {
            margin: 10px;
            padding: 15px 45px;
            text-align: center;
            text-transform: uppercase;
            transition: 0.5s;
            background-size: 200% auto;
            color: white;
            box-shadow: 0 0 20px #eee;
            border-radius: 10px;
            display: block;
        }

        .btn-grad:hover {
            background-position: right center;
            /* change the direction of the change here */
            color: #fff;
            text-decoration: none;
        }
    </style>
    <?php
    include 'includes/head.php';
    // include 'navbar.php';
    ?>
    <div>
        <!-- header start -->
        <div class="page-content page-bg header" style="background-color: #d2d9da;">
            <div class="header-bg jumbotron-bg jumbotron page-bg" style="background-image: url('assets/img/Page-bg-bt.png'); height: auto;">
                <div class="text-head">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5"></div>
                            <div class="w3-container w3-center w3-animate-zoom">
                                <div class="col-md-2">
                                    <a href="shop.php" role="button">
                                        <i style="color: #009ce4 ;" class="glyphicon glyphicon-chevron-left"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-5"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="clear: both"></div>

    <h3 class="title2">Shopping Cart Details</h3>
    <div class="table-responsive">
        <table class="table table-bordered">
            <tr>
                <th width="30%">Product Name</th>
                <th width="10%">Quantity</th>
                <th width="13%">Price Details</th>
                <th width="10%">Total Price</th>
                <th width="17%">Remove Item</th>
            </tr>

            <?php
            if (!empty($_SESSION["cart"])) {
                $total = 0;
                foreach ($_SESSION["cart"] as $key => $value) {
            ?>
                    <tr>
                        <td><?php echo $value["item_name"]; ?></td>
                        <td><?php echo $value["item_quantity"]; ?></td>
                        <td>LKR <?php echo $value["product_price"]; ?></td>
                        <td>
                            LKR<?php echo number_format($value["item_quantity"] * $value["product_price"], 2); ?></td>
                        <td><a href="shop.php?action=delete&id=<?php echo $value["product_id"]; ?>"><span class="text-danger">Remove Item</span></a></td>

                    </tr>
                <?php
                    $total = $total + ($value["item_quantity"] * $value["product_price"]);
                }
                ?>
                <tr>
                    <td colspan="3" align="right">Total</td>
                    <th align="right">LKR<?php echo number_format($total, 2); ?></th>
                    <td></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>

</body>

</html>