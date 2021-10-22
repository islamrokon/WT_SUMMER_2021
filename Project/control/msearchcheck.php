
<?php 
$email="";
//$GLOBALS ['email']=$_POST['email'];
include "../model/hospital.php";
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

        $Searchuser=$connection->Searchuser($conobj,"manager",$email);

        if ($Searchuser->num_rows > 0) {
        
            while($row = $Searchuser->fetch_assoc()) {


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
    else{
        echo "This manager is not exist!";
    }
}
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet"  href="../styles/homepage.css">
<form action="" method="post">
<input type='text' name="email" placeholder="Search manager">
<input name="search" type="submit" value="Search" ></td><tr><br>
<li><a href="../view/adminprofile.php">Back</a><br></li>
</form>
</head>
</html>

    
