<?php
include "../model/hospital.php";
        $connection=new hospital();
        $conobj=$connection->OpenCon();

        $showall=$connection->ShowAll($conobj,"doctor");

        if ($showall->num_rows > 0) {
        
            while($row = $showall->fetch_assoc()) {


                $email=$row["email"];
                $fname=$row["fname"];
                $password=$row["password"];
                $lname=$row["lname"];
                $specialist=$row["specialist"];
                $bmdc=$row["bmdc"];
                $bg=$row["bg"];
                $gender=$row["gender"];
                $DateofBirth=$row['DateofBirth'];
                $phone=$row['phone'];
                $address=$row['address'];
                $nid=$row['nid'];
                $file2=$row['file2'];
                $file=$row['file'];
                $filec=$row['file1'];

            
              echo "Doctor's  Email : ".$email."<br>";
              echo "Doctor's  Password : ".$password."<br>";
              echo "Doctor's first name: ".$fname."<br>";
              echo "Doctor's last name : ".$lname."<br>";
              echo "Sepecialist in : ".$specialist."<br>";
              echo "Doctor's BMDC number : ".$bmdc."<br>";
              echo "Doctor's blood group : ".$bg."<br>";
              echo "Doctor's  gender : ".$gender."<br>";
              echo "Doctor's  Date of Birth : ".$DateofBirth."<br>";
              echo "Doctor's  phone : ".$phone."<br>";
              echo "Doctor's  address : ".$address."<br>";
              echo "Doctor's  NID number : ".$nid."<br>";

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
<li><a href="../view/Managerprofile.php">Back</a><br></li>
</html>
<h/ead>