<?php
 $error="";
 $email="";
 //include('../control/Managervalidate.php');
if (isset($_POST['update'])) {
    if(empty($_POST['email'])){
        echo "Enter valid email!";
    }else{
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
    
    $email=$_POST['email'];
    $password=$_POST['password'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $bg=$_POST['bg'];
    $DateofBirth=$_POST['DateofBirth'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    //$flag=$_POST['flag'];

    $connection = new hospital();
    $conobj=$connection->OpenCon();

    $file="../files/". $_FILES["file"]["name"];
    
    $userQuery=$connection->Updatepatient($conobj,"patient",$email,$password,$fname,$lname,$pressure,$diabetes,$bg,$gender,$DateofBirth,$phone,$address,$file);
    if($userQuery==TRUE)
    {
       
       echo "data updates successfully.";
    }
    else
    {
        echo "could not update";    
    }
    $connection->CloseCon($conobj);
    
    }

    }


?>