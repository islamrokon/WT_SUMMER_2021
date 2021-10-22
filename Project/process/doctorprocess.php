<?php include('../view/Doctorreg.php');
include('../model/hospital.php');

//$validateradio="";
$GLOBALS ['flag'];
if (isset($_POST['submit'])) {


if(isset($_REQUEST["gender"]))
{
    $gender=$_REQUEST["gender"];
}

$email=$_POST['email'];
$password=$_POST['password'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$specialist=$_POST['specialist'];
$bmdc=$_POST['bmdc'];
$bg=$_POST['bg'];
$DateofBirth=$_POST['DateofBirth'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$nid=$_POST['nid'];
//$flag=$_POST['flag'];


if($flag==TRUE){
$connection = new hospital();
$conobj=$connection->OpenCon();
$file2="../files/". $_FILES["file2"]["name"];
$file="../files/". $_FILES["file"]["name"];
$filec="../files/". $_FILES["filec"]["name"];

$userQuery=$connection->Adddoctor($conobj,"doctor",$email,$password,$fname,$lname,$specialist,$bmdc,$bg,$gender,$DateofBirth,$phone,$address,$nid,$file2,$file,$filec);
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


/*$target_file="file/".$_FILES["file"]["name"];

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
 $existingdata = file_get_contents("Managerfile.json");
 $tempJSONdata = json_decode($existingdata);
 $tempJSONdata[] =$formdata;
 $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
 if(file_put_contents("Managerfile.json", $jsondata)) {
      echo "Data successfully saved <br>";
  }
 else 
      echo "no data saved";
}*/




?>