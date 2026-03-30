<?php
  if(isset($_POST['delete'])){
    $con=mysqli_connect("localhost","root","","productdb");
    $pid=$_POST['pid'];
    $sqldelete="delete from  productinfo_tbl where PID='$pid'";
    if(mysqli_query($con,$sqldelete)){
        echo "Data deleted successfully";
    }else{
        echo "error in delete data".$mysqli_error();
    }
    mysqli_close($con);
  }
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Addproduct</title>
</head>
<body>
    <div class="product">
        <h2>Delete Product Information</h2>
        <form action="" method="post">
            <label for="pid">Enter the Product ID</label>
            <input type="text" name="pid">
            <input type="submit" value="Delete" name="delete">
        </form>
    </div>
</body>
</html>