
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ONLINE LIBRARY</title>
    <link rel="stylesheet" href="mainstyle.css" />
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&display=swap" rel="stylesheet"/>
  </head>
  <body>
    <div class="topnav">
      <a href="main1.php">HOME</a>
      <a href="view_books.php">BOOKS</a>
      <a href="view_magazine.php"></i>MAGAZINES</a>
      <a href="view_articles.php">ARTICLES</a>
      <div>
        <a href="log_out.php" style="float:right; padding-right: 10px;">LOGOUT</a>
      </div>
    </div>
    <section id="home">
      <form name="searchForm" method="post" action="search.php">
        <div class="Search">
        <center id="txt">Find your next experience</center><br>
        <center><input type="text" class="text" name="text" >
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
          <button class="abc" onclick="location.href='view_books.php'">further details</button></form>
        </div>
      </div>
      <br><br>
      <div class="section">
        <div class="content">
          <h2>MAGAZINES</h2><br>
          <p>
          A truly great magazine cover surprises, even shocks, and connects in a nano-second
          </p><br>
          <button class="abc" onclick="location.href='view_magazine.php'">further details</button>
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
          <button class="abc" onclick="location.href='view_articles.php'">further details</button>
        </div>
      </div>
  </body>
</html>