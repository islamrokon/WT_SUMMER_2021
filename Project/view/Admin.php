<?php include('../control/Admincheck.php');
if(isset($_SESSION["email"]))
{
    header("location: adminprofile.php"); //file redirect 
}
 
?>
<!DOCTYPE html>
<html>
<head>


<p id="demo"></p>
 
<script>
function Ajax() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML = this.responseText;
    }
	else
	{
		 document.getElementById("demo").innerHTML = this.status;
	}
  };
  xhttp.open("POST", "/control/Admincheck.php", true);
 
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("email='email'&password='password'");
 
}
</script>
<script src="../javascript/logincheck.js"></script>
<link rel=''>
<link rel="stylesheet"  href="../styles/login.css"> 
</head>
<body>
<h2>Login Page</h2><br>    
    <div class="login">
    <form   name="" action="" onsubmit="return validateForm()" method="post">
    <input type="text" id="email" name="email" placeholder="Enter your email" ><p id="erroremail"></p>
    <input type="password" id="password" name="password" placeholder="Enter your password" ><p id="mytext1"></p><br>
    <button type="submit" name="submit" onclick="Ajax()">LOGIN</button>
    <br>
    <li><a href="../view/Homepage.php">Home</a><li>
    <?php echo $error;?>
</form>
    </div>

</body>
</html>

