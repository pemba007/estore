<?php
    session_start();
?>
<!DOCTYPE html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width,initial-scale,1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

</head>
<header>
    <nav class="navbar navbar-change navbar-fixed-top" id="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-left" style="display: block;">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="aboutus.php">About Us</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="faqs.php">FAQS</a></li>
                    <li><a href="contactus.php">Contact Us</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right" style="display: block;">
                    <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                </ul>

            </div>

        </div>
    </nav>

</header>

<body>

<body>
    <div class="container fluid">
        <div class="card">
            <div class="card-header bg-dark">
                <h1 class="text-center text-white"> Order Details</h1>
            </div>
        </div>
        <table align="center" border="1px" width="100%">
            <tr>
                <th width="40%">Item Name</th>
                <th width="10%">Quantity</th>
                <th width="20%">Price</th>
                <th width="15%">Total</th>
                <th width="5%">Action</th>
            </tr>
            <?php
                    if(!empty($_SESSION["shopping_cart"]))
                    {
                        $total = 0;
                        foreach($_SESSION["shopping_cart"] as $keys => $values)
                        {
                    ?>
            <tr>
                <td>
                    <?php echo $values["item_name"]; ?>
                </td>
                <td>
                    <?php echo $values["item_quantity"]; ?>
                </td>
                <td>Rs
                    <?php echo $values["item_price"]; ?>
                </td>
                <td>Rs
                    <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?>
                </td>
                <td><a href="index.php?action=delete&id=<?php echo $values[" item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
            </tr>
            <?php
                            $total = $total + ($values["item_quantity"] * $values["item_price"]);
                        }
                    ?>
            <tr>
                <td colspan="3" align="right">Total</td>
                <td align="right">Rs.
                    <?php echo number_format($total, 2); ?>
                </td>
                <td></td>
            </tr>
            <?php
                    }
                    ?>

        </table>
    </div>
    </div>
    </div>
    <br />
</body>

</html>