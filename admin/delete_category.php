<?php 
    include("../include/connect.php"); 
    $cat_id = $_GET['cat_id'];
    $query = " select * FROM `tbl_category` WHERE cat_id = $cat_id ";
    $ans = mysqli_query($con, $query);
    $row=mysqli_fetch_row($ans);
    $q = " DELETE FROM `tbl_category` WHERE cat_id = $cat_id ";
    $query=mysqli_query($con, $q);
    if($query){
      echo "<script>alert('A customer has been deleted!')</script>";
      echo "<script>window.open('dashboard.php?view_category','_self')</script>";
    }
?>
