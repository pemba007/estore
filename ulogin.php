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
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">


                <div class="jumbotron">
                    <form name="login" action="ulogin.php" method="POST">
                        <h2> User Login Form</h2>
                        <div class="form-group  text-center">
                            <label for="Username">Username</label>
                            <input type="text" name="uname" class="form-control" placeholder="Enter your username" required pattern="^[A-Za-z0-9]+" />
                        </div>
                        <div class="form-group  text-center">
                            <label for="Password">Password</label>
                            <input type="password" name="passwd" class="form-control" placeholder="Enter your password" required pattern="^[A-Za-z0-9]+" />
                        </div>
                        <div class="form-group">
                            <button type="submit" name="login" class="btn btn-primary">Login</button>
                        </div>
                        <h6>Create an account here.</h6>
                        <a href="register.php">Sign Up</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4"></div>
    </div>
    </div>
</body>

</html>
<?php
  include("include/connect.php");
  if(isset($_POST['login']))
  {
      $username=mysqli_real_escape_string($con,$_POST['uname']);
      $password=mysqli_real_escape_string($con,$_POST['passwd']);
      $sel_user = "select * from tbl_register where username='$username' AND password='$password'";
    $run_user = mysqli_query($con, $sel_user); 
     $check_user = mysqli_num_rows($run_user); 
    if($check_user==1)
    {
    $_SESSION['username']=$username; 
    echo "<script>window.open('index.php?logged_in=You have successfully Logged in!','_self')</script>";
    }
    else {
        echo "<script>alert('Password or Username is wrong, try again!')</script>";
        echo "<script>window.open('login.php?invalid=Invalid username or password!','_self')</script>";
    }
    }
?>