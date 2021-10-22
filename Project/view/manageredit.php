<!DOCTYPE html>
<html>
<head>
</head>
<body>
<table>
<form action="" method="post" enctype="multipart/form-data">

<?php 
//include ('../control/msearchcheck.php');
include "../model/hospital.php";
include "../control/mgrupdatecheck.php";
session_start(); 
$radio1=$radio2=$radio3="";
$email="";
$fname="";
$password="";
$lname="";
$bg="";
$gender="";
$DateofBirth="";
$phone="";
$address="";
$nid="";
$file2="";
$file="";
$filec="";
if(isset($_REQUEST['edit']))
{
$connection=new hospital();

       $email=$_POST["email2"];    
        $conobj=$connection->OpenCon();

        $Searchuser=$connection->Searchuser($conobj,"manager",$email);

        if ($Searchuser->num_rows > 0) {
        
            while($row = $Searchuser->fetch_assoc()) {


                $email=$row["email"];
                $fname=$row["fname"];
                $password=$row["password"];
                $lname=$row["lname"];
                $bg=$row["bg"];
                if($row["gender"]=="Male" )
                { $radio1="checked"; }
            else if($row["gender"]=="Female")
               { $radio2="checked"; }
            else if($row["gender"]=="Other")
            {$radio3="checked";}
//$gender=$row["gender"];
                $DateofBirth=$row['DateofBirth'];
                $phone=$row['phone'];
                $address=$row['address'];
                $nid=$row['nid'];
                $file2=$row['file2'];
                $file=$row['file'];
                $filec=$row['filec'];

               
            }
    }
  }

?>

<h1>Registration form of Manager</h1>
<tr><td>Email:
<input type="text" name="email" value="<?php echo $email; ?>"></td>
</tr>

<tr><td>Password:
<input type="password" name="password" value="<?php echo $password; ?>"></td>
</tr>

<tr><td>First Name:
<input type="text" name="fname" value="<?php echo $fname; ?>"></td>
</tr>


<tr><td>Last Name:
<input type="text" name="lname" value="<?php echo $lname; ?>"></td>
</tr>

<tr><td>Blood Group:
<input type="text" name="bg" value="<?php echo $bg; ?>"></td>
</tr>

<tr> <td>Gender : 
<input type="radio" name="gender" value="Male"<?php echo $radio1; ?>>Male
<input type="radio" name="gender" value="Female"<?php echo $radio2; ?>>Female
<input type="radio" name="gender" value="Other"<?php echo $radio3; ?>>Other
<br>

</td> </tr>

<tr><td>Date of birth :
<input type="date" name="DateofBirth" value="<?php echo $DateofBirth; ?>"></td></tr>


<tr>
 <td>Phone:
<select name="code">
	<option value="+91">+97</option>
    <option value="+88">+88</option>
    <option value="+86">+86</option>
  </select> 
 <input type="text" name="phone" value="<?php echo $phone; ?>"></td>
</tr>


<tr><td>Address :</td></tr>
<tr><td><textarea rows="5" cols="30" name="address" ><?php echo $address; ?></textarea></td></tr>

<tr><td><h4>Please upload your NID information:</h4><br>
NID number:<input type="text" name="nid" value="<?php echo $nid; ?>"> NID image file:<input type="file" name="file2" value="<?php echo $file2; ?>"><br>
</td>
</tr>


<tr><td>Please upload your picture: <input type ="file" name="file" value="<?php echo $file; ?>"></td></tr>
<tr><td>Please upload your Bachelor certificate: <input type ="file" name="filec" value="<?php echo $filec; ?>"></td></tr>

<tr>
<td> <input type="submit" name="update" value="Update"> 
</td>
</tr>
<br>



</form>
</table>
</body>
</html>
