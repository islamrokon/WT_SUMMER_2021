
<?php 
$email="";
//echo "fgrtr";
//$GLOBALS ['email']=$_POST['email'];
include "../model/hospital.php";
include "../control/doctordelete.php";

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

        $Searchuser=$connection->Searchuser($conobj,"doctor",$email);

        if ($Searchuser->num_rows > 0) {
        
            while($row = $Searchuser->fetch_assoc()) {


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
                $file1=$row['file1'];

                if($row["gender"]=="female" )
                    { $radio1="checked"; }
                else if($row["gender"]=="male")
                   { $radio2="checked"; }
                else if($row["gender"]=="other")
                {$radio3="checked";}
                else
                {
                   $radioValidation="Nothing was checked";
                }
            
              echo "Doctor's  Email : ".$email."<br>";
              echo "Doctor's  Password : ".$password."<br>";
              echo "Doctor's first name: ".$fname."<br>";
              echo "Doctor's last name : ".$lname."<br>";
              echo "Specialist in : ".$specialist."<br>";
              echo "Doctor's BMDC number : ".$bmdc."<br>";
              echo "Doctor's blood group : ".$bg."<br>";
              echo "Doctor's  gender : ".$gender."<br>";
              echo "Doctor's  Date of Birth : ".$DateofBirth."<br>";
              echo "Doctor's  phone : ".$phone."<br>";
              echo "Doctor's  address : ".$address."<br>";
              echo "Doctor's  NID number : ".$nid."<br>";

              echo"<img src='".$file2."'><br>";
              echo "<img src='".$file."'><br>";
              echo "<img src='".$file1."'><br>";
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
<input type='text' name="email1" placeholder="Delete Doctor by email">
<input name="delete" type="submit" value="Delete Doctor" ></td><tr><br>
</form>
</head>
</html>

    
