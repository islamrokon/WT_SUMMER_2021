<?php
session_start(); 
include "../control/dsearchcheck.php";
if(empty($_SESSION["email"])) 
{
header("Location: ../view/Manager.php");
}
$cookie_name="user";
$email=$_SESSION["email"];

setcookie($cookie_name, $email,time() + (86400 * 30), "/");

?>


<!DOCTYPE html>
<html>
<head>
<body>
<link rel="stylesheet"  href="../styles/homepage.css">
<?php
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named is not set!";
  } else {
    echo "Cookie  is set!<br>";
    echo "Cookie name is: " . $_COOKIE[$cookie_name];
  }
  ?>
  <br>
<!DOCTYPE html>
<html>
<head>
<form action="" method="post">
  <ul>

<li><a href="../process/doctorprocess.php">Add Doctor</a><br></li>

<li><a href="../view/showalldoctor.php">Show all doctor</a><br></li>
<li><a href="../control/deditsearch.php">Edit doctor</a><br></li>
<li><a href="../control/Managerlogout.php">Logout</a></li>
<li><input type='text' name="email" placeholder="Search doctor by email"><br></li>
<li><input type='submit' name="search" value="Search"><br></li>
</ul>
</form>
</html>
</head>