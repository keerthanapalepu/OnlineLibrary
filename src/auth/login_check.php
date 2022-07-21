<?php 
if($_POST['SUBMIT'] == 'Sign up'){
    header("Location: SIGN_IN.html");
}
elseif ($_POST['SUBMIT'])
{ 
$userid = $_POST['username']; 
$userpass = $_POST['password']; 
if($userid && $userpass){ 
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname ="librarydb";
            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 
            $sql = "SELECT * FROM admin_database WHERE admin_name='$userid' AND admin_password='$userpass'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                session_start(); 
                $_SESSION['IS_AUTHENTICATED'] = 1; 
                $_SESSION["admin_name"] = $userid;
                header("Location: main2.php");
                }
            else{
                $sql = "SELECT * FROM user_database WHERE username='$userid' AND user_password='$userpass'";
                $result = $conn->query($sql);
    
                if ($result->num_rows > 0) {
                    session_start(); 
                    $_SESSION['IS_AUTHENTICATED'] = 1; 
                    $_SESSION["username"] = $userid;
                    header("Location: main1.php");
                    
                }else {
                    echo "<div class='container-fluid'><div class='row align-items-center h-100' ><div class='col-3 mx-auto'><div class='mt-4' id='card'><p>Invalid Id or Password!!!</p><p>Try again with valid Id and Password</p><form action='login_form.php' method='get'><button class='btn login-btn' type='submit' id='done'>Done</button></form></div></div></div></div>";
                }
                }
    }
}
?>