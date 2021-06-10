<?php include "control/myaction.php"; ?>
<!DOCTYPE html>
<html>
<head>
<title>Registration Form </title>
<form action="" method="post">
</head>
<body>
<table>
<h1>Registration Form</h1>
<form>
<tr>
    <td> <label for="fname ">Full Name : </label> </td>
    <td><input type="text" name="fname"><?php echo $validatename; ?></td>
</tr>
<tr>
    <td> <label for="email ">Email : </label> </td>
    <td><input type="text" name="email"><?php echo $validateemail; ?></td>
</tr>
<tr>
    <td> <label for="password ">Password : </label> </td>
    <td><input type="password" name="password"><?php echo $validatepassword; ?></td>
</tr>
<tr>
    <td> <label for="comment ">Comment : </label> </td>
    <td><textarea name="comment" id="" cols="30" rows="5"></textarea><?php echo $validatecomment; ?></td>
</tr>
<tr>
    <td> <label for="Gender ">Gender : </label> </td>
    <td>
    <input type="radio" id="male" name="gender" value="male">
    <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label>
        <input type="radio" id="other" name="gender" value="other">
            <label for="other">Other</label><br>
            <?php echo $validateradio; ?>
    </td>
   
</tr>

<tr>
    <td> <label for="Checkbox ">Please Choose a Hobby : </label> </td>
    <td>
        <input type="checkbox"  name="value1" value="Singing">
        <label for="value1">Singing</label>
        <input type="checkbox" name="value2" value="Dancing">
        <label for="value2">Dancing</label>
        <input type="checkbox"  name="value3" value="Reading">
        <label for="value3"> Reading</label>
        <br>
        <?php echo $validatecheckbox; ?>

        <?php echo $v1;?>

        <?php echo $v2;?>

        <?php echo $v3;?>
        <br>
    </td>
</tr>
<br>
<tr>
    <td> <label for="file ">Please Choose a File : </label> </td>
    <td><input type="file" id="file"></td>
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