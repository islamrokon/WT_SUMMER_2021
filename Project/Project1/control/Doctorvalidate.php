<?php
$validatefname="";
$validatelname="";
$validateemail="";
$validatepassword="";
$validateaddress="";
$validateradio="";
$validatebloodgroup="";
$validate="";
$v1=$v2=$v3="";
$fname=$lname=$email=$gender="";
$address="";
$password="";
$bg="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$fname=$_REQUEST["fname"];
$lname=$_REQUEST["lname"];
$email=$_REQUEST["email"];
$password=$_REQUEST["password"];
$address=$_REQUEST["address"];
$bg=$_REQUEST["bg"];
if(empty($_REQUEST["fname"]) || (strlen($_REQUEST["fname"])<3))
{
    $validatefname= "Please enter your valid first name";

}
else
{
    $validatefname="Your name is ".$fname;
}
if(empty($_REQUEST["lname"]) || (strlen($_REQUEST["lname"])<3))
{
    $validatelname= "Please enter your valid last name";

}
else
{
    $validatelname="Your name is ".$lname;
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


if(empty($_REQUEST["phone"]) || (strlen($_REQUEST["phone"])<12))
{
    $validatefname= "Please enter your valid phoen number";

}
else
{
    $validatefname="Your phone number is ".$fname;
}



if(empty($_REQUEST["address"]))
{
    $validateaddress = "Address is mandatory";
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


if(empty($_REQUEST["bg"]))
{
    $validatefname= "Please enter your blood group";

}
else
{
    $validatefname="Your blood group ".$bg;
}

if(isset($_REQUEST["DateofBirth"]))
{
    $validate= $_REQUEST["DateofBirth"];
}
else{
    $validate= "Please select your birth date";
}
}
?>