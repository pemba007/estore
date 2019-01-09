<?php
  $server="localhost";
  $user="root";
  $pass="";
  $dbname="kumari";
  $con=mysqli_connect($server,$user,$pass)or die(mysqli_error());
  mysqli_select_db($con,$dbname)or die(mysqli_error());
  function display_categories()
  {
	 global $con;
	 $sql="select *from tbl_categories";
	 $qry=mysqli_query($con,$sql) or die(mysqli_error());
	 $i=0;
	 while($row=mysqli_fetch_array($qry))
	 {
	  $category_id=$row['id'];
	  $category_title=$row['title'];
	  $i++;
	  echo "<div class='container-fluid text-center'>
	  		 <h1 class='page-header' id=' categories'>
				$categories_title  </h1>
  				 </div>";
  				  }
 }
  function display_trending()
  {
	 global $con;
	 $sql="select *from tbl_trending";
	 $qry=mysqli_query($con,$sql) or die(mysqli_error());
	 $i=0;
	 while($row=mysqli_fetch_array($qry))
	 {
	  $trending_id=$row['id'];
	  $trending_title=$row['title'];
	   $trending_image=$row['images'];
	  $i++;
	  echo "<div class='container-fluid text-center'>
	  		 <h1 class='page-header' id=' trending'>
				$trending_title  </h1>
  				 </div>";
  				  }
 }
  function display_latest()
  {
	 global $con;
	 $sql="select *from tbl_latest";
	 $qry=mysqli_query($con,$sql) or die(mysqli_error());
	 $i=0;
	 while($row=mysqli_fetch_array($qry))
	 {
	  $latest_id=$row['id'];
	  $latest_title=$row['title'];
	   $latest_image=$row['images'];
	  $i++;
	  echo "<div class='container-fluid text-center'>
	  		 <h1 class='page-header' id=' latest'>
				$trending_title  </h1>
  				 </div>";
  				  }
 }
 function display_products()
  {
	 global $con;
	 $sql="select *from tbl_products";
	 $qry=mysqli_query($con,$sql) or die(mysqli_error());
	 $i=0;
	 while($row=mysqli_fetch_array($qry))
	 {
	  $products_id=$row['id'];
	  $products_title=$row['title'];
	   $products_desc=$row['description'];
	   $products_image=$row['images'];
	  $i++;
	  echo "<div class='container-fluid text-center'>
	  		 <h1 class='page-header' id=' products'>
				$products_title  </h1>
  				 </div>";
  				  }
 }

 
 ?>
