<?php 
	include("../include/connect.php"); 
	$path = '../uploads';
	$customer_id = $_GET['customer_id'];
    $query = " select * FROM `tbl_customer` WHERE customer_id = $customer_id ";
    $ans = mysqli_query($con, $query);
    $row=mysqli_fetch_row($ans);
    unlink($path.'/'.$row[5]);
    $q = " DELETE FROM `tbl_customer` WHERE customer_id = $customer_id ";
    $query=mysqli_query($con, $q);
    if($query){
      echo "<script>alert('A customer has been deleted!')</script>";
	  echo "<script>window.open('dashboard.php?view_customers','_self')</script>";
	}
?>







