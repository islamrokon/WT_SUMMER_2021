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

    $connection = new hospital();
    $conobj=$connection->OpenCon();
    $file2="../files/". $_FILES["file2"]["name"];
    $file="../files/". $_FILES["file"]["name"];
    $file1="../files/". $_FILES["file1"]["name"];
    
    $userQuery=$connection->Updatedoctor($conobj,"doctor",$email,$password,$fname,$lname,$specialist,$bmdc,$bg,$gender,$DateofBirth,$phone,$address,$nid,$file2,$file,$file1);
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