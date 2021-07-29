<!DOCTYPE html>
<html>
<head>
<script src="js/validation.js"></script>
<title>Registration Form </title>
<form action="" onsubmit="return validateForm()" method="post">
</head>
<body>
<table>
<h1>Registration Form</h1>
<form>
<tr>
    <td> <label for="fname ">Full Name : </label> </td>
    <td><input type="text" id="fname" name="fname"><br><p id="errorfname"></p></td>
</tr>
<tr>
    <td> <label for="email ">Email : </label> </td>
    <td><input type="text" id="email" name="email"><br><p id="errormail"></p></td>
</tr>
<tr>
    <td> <label for="password ">Password : </label> </td>
    <td><input type="password" id="password" name="password"><br><p id="errorpassword"></p></td>
</tr>
<tr>
    <td> <label for="comment ">Comment : </label> </td>
    <td><textarea name="comment" id="comment" ></textarea><br><p id="errorcomment"></p></td>
</tr>
<tr>
<td>Gender :</td>
		<td>
		<input type="radio" id="male" name="gender" value="Male"> Male
		<input type="radio" id="female" name="gender" value="Female"> Female
		<input type="radio" id="other" name="gender" value="Other"> Other
		<p id="errorgender" ></p>
	   </td>
   
</tr>

<tr>
    <td> <label for="Checkbox ">Please Choose a Hobby : </label> </td>
    <td>
    <input type="checkbox" id="value1" name= "value1" value="Singing"> Singing
	<input type="checkbox" id="value2" name= "value2" value="Dancing"> Dancing
	<input type="checkbox" id="value3" name= "value3" value="Reading"> Reading
        <p id="errorchkbox" ></p>
    </td>
</tr>
<br>
<tr>
    <td> <label for="file ">Please Choose a File : </label> </td>
    <td><input type="file" id="file" name="file"><p id="errorfile" ></p></td>
</tr>
<tr>
    <td> <input type="submit" name="Submit"> 
    <input type="reset" name="Reset">
    </td>
</tr>
</form>
</table>
</body>
</html>