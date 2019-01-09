<!DOCTYPE HTML>
<html>
<head>
        <title>Insert Category</title>
</head>
<body>
  <?php include("../include/sidebar.php");?>
          <div class="col-lg-10"> 
            <div class="newcategory width:500%  margin:20px 0px">               
              <div class="card">
                <div class="card-header bg-dark">
                  <h1 class="text-center text-white"> Insert New Category</h1>
        </div>
      </div>
          <div>
          <form action="" method="post">
    <b>Insert New Category:</b> <input type="text" name="new_cat" required/> 
   <button type="submit" class="btn btn-success" name="add_cat">Add Category</button>
</form>
     
         
		
			    <!-- </div>
			</div>
		</div> -->
</body>
</html>
<?php 
include("../include/connect.php");
	 if(isset($_POST['add_cat'])){
	 $new_cat = $_POST['new_cat'];
	 $insert_cat = "insert into tbl_category (cat_title) values ('$new_cat')";
     $run_cat = mysqli_query($con, $insert_cat); 
	 if($run_cat){
	 echo "<script>alert('New Category has been inserted!')</script>";
	 echo "<script>window.open('dashboard.php?view_category','_self')</script>";
	}
	}

?>