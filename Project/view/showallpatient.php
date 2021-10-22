<?php
include "../model/hospital.php";
        $connection=new hospital();
        $conobj=$connection->OpenCon();

        $showall=$connection->ShowAll($conobj,"patient");

        if ($showall->num_rows > 0) {
        
            while($row = $showall->fetch_assoc()) {


                $email=$row["email"];
                $fname=$row["fname"];
                $password=$row["password"];
                $lname=$row["lname"];
                $bg=$row["bg"];
                $pressure=$row["pressure"];
                $gender=$row["gender"];
                $DateofBirth=$row['DateofBirth'];
                $phone=$row['phone'];
                $diabetes=$row["diabetes"];
                $address=$row['address'];
                $file=$row["file"];

            
              echo "Patient's  Email : ".$email."<br>";
              echo "Patient's  Password : ".$password."<br>";
              echo "Patient's first name: ".$fname."<br>";
              echo "Patient's last name : ".$lname."<br>";
              echo "Patient's blood pressure : ".$pressure."<br>";
              echo "Patient's diabetes : ".$diabetes."<br>";
              echo "Patient's blood group : ".$bg."<br>";
              echo "Patient's  gender : ".$gender."<br>";
              echo "Patient's  Date of Birth : ".$DateofBirth."<br>";
              echo "Patient's  phone : ".$phone."<br>";
              echo "Patient's  address : ".$address."<br>";
              echo "<img src='".$file."'><br>";

           }
    }

    ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet"  href="../styles/homepage.css">
<li><a href="../view/Doctorprofile.php">Back</a></li>
</html>
<h/ead>