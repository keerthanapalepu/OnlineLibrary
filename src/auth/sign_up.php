<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="lstyle.css">
    <title>Sign up</title>
</head>
<body>
    <?php
if ($_POST['submit'] == 'Sign-Up'){
//validation flag to check that all validations are done 
$validationFlag = true; 
//Check all the required fields are filled 
if(!($_POST['username']))
{ 
echo 'All the fields marked as * are compulsary.<br>'; 
$validationFlag = false; 
} 

else{ 
$username = $_POST['username']; 
$user_password = $_POST['password'];  
}


//If all validations are correct, connect to MySQL and execute the query 
if($validationFlag){ 
//Connect to mysql server 
$link = mysqli_connect('localhost', 'root', '', 'librarydb'); 
//Check link to the mysql server 
if(!$link){ 
die('Failed to connect to server'); 
} 
//Create Insert query 
$query = "INSERT INTO user_database (username,user_password) VALUES ('$username','$user_password')"; 
//Execute query 
$results = mysqli_query($link, $query); 
 
//Check if query executes successfully 
if($results == FALSE) 
echo mysql_error() . '<br>'; 
else 
echo 'signed up  successfully! Login with the credentials you have provided'; 
echo "<form action='login_form.php' method='get'><button type='submit' id='done'>Done</button></form>" ;
} 
}
?>
</body>