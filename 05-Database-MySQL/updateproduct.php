<?php
  if(isset($_POST['updateproduct'])){
    $con=mysqli_connect("localhost","root","","productdb");
    $pid=$_POST['pid'];
    $pname=$_POST['pname'];
    $ptype=$_POST['ptype'];
    $mfgdate=$_POST['mfgdate'];
    $nounits=$_POST['nounits'];
    $cost=$_POST['cost'];
    $disc=$_POST['disc'];
    $sqlupdate="update productinfo_tbl set PRODUCT_NAME='$pname',MFG_DATE='$mfgdate',DISCRIPTION='$disc' where PID='$pid'";
    if(mysqli_query($con,$sqlupdate)){
        echo "Data update successfully";
    }else{
        echo "error in databse".$mysqli_error();
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
        <h2>Add Product Information</h2>
        <form action="" method="post">
            <label for="pid">Product ID</label>
            <input type="text" name="pid">
            <label for="pname">Product Name</label>
            <input type="text" name="pname">
            <label for="Ptype">Product Type</label>
            <select name="ptype" id="">
                <option value="Dress">Dress</option>
                <option value="Stationary">Sattionary</option>
                <option value="Iron">Iron</option>
                <option value="Mobile">Mobile</option>
            </select>
            <label for="mfgdate">Mfg. Date</label>
            <input type="date" name="mfgdate" >
            <label for="nounit">No. Of Units</label>
            <input type="text" name="nounits">
            <label for="cost">Cost per Unit</label>
            <input type="text" name="cost">
            <label for="disc">Discription</label>
            <textarea name="disc" ></textarea>
            <input type="submit" value="Update Product" name="updateproduct">
        </form>
    </div>
</body>
</html>