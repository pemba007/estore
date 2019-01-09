<!DOCTYPE HTML>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <title>View Customers</title>
</head>

<body>
    <div class="container fluid">
        <div class="card">
            <div class="card-header bg-dark">
                <h1 class="text-center text-white"> Customer Information</h1>
            </div>
        </div>

        <table align="center" border="1px" width="100%">

            <tr>
                <th>Customer_id</th>
                <th>Customer_name</th>
                <th>Customer_image</th>
                <th>Customer_email</th>
                <th>Customer_password</th>
                <th>Customer_phone</th>
                <th>Customer_address</th>
                <th>Delete</th>
            </tr>
            <?php 
								include("../include/connect.php");
								
								$get_c = "select * from tbl_customer";
								
								$run_c = mysqli_query($con, $get_c); 
								
								$i = 0;
								
								while ($row_c=mysqli_fetch_array($run_c)){
									
									$c_id = $row_c['customer_id'];
									$c_name = $row_c['customer_name'];
									$c_image = $row_c['customer_image'];
									$c_email = $row_c['customer_email'];  
									$c_password = $row_c['customer_password'];
									$c_phone = $row_c['customer_phone'];
									$c_address = $row_c['customer_address'];
									$i++;
								
								?>

            <tr align="center">
                <td>
                    <?php echo $c_id;?>
                </td>
                <td>
                    <?php echo $c_name;?>
                </td>
                <?php
									$image="../uploads/".$c_image;
									?>
                <td>
                    <?php echo "<img src='".$image."'class=img-thumbnail width=150 height=100/>";?>
                </td>
                <td>
                    <?php echo $c_email;?>
                </td>
                <td>
                    <?php echo $c_password;?>
                </td>
                <td>
                    <?php echo $c_phone;?>
                </td>
                <td>
                    <?php echo $c_address;?>
                </td>
                <td> <button class="btn-danger btn"> <a href="delete_cus.php?customer_id=<?php echo $row_c['customer_id']; ?>" class="text-white" value="delete" onclick='return confirmDelete()'> Delete </a></button> </td>
            </tr>
            <?php } ?>

        </table>
</body>

</html>