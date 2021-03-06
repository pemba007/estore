<!DOCTYPE html>
<html lang="en">

<body>
    <div class="container">
        <div class="col-lg-12"><br><br>
            <a href="insert_product.php" class="btn btn-success insert-btn">Insert Products</a> <br></br>
            <div class="card">
                <div class="card-header bg-dark">
                    <h1 class="text-center text-white"> Product Information</h1>
                </div>
            </div>

            <table align="center" border="1px" width="100%">
                <tr>
                    <th>Product_id</th>
                    <th>Product_category</th>
                    <th>Product_name</th>
                    <th>Product_price</th>
                    <th>Product_image</th>
                    <th>Product_keyword</th>
                    <th>Product_description</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
        </div>
        <?php
           include("../include/connect.php"); 
           $q = "select * from tbl_product ";
           $query = mysqli_query($con,$q);
           $i=0;
           while($row=mysqli_fetch_array($query))
           {
            $pro_id=$row['product_id'];
            $pro_cat=$row['product_cat'];
            $pro_name=$row['product_name'];
            $pro_price=$row['product_price'];
            $pro_image=$row['product_image'];
            $pro_key=$row['product_keyword'];
            $pro_desc=$row['product_description'];
            $i++;
           ?>
        <tr class="text-center">
            <td>
                <?php echo $pro_id;?>
            </td>
            <td>
                <?php echo $pro_cat;?>
            </td>
            <td>
                <?php echo $pro_name;?>
            </td>
            <td>
                <?php echo $pro_price;?>
            </td>
            <?php 
            $image  = "productimage/" . $pro_image;
            ?>
            <td>
                <?php echo "<img src='".$image."'class=img-thumbnail width=150 height=100/>";?>
            </td>
            <td>
                <?php echo $pro_key;?>
            </td>
            <td>
                <?php echo $pro_desc;?>
            </td>
            <td> <button class="btn-danger btn"> <a href="delete_product.php?product_id=<?php echo $row['product_id']; ?>" class="text-white" value="delete" onclick='return confirmDelete()'> Delete </a></button> </td>
            <td><button class="btn-success btn"><a href="edit_product.php?product_id=<?php echo $row['product_id']; ?>" class="text-white">Edit</a></button></td>
        </tr>
        <?php } ?>
        </table>
    </div>
    </div>
</body>

</html>