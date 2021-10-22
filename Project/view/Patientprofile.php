<?php
session_start(); 

if(empty($_SESSION["email"])) 
{
header("Location: ../view/Patient.php");
}
$cookie_name="user";
$email=$_SESSION["email"];

setcookie($cookie_name, $email,time() + (86400 * 30), "/");

?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet"  href="../styles/homepage.css">
<body>
<?php
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named is not set!";
  } else {
    echo "Cookie  is set!<br>";
    echo "Cookie name is: " . $_COOKIE[$cookie_name];
  }
  ?>
  
<style>
h1 {text-align: center;}
</style>
<h1>Welcome to Patient Profile</h1> 
<li><a href="../control/Patientlogout.php">Logout</a></li>

</body>
</head>
</html>