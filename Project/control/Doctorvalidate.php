<?php
$validatefname="";
$validatelname="";
$validateemail="";
$validatepassword="";
$validateaddress="";
$validateradio="";
$validateradioo="";
$validatebloodgroup="";
$validatedate="";
$v1=$v2=$v3="";
$fname=$lname=$email=$gender="";
$validatephone="";
$phone="";
$address="";
$password=$validatenid=$validatenidimg=$nid="";
$bg="";
$flag=false;

$validatespecialist="";
$validatebmdc="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$fname=$_REQUEST["fname"];
$lname=$_REQUEST["lname"];
$email=$_REQUEST["email"];
$password=$_REQUEST["password"];
$address=$_REQUEST["address"];
$phone=$_REQUEST["phone"];
$bg=$_REQUEST["bg"];
$specialist=$_REQUEST["specialist"];
$bmdc=$_REQUEST["bmdc"];
$nid=$_REQUEST["nid"];

if(empty($_REQUEST["fname"]) || (strlen($_REQUEST["fname"])<3))
{
    $validatefname= "Please enter your valid first name";
    $flag=FALSE;


}
else{
    $flag=TRUE;

}
if(empty($_REQUEST["lname"]) || (strlen($_REQUEST["lname"])<3))
{
    $validatelname= "Please enter your valid last name";
    $flag=FALSE;


}
else {
    $flag=TRUE;
}

if(empty($_REQUEST["specialist"]))
{
    $validatespecialist= "Please enter your Speciality";
    $flag=FALSE;

}
else {
    $flag=TRUE;
}

if(empty($_REQUEST["bmdc"]))
{
    $validatebmdc= "Please enter your BMDC number";
    $flag=FALSE;

}
else {
    $flag=TRUE;
}


$number = preg_match('@[0-9]@', $password);
$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$specialChars = preg_match('@[^\w]@', $password);
if(empty($_REQUEST["password"]) || (strlen($_REQUEST["password"])<8) ||  !$number || !$uppercase || !$lowercase || !$specialChars)
{
    $validatepassword="Please rewrite your password with at least 8 character and must contain at least one number, one upper case letter, one lower case letter and one special character.";
    $flag=FALSE;
}
else{
    $validatepassword="Your password is strong";
    $flag=TRUE;
}


if(empty($_REQUEST["phone"]) || (strlen($_REQUEST["phone"])<11))
{
    $validatephone= "Please enter your valid phone number";
    $flag=FALSE;

}
else {
    $flag=TRUE;
}



if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
{
    $validateemail="Please enter your valid email";
    $flag=FALSE;
}
else {
    $flag=TRUE;
}
if(isset($_REQUEST["gender"]))
{
    $validateradio= $_REQUEST["gender"];
    $flag=TRUE;
}
else{
    $validateradioo= "Please select at least one gender";
    $flag=FALSE;
}


if(empty($_REQUEST["bg"]))
{
    $validatebloodgroup= "Please enter your blood group";
    $flag=FALSE;

}
else {
    $flag=TRUE;
}


if(empty($_REQUEST["DateofBirth"]))
{
    $validatedate= "Please select your birth date";
    $flag=FALSE;
}
else {
    $flag=TRUE;
}


if(empty($_REQUEST["address"]))
{
    $validateaddress = "Address is mandatory";
    $flag=FALSE;
}
else {
    $flag=TRUE;
}


if(empty($_REQUEST["nid"]))
{
    $validatenid= "Please provide your NID";
    $flag=FALSE;

}
else {
    $flag=TRUE;
}

$target_file="../file/".$_FILES["file2"]["name"];
if(move_uploaded_file($_FILES["file2"]["tmp_name"], $target_file)){

    echo "You have uploaded your NID image<br>";
    $flag=TRUE;

}
else{
    echo "Please try to upload again your NID image!<br>";
    $flag=FALSE;
}



$target_file="../file/".$_FILES["file"]["name"];
if(move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)){

    echo "You have uploaded your picture<br>";
    $flag=TRUE;

}
else{
    echo "Please try to upload again!<br>";
    $flag=FALSE;
}

$target_file="../file/".$_FILES["filec"]["name"];
if(move_uploaded_file($_FILES["filec"]["tmp_name"], $target_file)){

    echo "You have uploaded your certificates<br>";
    $flag=TRUE;

}
else{
    echo "Please try to upload again your certificates!<br>";
    $flag=FALSE;
}


}
?>