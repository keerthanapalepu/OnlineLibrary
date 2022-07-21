<?php
$id= $_GET['id'];
$link = mysqli_connect('localhost', 'root', '', 'librarydb'); 
if(!$link){ 
die('Failed to connect to server'); 
}
$query="DELETE FROM articles WHERE ARTICLE_ID='$id'";
$results=mysqli_query($link,$query); 
if($results == FALSE) 
echo mysql_error() . '<br>'; 
else 
header('location:delete_article.php');
?>