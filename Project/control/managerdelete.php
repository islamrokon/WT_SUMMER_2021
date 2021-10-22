<?php  
include "../model/hospital.php";
$email="";
session_start(); 
if(empty($_SESSION["email"])) 
{
header("Location: ../view/Admin.php");
}
if(isset($_REQUEST['delete']))
{
    
        if(empty($_POST['email1']))
        {
           echo "Invalid email";
        }
        else 
        {    
        $email=$_POST["email1"];
        $connection=new hospital();
        $conobj=$connection->OpenCon();
        $Searchmanager=$connection->Searchuser($conobj,"manager",$email);
        if ($Searchmanager->num_rows > 0) {
         $userQuery=$connection->Deleteuser($conobj,"manager",$email);
          echo "Manager deleted";
        }
        else
          {
            echo "This manager is not exist!";    
          }

$connection->CloseCon($conobj);
}
}
?>
<html>
<head>
<link rel="stylesheet"  href="../styles/homepage.css">
<form action="" method="post">
<input type='text' name="email1" placeholder="Delete manager by email">
<input name="delete" type="submit" value="Delete Manager" ></td><tr>
<br>
<li><a href="../view/Adminprofile.php">Back</a><li>
<br>
</form>
</head>
</html>