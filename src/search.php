<?php 
//Start the session to see if the user is authenticated user. 
session_start(); 
//Check if the user is authenticated first. Or else redirect to login page 
if(!(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1)){  
header('location:login_form.php'); 
exit(); 
} 
?> 
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ONLINE LIBRARY</title>
    <style>
li {
  float: left;
}
li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
li a:hover, .dropdown:hover .dropbtn {
  background-color: orange;
  color: black;
}
li.dropdown {
  display: inline-block;
}
.dropdown-content {
  display: none;
  position: absolute;
  background-color: black;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown-content{
  margin-top : 45px;
}

.dropdown-content a {
  color : white;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: orange;
  color: black;
}
.dropdown-content a.active {
  background-color: orange;
  color: white;
}
table{
    margin-top: 15%;
    background-color: whitesmoke;
}
thead{
    color : white;
    background-color: black;
}
th,td{
    width : 200px;
}
tr{
  height : 40px;
  width : 20px;
}
.button{
  color : black;
  background-color : red;
  border : none ;
  width : 70px;
  height : 25px;
}
</style>
    <link rel="stylesheet" href="mainstyle.css" />
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&display=swap" rel="stylesheet"/>
    </head>
  <body>
      <?php
       $link = mysqli_connect('localhost', 'root', '', 'librarydb'); 
       //Check link to the mysql server 
       if(!$link){ 
       die('Failed to connect to server'); 
       } 

      if ($_POST['ad'] == 'name'){
        //validation flag to check that all validations are done 
        $validationFlag = true; 
        if ($_POST['ca'] == 'books'){
            //validation flag to check that all validations are done 
            $validationFlag = true; 
            $text = $_POST['text']; 
            $query = "SELECT * FROM books WHERE BOOKNAME LIKE '$text%'";
             //Execute query 
            $result = mysqli_query($link, $query);
            if($result == FALSE) 
            echo mysql_error() . '<br>'; 
            echo '<h1><center>SEARCH RESULTS</center></h1>';
            ?>
            <center><table> 
            <thead> 
                <tr style="color : white; background-color: black; border: 1px solid black;">
                    <th style="margin-left : 0px;"> COVERPAGE </th>
                    <th style="margin-left : 0px;"> DETAILS </th>
                    <th style="margin-left : 0px;"> PDF </th>
                </tr>
            </thead>
            <?php
            if(mysqli_num_rows($result)==0)
            echo "<center><h2>no results found<h2><center>";
            while($row = mysqli_fetch_assoc($result)){
              $pdf = $row['FILENAME'].'.pdf';
              $pic =$row['FILENAME'].'.jpeg';
              $pdf_path = $row['PATH_pdf'];
              $pic_path = $row['PATH_photo'];
              ?>

               <tr> 
                <td> <center><?php echo '<img src="'.$pic_path.$pic.'" width="50%" height="50%">
            </img>'; ?></center> </td> 
                <td> <center><?php echo '<strong> NAME: </strong>'.$row['BOOKNAME'];
                echo '<strong><br> AUTHOR : </strong>'.$row['AUTHOR'];
                ?></center> </td> 
                <td> <center><button class="button"> <a href="book.php?connection=<?php echo "$pdf_path$pdf"; ?>" style="text-decoration: none; 
  color : white;"> PDF</a></button></center> </td>
            </tr>
        <?php } ?>

            <?php
          }
          elseif ($_POST['ca'] == 'magazines'){
            //validation flag to check that all validations are done 
            $validationFlag = true; 
            $text = $_POST['text']; 
            $query = "SELECT * FROM magazines WHERE MAG_NAME LIKE '$text%'";
             //Execute query 
            $result = mysqli_query($link, $query);
            if($result == FALSE) 
            echo mysql_error() . '<br>'; 
            echo '<h1><center>SEARCH RESULTS</center></h1>';
            ?>
            <center><table> 
            <thead> 
                <tr style="color : white; background-color: black; border: 1px solid black;">
                    <th style="margin-left : 0px;"> DETAILS </th>
                    <th style="margin-left : 0px;"> PDF </th>
                </tr>
            </thead>
            <?php
            if(mysqli_num_rows($result)==0)
            echo "no results found";
            while($row = mysqli_fetch_assoc($result)){
                $pdf = $row['FILENAME'].'.pdf';
                $pdf_path = $row['PATH'];
                ?>

               <tr>  
                <td> <center><?php echo '<strong><br> NAME: </strong>'.$row['MAG_NAME'];
                echo '<strong><br><br> AUTHOR : </strong>'.$row['CATEGORY'];
                ?></center> </td> 
                <td> <center><button class="button"> <a href="book.php?connection=<?php echo "$pdf_path$pdf"; ?>" style="text-decoration: none; 
  color : white;"> PDF</a></button></center> </td>
            </tr>
        <?php } ?>

            <?php
              
              
        }
        elseif ($_POST['ca'] == 'articles'){
            //validation flag to check that all validations are done 
            $validationFlag = true; 
            $text = $_POST['text']; 
            $query = "SELECT * FROM articles WHERE TOPIC LIKE '$text%'";
             //Execute query 
            $result = mysqli_query($link, $query);
            if($result == FALSE) 
            echo mysql_error() . '<br>'; 
            echo '<h1><center>SEARCH RESULTS</center></h1>';
            ?>
            <center><table> 
            <thead> 
                <tr style="color : white; background-color: black; border: 1px solid black;">
                    <th style="margin-left : 0px;"> DETAILS </th>
                    <th style="margin-left : 0px;"> PDF </th>
                </tr>
            </thead>
            <?php
            if(mysqli_num_rows($result)==0)
            echo "no results found";
            while($row = mysqli_fetch_assoc($result)){
                $pdf = $row['FILENAME'].'.pdf';
                $pdf_path = $row['PATH'];
                ?>

               <tr>  
                <td> <center><?php echo '<strong><br> NAME: </strong>'.$row['TOPIC'];
                echo '<strong><br><br> AUTHOR : </strong>'.$row['WRITTER'];
                ?></center> </td> 
                <td> <center><button class="button"> <a href="book.php?connection=<?php echo "$pdf_path$pdf"; ?>" style="text-decoration: none; 
  color : white;"> PDF</a></button></center> </td>
            </tr>
        <?php } ?>

            <?php
            
        }
    }
    elseif ($_POST['ad'] == 'writter'){
        //validation flag to check that all validations are done 
        $validationFlag = true; 
        if ($_POST['ca'] == 'books'){
            //validation flag to check that all validations are done 
            $validationFlag = true; 
            $text = $_POST['text']; 
            $query = "SELECT * FROM books WHERE AUTHOR LIKE '$text%'";
             //Execute query 
            $result = mysqli_query($link, $query);
            if($result == FALSE) 
            echo mysql_error() . '<br>'; 
            echo '<h1><center>SEARCH RESULTS</center></h1>';
            ?>
            <center><table> 
            <thead> 
                <tr style="color : white; background-color: black; border: 1px solid black;">
                    <th style="margin-left : 0px;"> COVERPAGE </th>
                    <th style="margin-left : 0px;"> DETAILS </th>
                    <th style="margin-left : 0px;"> PDF </th>
                </tr>
            </thead>
            <?php
            if(mysqli_num_rows($result)==0)
            echo "<center><h2>no result found<h2><center>";
            while($row = mysqli_fetch_assoc($result)){
              $pdf = $row['FILENAME'].'.pdf';
              $pic =$row['FILENAME'].'.jpeg';
              $pdf_path = $row['PATH_pdf'];
              $pic_path = $row['PATH_photo'];
              
              ?>

              <tr> 
               <td> <center><?php echo '<img src="'.$pic_path.$pic.'" width="50%" height="50%">
           </img>'; ?></center> </td> 
               <td> <center><?php echo '<strong> NAME: </strong>'.$row['BOOKNAME'];
               echo '<strong><br> AUTHOR : </strong>'.$row['AUTHOR'];
               ?></center> </td> 
               <td> <center><button class="button"> <a href="book.php?connection=<?php echo "$pdf_path$pdf"; ?>" style="text-decoration: none; 
 color : white;"> PDF</a></button></center> </td>
           </tr>
       <?php } ?>

           <?php
          }
          elseif ($_POST['ca'] == 'magazines'){
            //validation flag to check that all validations are done 
            $validationFlag = true; 
            $text = $_POST['text']; 
            $query = "SELECT * FROM magazines";
             //Execute query 
            $result = mysqli_query($link, $query);
            if($result == FALSE) 
            echo mysql_error() . '<br>'; 
            echo '<h1><center>SEARCH RESULTS</center></h1>';
            ?>
            <center><table> 
            <thead> 
                <tr style="color : white; background-color: black; border: 1px solid black;">
                    <th style="margin-left : 0px;"> DETAILS </th>
                    <th style="margin-left : 0px;"> PDF </th>
                </tr>
            </thead>
            <?php
            if(mysqli_num_rows($result)==0)
            echo "no results found";
            while($row = mysqli_fetch_assoc($result)){
                $pdf = $row['FILENAME'].'.pdf';
                $pdf_path = $row['PATH'];
                ?>

               <tr>  
                <td> <center><?php echo '<strong><br> NAME: </strong>'.$row['MAG_NAME'];
                echo '<strong><br> AUTHOR : </strong>'.$row['CATEGORY'];
                ?></center> </td> 
                <td> <center><button class="button"> <a href="book.php?connection=<?php echo "$pdf_path$pdf"; ?>" style="text-decoration: none; 
  color : white;"> PDF</a></button></center> </td>
            </tr>
        <?php } ?>

            <?php
        }
        elseif ($_POST['ca'] == 'articles'){
            //validation flag to check that all validations are done 
            $validationFlag = true; 
            $text = $_POST['text']; 
            $query = "SELECT * FROM articles WHERE WRITTER LIKE '$text%'";
             //Execute query 
            $result = mysqli_query($link, $query);
            if($result == FALSE) 
            echo mysql_error() . '<br>'; 
            echo '<h1><center>SEARCH RESULTS</center></h1>';
            ?>
            <center><table> 
            <thead> 
                <tr style="color : white; background-color: black; border: 1px solid black;">
                    <th style="margin-left : 0px;"> DETAILS </th>
                    <th style="margin-left : 0px;"> PDF </th>
                </tr>
            </thead>
            <?php
            if(mysqli_num_rows($result)==0)
            echo "no results found";
            while($row = mysqli_fetch_assoc($result)){
                $pdf = $row['FILENAME'].'.pdf';
                $pdf_path = $row['PATH'];
                ?>

               <tr>  
                <td> <center><?php echo '<strong><br> NAME: </strong>'.$row['TOPIC'];
                echo '<strong><br> AUTHOR : </strong>'.$row['WRITTER'];
                ?></center> </td> 
                <td> <center><button class="button"> <a href="book.php?connection=<?php echo "$pdf_path$pdf"; ?>" style="text-decoration: none; 
  color : white;"> PDF</a></button></center> </td>
            </tr>
        <?php } ?>

            <?php
        }
    }
    elseif ($_POST['ad'] == 'id'){
        //validation flag to check that all validations are done 
        $validationFlag = true; 
        if ($_POST['ca'] == 'books'){
            //validation flag to check that all validations are done 
            $validationFlag = true; 
            $text = $_POST['text']; 
            $query = "SELECT * FROM books WHERE BOOKID LIKE '$text%'";
             //Execute query 
            $result = mysqli_query($link, $query);
            if($result == FALSE) 
            echo mysql_error() . '<br>'; 
            echo '<h1><center>SEARCH RESULTS</center></h1>';
            ?>
            <center><table> 
            <thead> 
                <tr style="color : white; background-color: black; border: 1px solid black;">
                    <th style="margin-left : 0px;"> COVERPAGE </th>
                    <th style="margin-left : 0px;"> DETAILS </th>
                    <th style="margin-left : 0px;"> PDF </th>
                </tr>
            </thead>
            <?php
            if(mysqli_num_rows($result)==0)
            echo "<center><h2>no results found<h2><center>";
            while($row = mysqli_fetch_assoc($result)){
              $pdf = $row['FILENAME'].'.pdf';
              $pic =$row['FILENAME'].'.jpeg';
              $pdf_path = $row['PATH_pdf'];
              $pic_path = $row['PATH_photo'];
              ?>

               <tr> 
                <td> <center><?php echo '<img src="'.$pic_path.$pic.'" width="50%" height="50%">
            </img>'; ?></center> </td> 
                <td> <center><?php echo '<strong> NAME: </strong>'.$row['BOOKNAME'];
                echo '<strong><br> AUTHOR : </strong>'.$row['AUTHOR'];
                ?></center> </td> 
                <td> <center><button class="button"> <a href="book.php?connection=<?php echo "$pdf_path$pdf"; ?>" style="text-decoration: none; 
  color : white;"> PDF</a></button></center> </td>
            </tr>
        <?php } ?>

            <?php
          }
          elseif ($_POST['ca'] == 'magazines'){
            //validation flag to check that all validations are done 
            $validationFlag = true; 
            $text = $_POST['text']; 
            $query = "SELECT * FROM magazines WHERE MAG_ID LIKE '$text%'";
             //Execute query 
            $result = mysqli_query($link, $query);
            if($result == FALSE) 
            echo mysql_error() . '<br>'; 
            echo '<h1><center>SEARCH RESULTS</center></h1>';
            ?>
            <center><table> 
            <thead> 
                <tr style="color : white; background-color: black; border: 1px solid black;">
                    <th style="margin-left : 0px;"> DETAILS </th>
                    <th style="margin-left : 0px;"> PDF </th>
                </tr>
            </thead>
            <?php
            if(mysqli_num_rows($result)==0)
            echo "no results found";
            while($row = mysqli_fetch_assoc($result)){
                $pdf = $row['FILENAME'].'.pdf';
                $pdf_path = $row['PATH'];
                ?>

               <tr>  
                <td> <center><?php echo '<strong><br> NAME: </strong>'.$row['MAG_NAME'];
                echo '<strong><br> AUTHOR : </strong>'.$row['CATEGORY'];
                ?></center> </td> 
                <td> <center><button class="button"> <a href="book.php?connection=<?php echo "$pdf_path$pdf"; ?>" style="text-decoration: none; 
  color : white;"> PDF</a></button></center> </td>
            </tr>
        <?php } ?>

            <?php
        }
        elseif ($_POST['ca'] == 'articles'){
            //validation flag to check that all validations are done 
            $validationFlag = true; 
            $text = $_POST['text']; 
            $query = "SELECT * FROM articles WHERE ARTICLE_ID LIKE '$text%'";
             //Execute query 
            $result = mysqli_query($link, $query);
            if($result == FALSE) 
            echo mysql_error() . '<br>'; 
            echo '<h1><center>SEARCH RESULTS</center></h1>';
            ?>
            <center><table> 
            <thead> 
                <tr style="color : white; background-color: black; border: 1px solid black;">
                    <th style="margin-left : 0px;"> DETAILS </th>
                    <th style="margin-left : 0px;"> PDF </th>
                </tr>
            </thead>
            <?php
            if(mysqli_num_rows($result)==0)
            echo "no results found";
            while($row = mysqli_fetch_assoc($result)){
                $pdf = $row['FILENAME'].'.pdf';
                $pdf_path = $row['PATH'];
                ?>

               <tr>  
                <td> <center><?php echo '<strong><br> NAME: </strong>'.$row['TOPIC'];
                echo '<strong><br> AUTHOR : </strong>'.$row['WRITTER'];
                ?></center> </td> 
                <td> <center><button class="button"> <a href="book.php?connection=<?php echo "$pdf_path$pdf"; ?>" style="text-decoration: none; 
  color : white;"> PDF</a></button></center> </td>
            </tr>
        <?php } ?>

            <?php
        }
    }

      ?>
  </body>
</html>