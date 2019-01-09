<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Insert brand</title>
</head>
<body>
<div class="panel panel-default">
              <div class="panel panel-heading"><h4 class="text-center">Insert New Brand </h4></div>
              <div class="panel panel-body">
<form action="" method="post">
		<b>Insert New Brand:</b> <input type="text" name="new_brand" required/ /> 
   <button type="submit" class="btn btn-primary" name="add_brand">Add Brand</button>
</form>
			   </div></div>
			  </body></html>
<?php 
include("../include/connect.php"); 

	if(isset($_POST['add_brand'])){
	
	$new_brand = $_POST['new_brand'];
	
	$insert_brand = "insert into tbl_brand (brand_title) values ('$new_brand')";

	$run_brand = mysqli_query($con, $insert_brand); 
	
	if($run_brand){
	
	echo "<script>alert('New Brand has been inserted!')</script>";
	echo "<script>window.open('dashboard.php?view_brands','_self')</script>";
	}
	}

?>