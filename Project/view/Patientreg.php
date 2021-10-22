<?php include('../control/Patientvalidate.php');
if(isset($_SESSION["email"]))
{
    header("location: Patientprofile.php"); //file redirect 
} 
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet"  href="../styles/homepage.css">
<script src="../javascript/doctorcheck.js"></script>
</head>
<body>
<form name="" action="" onsubmit="return validateForm()" method="post" enctype="multipart/form-data">
<table>
<tr><td>Email:
<input type="text" id="email" name="email"><?php echo $validateemail; ?><p id="erroremail"></p></td><br>
</tr>

<tr><td>Password:
<input type="password" id="password" name="password"><?php echo $validatepassword; ?><p id="errorpassword"></p></td>
</tr>

<tr><td>First Name:
<input type="text" id="fname" name="fname"><?php echo $validatefname; ?><p id="errorfname"></p></td><br>
</tr>

<tr><td>Last Name:
<input type="text" id="lname" name="lname"><?php echo $validatelname; ?><p id="errorlname"></p></td><br>
</tr>

<tr><td>Gender :
		<td>
		<input type="radio" id="Male" name="gender" value="Male"> Male
		<input type="radio" id="Female" name="gender" value="Female"> Female
		<input type="radio" id="Other" name="gender" value="Other"> Other
    <br>
    <?php echo $validateradioo; ?>
		<p id="errorgender" ></p>
	   </td>
   


<tr><td>Do you have high blood pressure :
		<td>
		<input type="radio" id="Yes" name="pressure" value="Yes"> Yes
		<input type="radio" id="No" name="pressure" value="No"> No
    <br>
    <?php echo $validatepressure; ?>
		<p id="errorpressure" ></p>
	   </td>
   
</tr>

</tr>
<tr><td>Do you have diabetes :
		<td>
		<input type="radio" id="Yes1" name="diabetes" value="Yes1"> Yes
		<input type="radio" id="No1" name="diabetes" value="No1"> No
    <br>
    <?php echo $validatepressure; ?>
		<p id="errordiabetes" ></p>
	   </td>
   
</tr>

<tr><td>Blood group:
<input type="text" id="bg" name="bg"><?php echo $validatebloodgroup; ?><p id="errorbg"></p></td><br>
</tr>



<tr><td>Date of Birth:
<input type="date" id="DateofBirth" name="DateofBirth"><?php echo $validatedate; ?><p id="errordate"></p></td><br>
</tr>


<tr><td>Phone:
<input type="text" id="phone" name="phone"><?php echo $validatephone; ?><p id="errorphone"></p></td><br>
</tr>


<tr><td>Address:
<textarea rows="5" cols="30" id="address" name="address"></textarea><?php echo $validateaddress; ?><p id="erroraddress"></p></td><br>
</tr>



<tr><td>Picture:
<input type="file" id="file" name="file"><p id="errorfile"></p></td><br>
</tr>





<br>
<tr>
<td> <input type="submit" name="submit" value="Sign Up"> 
</td>
</tr><td>
<li><a href="../view/Doctorprofile.php">Back</a></li></td>
</form>
</table>
</body>
</html>