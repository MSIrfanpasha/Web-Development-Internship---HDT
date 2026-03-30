<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <style>
        body{
            justify-content: center;
            align-items: center;
        }
        .signup{
            width: 50%;
            height: 400px;
            background-color:lightpink;
           justify-content: center;
            align-items: center;
            padding:20px;
            border-radius:10px;
            margin-left:20%;
        }
        .signup input[type=text], input[type=email] ,input[type=password],input[type=date]{
            width:100%;
            height: 30px;
            margin-top:10px;
            margin-bottom:10px;
            border-radius:10px;
            border:none;
        }
        .signup label{
            width:100%;
        }
        .signup input[type=submit]{
            width: 100%;
            height:40px;
              margin-top:10px;
            margin-bottom:10px;
            border-radius:10px;
            border:none;
        }
          .signup input[type=submit]:hover{
            background-color:green;
            color:white;
        }
        .signup input[type=reset]{
            width: 100%;
            height:40px;
            margin-top:10px;
            margin-bottom:10px;
             border-radius:10px;
             border:none;
        }
        .signup input[type=reset]:hover{
            background-color:red;
            color:white;
        }
        .signup a{
            text-align:center;
            text-decoration:none;
        }
    </style>
</head>
<body>
    <div class="signup">
    <form action="" method="post">
        <label for="Name">Name</label>
        <input type="text" name="name" placeholder="Enter your name">
        <label for="DOB">Date of Birth :</label>
        <input type="date" name="dob">
        <label for="email">Email</label>
        <input type="email" name="email">
        <label for="psw">Password</label>
        <input type="password" name="psw">
        <input type="submit" value="SignUp" name="signup">
        <input type="reset" value="Cancle">
        <a href="login.php">Allready you have a account click hee to login</a>
    </form>
</div>
</body>
</html>