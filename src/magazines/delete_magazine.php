<?php 
session_start(); 
if(!(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1)){  
header('location:login_form.php'); 
exit(); 
} 
?> 
<?php 
        $link=mysqli_connect('localhost','root','','librarydb');
        if(!$link){ 
            die('Failed to connect to server'); 
        }   
        $query="SELECT * FROM magazines";
        $results=$link->query($query);
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
    <div class="topnav">
      <a href="main2.php">HOME</a>
      <a href="view_books2.php">BOOKS</a>
      <a href="view_magazine2.php"></i>MAGAZINES</a>
      <a href="view_articles2.php">ARTICLES</a>
      <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">ADD</a>
    <div class="dropdown-content">
      <a href="add_book.php">ADD BOOK</a>
      <a href="add_magazine.php">ADD MAGAZINE</a>
      <a href="add_article.php">ADD ARTICLE</a>
      <a href="add_admin.php">ADD ADMIN</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">DELETE</a>
    <div class="dropdown-content">
      <a href="delete_book.php">DELETE BOOK</a>
      <a href="delete_magazine.php">DELETE MAGAZINE</a>
      <a href="delete_article.php">DELETE ARTICLE</a>
    </div>
  </li>
      <div>
        <a href="log_out.php" style="float:right; padding-right: 10px;">LOGOUT</a>
      </div>
    </div>
        <center><table> 
            <thead> 
                <tr style="color : white; background-color: black;  border: 1px solid black;">
                    <th> MAG ID </th>
                    <th> MAG NAME </th>
                    <th> CATEGORY </th>
                    <th> ACTION </th>
                </tr>
            </thead>
        <?php
        while($row=$results->fetch_assoc())
        { ?>
            <tr style="text-aligment : center ;"> 
                <td> <center><?php echo $row["MAG_ID"]; ?></center> </td> 
                <td> <center><?php echo $row["MAG_NAME"]; ?></center> </td> 
                <td> <center><?php echo $row["CATEGORY"]; ?></center> </td> 
                <td> <center><button class="button"> <a href="del_magazine.php?id=<?php echo $row["MAG_ID"]; ?>" style="text-decoration: none; 
  color : white;"> DELETE</a></button></center> </td>
            </tr>
        <?php } ?>
        </table></center>
        </body>
</html>