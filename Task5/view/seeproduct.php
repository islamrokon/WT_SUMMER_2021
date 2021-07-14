<?php
session_start(); 
if(empty($_SESSION["username"])) 
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}

?>


<!DOCTYPE html>
<html>
<body>
<h2>Show and Search Product</h2>
<form action="" method="post" enctype="multipart/form-data">
<h5> <a href="showallproduct.php"> Show all Product info</a></h5>
<h5>  <a href="search.php"> Search product</a></h5>

</form>

</body>
</html>