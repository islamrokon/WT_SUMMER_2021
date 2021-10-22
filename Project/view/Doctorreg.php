<?php include('../control/Doctorvalidate.php');
 
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet"  href="../styles/homepage.css">
<script src="../javascript/doctorcheck.js"></script>
</head>
<body>
	<div>
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

<tr><td>Specialist:
<input type="text" id="specialist" name="specialist"><?php echo $validatespecialist; ?><p id="errorspecialist"></p></td><br>
</tr>

<tr><td>BMDC number:
<input type="text" id="bmdc" name="bmdc"><?php echo $validatebmdc; ?><p id="errorbmdc"></p></td><br>
</tr>

<tr><td>Blood group:
<input type="text" id="bg" name="bg"><?php echo $validatebloodgroup; ?><p id="errorbg"></p></td><br>
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

<tr><td><h4>Please upload your NID information:</h4><br>

<tr><td>NID:
<input type="text" id="nid" name="nid"><?php echo $validatenid; ?><p id="errornid"></p></td><br>
</tr>

<tr><td>NID image:
<input type="file" id="file" name="file2"><p id="errorfile"></p></td><br>
</tr>

<tr><td>Picture:
<input type="file" id="file1" name="file"><p id="errorfile1"></p></td><br>
</tr>

<tr><td>Certificate:
<input type="file" id="file2" name="filec"><p id="errorfile2"></p></td><br>
</tr>





<br>
<tr>
<td> <input type="submit" name="submit" value="REGISTER"> 
</td>
</tr>
<li><tr><td><a href="../view/Managerprofile.php">Back</a></td><tr></li>
</form>
</div>
</table>
</body>
</html>