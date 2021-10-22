<?php
session_start(); 
if(empty($_SESSION["email"])) 
{
header("Location: ../view/Admin.php");
}
include "../model/hospital.php";
        $connection=new hospital();
        $conobj=$connection->OpenCon();

        $showall=$connection->ShowAll($conobj,"manager");

        if ($showall->num_rows > 0) {
        
            while($row = $showall->fetch_assoc()) {


                $email=$row["email"];
                $fname=$row["fname"];
                $password=$row["password"];
                $lname=$row["lname"];
                $bg=$row["bg"];
                $gender=$row["gender"];
                $DateofBirth=$row['DateofBirth'];
                $phone=$row['phone'];
                $address=$row['address'];
                $nid=$row['nid'];
                $file2=$row['file2'];
                $file=$row['file'];
                $filec=$row['filec'];

            
              echo "Manager's  Email : ".$email."<br>";
              echo "Manager's  Password : ".$password."<br>";
              echo "Manager's first name: ".$fname."<br>";
              echo "Manager's last name : ".$lname."<br>";
              echo "Manager's blood group : ".$bg."<br>";
              echo "Manager's  gender : ".$gender."<br>";
              echo "Manager's  Date of Birth : ".$DateofBirth."<br>";
              echo "Manager's  phone : ".$phone."<br>";
              echo "Manager's  address : ".$address."<br>";
              echo "Manager's  NID number : ".$nid."<br>";

              echo"<img src='".$file2."'><br>";
              echo "<img src='".$file."'><br>";
              echo "<img src='".$filec."'><br>";
           }
    }

    ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet"  href="../styles/homepage.css">

<li><a href="../control/msearchcheck.php">Search manager</a></li>
<li><a href="../view/adminprofile.php">Back</a><br></li>
</html>
<h/ead>