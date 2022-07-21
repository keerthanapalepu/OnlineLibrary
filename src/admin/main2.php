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
    <section id="home">
    <form name="searchForm" method="post" action="search.php">
        <div class="Search">
        <center id="txt">Find your next experience</center><br>
        <center><input type="text" class="text" style="front-size : 11150px" name="text" >
        <select name="ad" id="ad" class="t">
            <option value="name">NAME</option>
            <option value="writter">WRITTER</option>
            <option value="id">ID</option>
        </select>  
        <select name="ca" id="ca" class="t">
            <option value="books">BOOKS</option>
            <option value="magazines">MAGIZENES</option>
            <option value="articles">ARTICLES</option>
        </select>
        <input type="submit" class="b" value="Search"></center>
        </div>
    </form>
    </section>
    <section id="services">
      <h2 class="serv">Our Services</h2><br><br><br>
      <div class="section">
        <div class="img">
          <img src="images.png" alt="" />
        </div>
        <div class="content">
          <h2>BOOK</h2><br>
          <p>
          There is more treasure in books than in all the pirate’s loot on Treasure Island.
          </p><br>
          <button class="abc" onclick="location.href='view_books2.php'">further details</button>
        </div>
      </div>
      <br><br>
      <div class="section">
        <div class="content">
          <h2>MAGAZINES</h2><br>
          <p>
          A truly great magazine cover surprises, even shocks, and connects in a nano-second
          </p><br>
          <button class="abc" onclick="location.href='view_magazine2.php'">further details</button>
        </div>
        <div class="img">
          <img src="FORBES-MAGAZINES.jpg" alt="" />
        </div>
      </div>
      <br><br>
      <div class="section">
        <div class="img">
          <img src="articles.jpg" alt="" />
        </div>
        <div class="content">
          <h2>ARTICLES</h2><br>
          <p>
          <center>good writing is supposed to evoke sensation of the reader-not the fact that it is raining,<br> but the feeling of being rained upon</center>
          </p><br>
          <button class="abc" onclick="location.href='view_articles2.php'">further details</button>
        </div>
      </div>
  </body>
</html>