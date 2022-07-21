<?php 
session_start(); 
session_unset(); 
session_destroy(); 
?> 
<!DOCTYPE html>
<html>
<head>

  <title>USER LOGIN </title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

  <style type="text/css">
    section
    {
      margin-top: -20px;
    }
  </style>   
</head>
<body>

<section>
  <div class="log_img">
    <br> <br><br>
    <div class="box1">
        <h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;"> Library Management System</h1>
        <h1 style="text-align: center; font-size: 25px;">USER LOGIN FORM</h1><br>

      <form name="Login" action="login_check.php" method="post">
        
        <div class="login">
          <input class="form-control" type="text" name="username" placeholder="Username" required=""> <br>
          <input class="form-control" type="password" name="password" placeholder="Password" required=""> <br>
          <input class="btn btn-default" type="submit" name="SUBMIT" style="color: black; width: 70px; height: 30px"> 

          <p style="color: white; padding-left: 15px;">
                 <br><br>
                 <a style="color:white" href="">Forgot password</a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                 New to this website?<a style="color:white;" href="SIGN_IN.html">Sign-Up</a>
             </p>
      </form>
     
    </div>
  </div>
</section>

    
</body>
</html>