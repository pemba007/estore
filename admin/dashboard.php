<?php 
session_start(); 
if(!isset($_SESSION['email'])){
  echo "<script>window.open('login.php?not_admin=You are not an Admin!','_self')</script>";
}
else {
?>
<html>
<head>
<title>Admin Panel</title>
<meta name="viewport" content="width=device-width,initial-scale,1.0">
        <link rel="stylesheet" type="text/css" href="../css/style.css"/>
        <link rel="stylesheet" type="text/css" href="../css/style1.css"/>
         <link rel="stylesheet" type="text/css" href="../css/dash.css"/>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"/>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css"/>
        <link rel="stylesheet" type="text/css" href="css/animate.css"/>
        <link rel="stylesheet" type="text/css" href="css/animate.min.css"/>   
        <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body class="dashboard-body">
 <nav class="navbar  dashboard-nav navbar-fixed-top">
            <div class="container-fluid">
               <div class="topnav">
                   <h3 class="text-center">Kumaripati TV Centre</h3>
                     </div>
              </div>
   </div>
   </nav>
  <div class="row dashboard-row">
      <div class="col-lg-2 side-col">
        <div class="panel panel-primary sidemenu-panel">
          <div class="panel panel-body">
            <div class="panel panel-primary">
              <div id="sidemenu">
                 <ul class="list-unstyled">
                   <li><i class="fa fa-home"style="font-size:24px;">&nbsp;</i> <a href="dashboard.php?">Admin Dashboard</a></li>
                   <li><i class="fa fa-home"style="font-size:24px;">&nbsp;</i> <a href="dashboard.php?view_customers">Customer Management</a></li>
                    <li><i class="fa fa-gift"style="font-size:24px;">&nbsp;</i> <a href="dashboard.php?view_products">Products</a></li>
                    <li><i class="fa fa-briefcase"style="font-size:24px;">&nbsp;</i> <a href="dashboard.php?view_category">Category</a></li>
                     <li><i class="fa fa-shopping-cart"style="font-size:24px;">&nbsp;</i> <a href="dashboard.php?view_order">Orders</a></li>
                     <li><i class="fa fa-credit-card"style="font-size:24px;">&nbsp;</i> <a href="dashboard.php?view_payment">Payment</a></li>
                       <li><i class="fa fa-sign-out"style="font-size:24px;">&nbsp;</i> <a href="logout.php">Admin Logout</a></li>
                 </ul>  
              </div>
            </div>
          </div>
        </div>
      </div>
       <div class="col-lg-10 content-col">
                <h2 style="color:red; text-align:center;"><?php echo @$_GET['logged_in']; ?></h2>
                <div class="content-inner">
     
                  <?php 
                  if(isset($_GET['view_customers'])){
                  
                  include("view_customers.php"); 
                  
                  }
                  if(isset($_GET['insert_product'])){
    
                  include("insert_product.php"); 
    
                   }
                  if(isset($_GET['view_products'])){
                  
                  include("view_products.php");
                }
                 if(isset($_GET['insert_cateogry'])){
                  
                  include("insert_category.php");
                }

                 if(isset($_GET['view_category'])){
                  
                  include("view_category.php"); 
                   }

                 if(isset($_GET['view_order'])){
                  
                  include("view_order.php"); 
                   }

                 if(isset($_GET['view_payment'])){
                  
                  include("view_payment.php"); 
                   }
   ?>
                  <?php } ?>
                </div>
              </div>
            

    </body>
</html>