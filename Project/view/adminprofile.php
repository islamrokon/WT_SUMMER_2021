<?php
session_start(); 

//include ('../view/showallmanager.php');
if(empty($_SESSION["email"])) 
{
header("Location: ../view/Admin.php");
}
$cookie_name="user";
$email=$_SESSION["email"];


setcookie($cookie_name, $email,time() + (86400 * 30), "/");
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named is not set!";
  } else {
    echo "Cookie  is set!<br>";
    echo "Cookie name is: " . $_COOKIE[$cookie_name];
  }
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet"  href="../styles/homepage.css">
<form action="" method="post">
  <ul>
<li><tr><td><a href="../process/managerprocess.php">Add Manager</a></td><tr><br></li>
<li><a href="../view/showallmanager.php">Show all manager</a><br></li>
<li><a href="../control/meditsearch.php">Edit manager</a><br></li>
<li><a href="../control/managerdelete.php">Delete manager</a></li>
<li><a href="../control/Adminlogout.php">Logout</a></li>
<br>
</ul>
</form>
</html>
</head>