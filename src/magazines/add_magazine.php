<?php  
session_start(); 
if(!(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1)){  
header('location:login_form.php'); 
exit(); 
} 
?> 
<!DOCTYPE html>
<html>
<head>
  <title> ADD MAGAZINE </title>
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
  <div class="addmagazine_img">
    <br> <br><br>
    <div class="box1">
        <h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;"> ADD MAGAZINE</h1><br>
      <form name="Add magazine" action="magazine_check.php" method="post">
        
        <div class="addmagazine">
          <input class="form-control" type="text" name="MAGID" placeholder="MAGAZINE ID" required=""> <br>
          <input class="form-control" type="text" name="MAGNAME" placeholder="MAGAZINE NAME" required=""> <br>
          <input class="form-control" type="text" name="FILENAME" placeholder="FILE NAME" required=""> <br>
          <input class="form-control" type="text" name="CATEGORY" placeholder="CATEGORY" required=""> <br>
          <input class="form-control" type="text" name="PATH" placeholder="PATH" required=""> <br><br>
          <input class="btn btn-default" type="submit" name="SUBMIT" value="ADD" style="color: blue; width: 70px; height: 30px"> 

          
      </form>
     
    </div>
  </div>
</section>

    
    

</body>
</html>