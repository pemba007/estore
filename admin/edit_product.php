<?php 
include('../include/connect.php');
if(isset($_GET['product_id'])){

    $get_id = $_GET['product_id']; 
    
    $get_pro = "select * from tbl_product where product_id='$get_id'";
    
    $run_pro = mysqli_query($con, $get_pro); 
    
    $i = 0;
    
    $row_pro=mysqli_fetch_array($run_pro);
        
            $pro_id=$row_pro['product_id'];
            $pro_cat=$row_pro['product_cat'];
            $pro_name=$row_pro['product_name'];
            $pro_price=$row_pro['product_price'];
            $pro_image=$row_pro['product_image'];
            $pro_key=$row_pro['product_keyword'];
            $pro_desc=$row_pro['product_description'];
        }
           
?>

<!DOCTYPE HTML>
<html>

<head>
    <?php include("../include/head.php");?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Edit Product</title>
</head>

<body>
    <?php include("../include/sidebar.php");?>
    <div class="col-lg-10">
        <div class="edit-content-inner">
            <div class="card">
                <div class="card-header bg-dark">
                    <h1 class="text-center text-white"> Edit Product</h1>
                </div>
            </div>
            <table align="center" border="1px" width="100%">
                <div class="jumbotron">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">

                            <label for="Category"><b> Product Category</b></label>
                            <input type="text" class="form-control" placeholder="Enter Product Category" name="product_cat" required">
                        </div><br>
                        <div class="form-group">
                            <label for="Category"><b> Product Name</b></label>
                            <input type="text" class="form-control" placeholder="Enter Product Name" name="product_name" />
                        </div><br>
                        <div class="form-group">
                            <label for="Price"><b>Product Price</b></label>
                            <input type="number" class="form-control" placeholder="Enter Price" name="product_price" required pattern="^[1-9][0-9]*$" />
                        </div>
                        <div class="form-group">
                            <label for="image"><b>Product Image</b></label>
                            <input type="file" class="form-control" id="inputproImage" name="product_image" required />
                        </div><br>

                        <div class="form-group">
                            <label for="keyword"><b>Product keyword</b></label>
                            <input type="text" class="form-control" placeholder="Enter keyword" name="product_keyword" required pattern="^[A-Za-z]+" />
                        </div><br>

                        <div class="form-group">
                            <label for="psw"><b>Product Description</b></label>
                            <textarea name="product_description" required pattern="/^\p{Xan}+$/"></textarea>
                        </div>


                        <button type="submit" class="btn btn-primary" name="update_product">Update product</button>

                    </form>
            </table>


            <div>
            </div>

        </div>
    </div>



</body>

</html>

<?php 

    if(isset($_POST['update_product'])){
    
        //getting the text data from the fields
        
        $update_id = $pro_id;
        $pro_cat= $_POST['product_cat'];
        $pro_name = $_POST['product_name'];
        $pro_price = $_POST['product_price'];
        $pro_key = $_POST['product_keyword'];
        $pro_desc = $_POST['product_description'];
    
        //getting the image from the field
         $pro_image= $_FILES['product_image']['name'];  
          $pro_tmp_image= $_FILES['product_image']['tmp_name']; 
        
    if(isset($pro_image)){
              $location = 'productimage/';      
              if(move_uploaded_file($pro_tmp_image, $location.'/'.$pro_image)){
                  echo 'File uploaded successfully';
              }
    }else 
    {
        echo 'error uploading the file!!';
    }
    
         $update_product = "update tbl_product set product_cat='$pro_cat',product_name='$pro_name',product_price='$pro_price',product_keyword='$pro_key',product_description='$pro_desc', product_image='$pro_image' where product_id='$update_id'";
         
         $run_product = mysqli_query($con, $update_product);
         
         if($run_product){
         
         echo "<script>alert('Product has been updated!')</script>";
         
         echo "<script>window.open('dashboard.php?view_products','_self')</script>";
        }
    }
         

    ?>