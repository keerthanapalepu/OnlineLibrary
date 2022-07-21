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
  <title> ADD ARTICLE </title>
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
  <div class="addarticle_img">
    <br> <br><br>
    <div class="box1">
        <h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;"> ADD ARTICLE </h1><br>
        <br>
        
      <form name="Add Article" action="article_check.php" method="post">
        
        <div class="addarticle">
          <input class="form-control" type="text" name="ARTICLE_ID" placeholder="ARTICLE ID" required=""> <br>
          <input class="form-control" type="text" name="TOPIC" placeholder="ARTICLE NAME" required=""> <br>
          <input class="form-control" type="text" name="FILENAME" placeholder="FILE NAME" required=""> <br>
          <input class="form-control" type="text" name="WRITTER" placeholder="WRITTER" required=""> <br>
          <input class="form-control" type="text" name="PATH" placeholder="PATH" required=""> <br>
          <input class="btn btn-default" type="submit" name="SUBMIT" value="ADD" style="color: black; width: 70px; height: 30px"> 

          
      </form>
     
    </div>
  </div>
</section>

    
    

</body>
</html>