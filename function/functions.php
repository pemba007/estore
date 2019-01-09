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
	  $categories_id=$row['id'];
	  $categories_title=$row['title'];
	  $i++;
	  echo "<div class='container-fluid text-center'>
	  		 <h1 class='page-header' id='categories'>
				$categories_title  </h1>
			</div>";
	 }
 }
 function display_trend()
  {
	 global $con;
	 $sql="select *from tbl_trend";
	 $qry=mysqli_query($con,$sql) or die(mysqli_error());
	 $i=0;
	 while($row=mysqli_fetch_array($qry))
	 {
	  $trend_id=$row['id'];
	  $trend_title=$row['title'];
	  $trend_img=$row['images'];
	  $i++;
	  echo "<div class='container-fluid text-center'>
	  		 <h1 class='page-header' id='Trending Now'>
				$trend_title  </h1>
  				  <p> $trend_img  </p>
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
	  $latest_img=$row['images'];
	  $i++;
	  echo "<div class='container-fluid text-center'>
	  		 <h1 class='page-header' id='Latest Arrival'>
				$latest_title  </h1>
  				  <p> $latest_img</p>
			</div>";
			 
	 }
 }
 function display_product()
  {
	 global $con;
	 $sql="select *from tbl_product";
	 $qry=mysqli_query($con,$sql) or die(mysqli_error());
	 $i=0;
	 while($row=mysqli_fetch_array($qry))
	 {
	  $product_id=$row['id'];
	  $product_title=$row['title'];
	  $product_desc=$row['description'];
	  $i++;
	  echo "<div class='container-fluid text-center'>
	  		 <h1 class='page-header' id='product'>
				$product_title  </h1>
  				  <p> $product_desc  </p>
			</div>";
	 }
 }