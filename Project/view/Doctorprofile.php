<?php
session_start(); 
include ('../control/psearchcheck.php');
if(empty($_SESSION["email"])) 
{
header("Location: ../view/Doctor.php");
}

$cookie_name="user";
$email=$_SESSION["email"];

setcookie($cookie_name, $email,time() + (86400 * 30), "/");

?>


<!DOCTYPE html>
<html>
<head>
<body>
<?php
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
  <br>

<li><a href="../view/showallpatient.php">Show all patient</a><br></li>
<li><a href="../control/peditsearch.php">Edit patient</a><br></li>
<li><a href="../process/patientprocess.php">Add Patient</a><br></li>
<li><input type='text' name="email" placeholder="Search patient by email"></li>
<li><input type='submit' name="search" value="Search"><br></li>
<li><a href="../control/Doctorlogout.php">Logout</a>
</ul>
</form>
</html>
</head>