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

  <title> ADD BOOK </title>
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
  <div class="addbook_img">
    <br> <br><br>
    <div class="box1">
        <h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;"> ADD BOOK</h1>
        
      <form name="Add book" action="book_check.php" method="post">
        
        <div class="addbook">
          <input class="form-control" type="text" name="BOOKID" placeholder="BOOK ID" required> <br>
          <input class="form-control" type="text" name="BOOKNAME" placeholder="BOOK NAME" required> <br>
          <input class="form-control" type="text" name="FILENAME" placeholder="FILE NAME" required> <br>
          <input class="form-control" type="text" name="PDF_PATH" placeholder="PDF PATH" required> <br>
          <input class="form-control" type="text" name="PATH_PHOTO" placeholder="PHOTO PATH" required> <br>
          <input class="form-control" type="text" name="AUTHOR" placeholder="BOOK AUTHOR" required> <br><br>
          <input class="btn btn-default" type="submit" name="SUBMIT" value="ADD" style="color: black; width: 70px; height: 30px"> 

          
      </form>
     
    </div>
  </div>
</section>

    
    

</body>
</html>