<?php 
	include("../include/connect.php"); 
	$pro_id = $_GET['product_id'];
    $query = " select * FROM `tbl_product` WHERE product_id = $pro_id ";
    $ans = mysqli_query($con, $query);
    $row=mysqli_fetch_row($ans);
    $q = " DELETE FROM `tbl_product` WHERE product_id = $pro_id ";
    $query=mysqli_query($con, $q);
    if($query){
      echo "<script>alert('A customer has been deleted!')</script>";
	  echo "<script>window.open('dashboard.php?view_products','_self')</script>";
	}
?>