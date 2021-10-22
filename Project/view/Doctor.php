<?php include('../control/Doctorcheck.php');
if(isset($_SESSION["email"]))
{
    header("location: Doctorprofile.php"); //file redirect 
}
echo $error; 
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
   xhttp.open("POST", "/control/Doctorcheck.php", true);
  
   xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
   xhttp.send("email='email'&password='password'");
  
 }
 </script>
<script src="../javascript/logincheck.js"></script>
<link rel="stylesheet" type="text/css" href="../styles/login.css"> 
</head>
<body>
<h2>Login Page</h2><br>    
    <div class="login">


  

<form name="" action="" onsubmit="return validateForm()" method="post">
    <input type="text" id="email" name="email" placeholder="Enter your email" ><p id="erroremail"></p>
    <input type="password" id="password" name="password" placeholder="Enter your password" ><p id="errorpassword"></p><br>
    <button type="submit" name="submit" onclick="Ajax()">LOGIN</button>
    <li><tr><td><a href="../view/Homepage.php">Home</a></td><tr></li>
</div>
</form>
</body>
</html>