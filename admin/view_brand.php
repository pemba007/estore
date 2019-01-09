<!DOCTYPE HTML>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width,initial-scale,1.0">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css" />
    <link rel="stylesheet" type="text/css" href="css/animate.css" />
    <link rel="stylesheet" type="text/css" href="css/animate.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <title>View Category</title>
</head>

<body>
    <div class="panel panel-default">
        <div class="panel panel-heading">
            <h4 class="text-center">View All Brands Here </h4>
        </div>
        <div class="panel panel-body">
            <table align="center" border="1px" width="100%">
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                <?php 
	include("../include/connect.php");
	$get_brand = "select * from tbl_brand";
	$run_brand = mysqli_query($con, $get_brand); 
	$i = 0;
	while ($row_brand=mysqli_fetch_array($run_brand)){
		$brand_id = $row_brand['brand_id'];
		$brand_title = $row_brand['brand_title'];
		$i++;
	?>
                <tr align="center">
                    <td>
                        <?php echo $i;?>
                    </td>
                    <td>
                        <?php echo $brand_title;?>
                    </td>
                    <td><a href="index.php?edit_brand=<?php echo $brand_id; ?>">Edit</a></td>
                    <td><a href="delete_brand.php?delete_brand=<?php echo $brand_id;?>">Delete</a></td>
                </tr>
                <?php } ?>
            </table>
        </div> <!-- panel body end   -->
    </div> <!--  panel end  -->
</body>

</html>