<!DOCTYPE html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width,initial-scale,1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />

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

    <div class="container-fluid">

        <div class="row">

            <div class="col-lg-3"></div>
            <div class="col-lg-5">
                <div class="jumbotron">

                    <h2> User Registration Form</h2><br>

                    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="name"><b>Name</b></label>
                            <input type="text" class="form-control" placeholder="Enter name" name="customer_name" required pattern="^[A-Za-z]+">
                        </div>
                        <div class="form-group">
                            <label for="image"><b>Image</b></label>
                            <input type="file" class="form-control" id="inputcImage" name="customer_image" required />

                        </div>
                        <div class="form-group">
                            <label for="email"><b>Email</b></label>
                            <input type="email" class="form-control" placeholder="Enter Email Address" name="customer_email" required>
                        </div>

                        <div class="form-group">
                            <label for="psw"><b>Password</b></label>
                            <input type="password" class="form-control" placeholder="Enter Password" name="customer_password" required>
                        </div>
                        <div class="form-group">
                            <label for="phone"><b> Phone</b></label>
                            <input type="number" class="form-control" placeholder="Enter your contact number" name="customer_phone" required>
                        </div>
                        <div class="form-group">
                            <label for="address"><b>Address</b></label>
                            <input type="text" class="form-control" placeholder="Enter Address" name="customer_address" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success" name="register">Submit</button>
                            <button type="button" class="btn btn-danger">cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>
<?php
   include("include/connect.php");  
   if(isset($_POST['register']))
   {
          $c_name=$_POST['customer_name'];
          $c_image=$_FILES['customer_image'];
          $c_image= $_FILES['customer_image']['name'];  
          $c_tmp_image= $_FILES['customer_image']['tmp_name'];  
            if(isset($c_image)){
              $location = 'uploads/';      
              if(move_uploaded_file($c_tmp_image, $location.'/'.$c_image)){
                  echo 'File uploaded successfully';
              }
    }else 
    {
        echo 'error uploading the file!!';
    }
          $c_email=$_POST['customer_email'];
          $c_password=$_POST['customer_password'];
          $c_phone=$_POST['customer_phone'];
          $c_address=$_POST['customer_address'];
       
        $q=" INSERT INTO tbl_customer (`customer_name`, `customer_image`,`customer_email`,`customer_password`,`customer_phone`,`customer_address`) VALUES('$c_name','$c_image','$c_email','$c_password','$c_phone','$c_address')";
    $query=mysqli_query($con,$q);
  if($query)
    {
      echo "<script>alert('Post Has Been Submitted Successfully')</script>";
    }
}
    
?>