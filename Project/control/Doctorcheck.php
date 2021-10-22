<?php
include('../model/hospital.php');
session_start(); 

 $error="";
// store session data
if (isset($_POST['submit'])) {
if (empty($_POST['email']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
$email=$_POST['email'];
$password=$_POST['password'];
$connection = new hospital();
$conobj=$connection->OpenCon();

$userQuery=$connection->CheckUser($conobj,"doctor",$email,$password);

if ($userQuery->num_rows > 0) {
$_SESSION["email"] = $email;
$_SESSION["password"] = $password;
   }
 else {
$error = "Email or Password is invalid";
}
$connection->CloseCon($conobj);

}
}


?>