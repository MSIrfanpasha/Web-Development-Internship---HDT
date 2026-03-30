<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            justify-content: center;
            align-items: center;
        }
        .login{
            width: 50%;
            height: 300px;
            background-color:lightpink;
            justify-content: center;
            align-items: center;
            padding:20px;
            border-radius:10px;
            margin-left:20%
        }
        .login input[type=text], input[type=email] ,input[type=password],input[type=date]{
            width:100%;
            height: 30px;
            margin-top:10px;
            margin-bottom:10px;
            border-radius:10px;
            border:none;
        }
        .login label{
            width:100%;
        }
        .login input[type=submit]{
            width: 100%;
            height:40px;
              margin-top:10px;
            margin-bottom:10px;
            border-radius:10px;
            border:none;
        }
          .login input[type=submit]:hover{
            background-color:green;
            color:white;
        }
        .login input[type=reset]{
            width: 100%;
            height:40px;
            margin-top:10px;
            margin-bottom:10px;
             border-radius:10px;
             border:none;
        }
        .login input[type=reset]:hover{
            background-color:red;
            color:white;
        }
        .login a{
            text-align:center;
            text-decoration:none;
        }
    </style>
</head>
<body>
    <?php
    if(isset($_POST['login'])){
        $con=mysqli_connect("localhost","root","","productdb");
       
        $email=$_POST['email'];
        $psw=$_POST['psw'];
        $check="select * from signup where Email='$email' and Password='$psw'";
        $result=mysqli_query($con, $check);
        $rows=mysqli_num_rows($result);
        $count=mysqli_num_rows($result);
        if($count==1){
            $row=mysqli_fetch_assoc($result);
	        $_SESSION['Username']=$row['Name'];
            $_SESSION['Email']=$row['Email'];
                        header("location:addproduct.php");
        }else{
            echo "<h3 style='color:red'>Invalid Login</h3>";
        }
        mysqli_close($con);
    }
    ?>
    <div class="login">
    <form action="" method="post">
        <label for="email">Email</label>
        <input type="email" name="email">
        <label for="psw">Password</label>
        <input type="password" name="psw">
        <input type="submit" value="Login" name="login">
        <input type="reset" value="Cancle">
        <a href="signup.php">You dont have a account click here to signup</a>
    </form>
</div>
</body>
</html>