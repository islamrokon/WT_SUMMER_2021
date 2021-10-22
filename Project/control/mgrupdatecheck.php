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
    $filec="../files/". $_FILES["filec"]["name"];
    
    $userQuery=$connection->Updatemgr($conobj,"manager",$email,$password,$fname,$lname,$bg,$gender,$DateofBirth,$phone,$address,$nid,$file2,$file,$filec);
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