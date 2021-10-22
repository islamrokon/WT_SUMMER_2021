<?php include "control/Doctorvalidate.php"; ?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<table>
<h1>Registration form of Doctor</h1>
<form action="" method="post">

<tr><td>Email:
<input type="text" name="email"></td>
</tr>

<tr><td>Password:
<input type="password" name="password"></td></tr>

<tr><td>First Name:
<input type="text" name="fname"> </td>
</tr>


<tr><td>Last Name:
<input type="text" name="lname"></td>
</tr>

<tr><td>Blood Group:
<input type="text" name="bg"></td>
</tr>

<tr> <td>Gender : 
<input type="radio" name="gender" value="Male">Male
<input type="radio" name="gender" value="Female">Female  
<input type="radio" name="gender" value="Other">Other 
</td> </tr>


<tr><td>Date of birth :
<input type="date" name="DateofBirth"></td>
</tr>

<tr>
 <td>Phone:
<select name="code">
	<option value="+91">+97</option>
    <option value="+88">+88</option>
    <option value="+86">+86</option>
  </select> 
 <input type="text" name="phone"></td>
</tr>


<tr><td>Address :</td></tr>
<tr><td><textarea rows="5" cols="30" name="address" > </textarea></td></tr>



<tr>
<td> <input type="submit" name="Submit"> 
</td>
</tr>



</form>
</table>

</body>
</html>