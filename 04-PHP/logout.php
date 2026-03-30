<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<script>alert('Login successfull..!')</script>";
    echo "Welcome ".$_SESSION['Username'];
    echo "<br>Your Email id is ".$_SESSION['Email'];
    ?>
    <form action="" method="post">
    <input type="submit" value="Logout" name="logout">
    </form>
    <?php
    if(isset($_POST['logout'])){
         echo "<script>altert('Logout successfully')</script>";
        session_unset();
        session_destroy();
       
        header("location:login.php");
    }
    ?>
</body>
</html>