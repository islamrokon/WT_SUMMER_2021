
<?php 
$email="";
//echo "fgrtr";
//$GLOBALS ['email']=$_POST['email'];
include "../model/hospital.php";
include "../control/patientdelete.php";

$radio1=$radio2=$radio3="";

if(isset($_REQUEST['search']))
{
    if(empty($_POST['email']))
    {
        echo "Invalid email!";
    }
    else 
    {
        $email=$_POST['email'];
        $connection=new hospital();
        $conobj=$connection->OpenCon();

        $Searchuser=$connection->Searchuser($conobj,"patient",$email);

        if ($Searchuser->num_rows > 0) {
        
            while($row = $Searchuser->fetch_assoc()) {


                $email=$row["email"];
                $password=$row["password"];
                $fname=$row["fname"];
                $lname=$row["lname"];
                $gender=$row["gender"];
                $bg=$row["bg"];
                $DateofBirth=$row['DateofBirth'];
                $pressure=$row["pressure"];
                $diabetes=$row["diabetes"];
                $phone=$row['phone'];
                $address=$row['address'];
                $file=$row['file'];
               /* if($row["gender"]=="female")
                    { $radio1="checked"; }
                else if($row["gender"]=="male")
                   { $radio2="checked"; }
                else if($row["gender"]=="other")
                {$radio3="checked";}

                if($row["pressure"]=="Yes")
                    { $pradio1="checked"; }
                else if($row["gender"]=="No")
                   { $pradio2="checked"; }

                   if($row["diabetes"]=="Yes")
                   { $dradio1="checked"; }
               else if($row["diabetes"]=="No")
                  { $dradio2="checked"; }*/
            
              echo "Patient's  Email : ".$email."<br>";
              echo "Patient's  Password : ".$password."<br>";
              echo "Patient's first name: ".$fname."<br>";
              echo "Patient's last name : ".$lname."<br>";
              echo "Patient's pressure : ".$pressure."<br>";
              echo "Patient's diabetes : ".$diabetes."<br>";
              echo "Patient's blood group : ".$bg."<br>";
              echo "Patient's  gender : ".$gender."<br>";
              echo "Patient's  Date of Birth : ".$DateofBirth."<br>";
              echo "Patient's  phone : ".$phone."<br>";
              echo "Patient's  address : ".$address."<br>";

              echo "<img src='".$file."'><br>";
             }
    }
    else{
        echo "This Doctor is not exist!";
    }
}
}
?>
<!DOCTYPE html>
<html>
<head>
<form action="" method="post">
<input type='text' name="email1" placeholder="Delete patient by email">
<input name="delete" type="submit" value="Delete patient" ></td><tr><br>
</form>
</head>
</html>

    
