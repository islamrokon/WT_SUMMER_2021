<?php
$validatename="";
$validateemail="";
$validatepassword="";
$validatecomment="";
$validatecheckbox="";
$validateradio="";
$v1=$v2=$v3="";
$name=$email=$gender="";
$comment="";
$password="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$name=$_REQUEST["fname"];
$email=$_REQUEST["email"];
$password=$_REQUEST["password"];
$comment=$_REQUEST["comment"];
if(empty($_REQUEST["fname"]) || (strlen($_REQUEST["fname"])<3))
{
    $validatename= "Please enter your valid name";

}
else
{
    $validatename="Your name is ".$name;
}
$number = preg_match('@[0-9]@', $password);
$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$specialChars = preg_match('@[^\w]@', $password);
if(empty($_REQUEST["password"]) || (strlen($_REQUEST["password"])<8) ||  !$number || !$uppercase || !$lowercase || !$specialChars)
{
    $validatepassword="Please rewrite your password with at least 8 character and must contain at least one number, one upper case letter, one lower case letter and one special character.";
}
else{
    $validatepassword="Your password is strong";
}

if(empty($_REQUEST["comment"]))
{
    $validatecomment = "Please leave a comment";
}
if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
{
    $validateemail="Please enter your valid email";
}
else{
    $validateemail= "your email is ".$email;
}
if(isset($_REQUEST["gender"]))
{
    $validateradio= $_REQUEST["gender"];
}
else{
    $validateradio= "Please select at least one gender";
}
if(!isset($_REQUEST["value1"])&&!isset($_REQUEST["value2"])&&!isset($_REQUEST["value3"]))
{
    $validatecheckbox = "Please select at least one hobby";
    
}
else{
   if(isset($_REQUEST["value1"]))
   {
       $v1= $_REQUEST["value1"];
   }
   if(isset($_REQUEST["value2"]))
   { 
       $v2= $_REQUEST["value2"];
   }
   if(isset($_REQUEST["value3"]))
   {
    $v3= $_REQUEST["value3"];
   }
}


}
?>