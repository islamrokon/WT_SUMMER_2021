<?php  include('../view/Patientreg.php');
include('../model/hospital.php');

//$validateradio="";
//$GLOBALS ['flag'];
$diabetes="";
$pressure="";
$gender="";
if (isset($_POST['submit'])) {

if(isset($_REQUEST["gender"]))
{
    $gender=$_REQUEST["gender"];
}
if(isset($_REQUEST["pressure"]))
{
    $pressure=$_REQUEST["pressure"];
}
if(isset($_REQUEST["diabetes"]))
{
    $diabetes=$_REQUEST["diabetes"];
}
$email=$_POST["email"];
$fname=$_POST["fname"];
$password=$_POST["password"];
$lname=$_POST["lname"];
$bg=$_POST["bg"];
$DateofBirth=$_POST['DateofBirth'];
$phone=$_POST['phone'];
$address=$_POST['address'];


if($flag==TRUE){
$connection = new hospital();
$conobj=$connection->OpenCon();
$file="../files/". $_FILES["file"]["name"];

$userQuery=$connection->Addpatient($conobj,"patient",$email,$password,$fname,$lname,$gender,$bg,$DateofBirth,$pressure,$diabetes,$phone,$address,$file);
if($userQuery==TRUE)
{
   
   echo "data uploaded.";
}
else
{
    echo "could not update";    
}
$connection->CloseCon($conobj);

}

else {
    echo "Please provide your all valid information";
}
}



















/*$validateradio="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{

if(isset($_REQUEST["gender"]))
{
    $validateradio= $_REQUEST["gender"];
}



$target_file="file/".$_FILES["file"]["name"];


$formdata = array(
    'Email'=> $_POST["email"],
    'Password'=>$_POST["password"],
    'First Name'=> $_POST["fname"],
    'Last Name'=> $_POST["lname"],
    'Phone'=> $_POST["phone"],
    'Date of Birth'=> $_POST["DateofBirth"],
    'Gender'=>"$validateradio",
    'Address'=> $_POST["address"],
    'File_Path'=>"$target_file"
 );
 if(empty($_POST["email"]) ||empty($_POST["password"]) || empty($_POST["fname"]) || empty($_POST["lname"]) || empty($_POST["phone"]) || empty($_POST["DateofBirth"])  || empty($_POST["address"]) || $target_file=="file/" || $validateradio="")
    echo "Please provide your all information!!";
else{
 $existingdata = file_get_contents("Patientfile.json");
 $tempJSONdata = json_decode($existingdata);
 $tempJSONdata[] =$formdata;
 $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
 if(file_put_contents("Patientfile.json", $jsondata)) {
      echo "Data successfully saved <br>";
  }
 else 
      echo "no data saved";
}

}*/


?>