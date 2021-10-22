<?php
class hospital{
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "hospital";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 function CheckUser($conn,$table,$email,$password)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE email='". $email."' AND password='". $password."'");
 return $result;
 }
 function Deleteuser($conn,$table,$email)
 {
   $result = $conn->query("DELETE FROM ". $table." WHERE email='".$email."'");
    return $result;
 }

 function Searchuser($conn,$table,$email)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE email='". $email."'");
 return $result;
 }

 function Addmanager($conn,$table,$email,$password,$fname,$lname,$bg,$gender,$DateofBirth,$phone,$address,$nid,$file2,$file,$filec)
 {
 $result = $conn->query("INSERT INTO $table VALUES ('$email','$password','$fname','$lname','$bg','$gender','$DateofBirth','$phone','$address','$nid','$file2','$file','$filec')");

return $result;
 }

 function Addpatient($conn,$table,$email,$password,$fname,$lname,$gender,$bg,$DateofBirth,$pressure,$diabetes,$phone,$address,$file)
 {
 $result = $conn->query("INSERT INTO $table VALUES ('$email','$password','$fname','$lname','$gender','$bg','$DateofBirth','$pressure','$diabetes','$phone','$address','$file')");

return $result;
 }

 function Adddoctor($conn,$table,$email,$password,$fname,$lname,$specialist,$bmdc,$bg,$gender,$DateofBirth,$phone,$address,$nid,$file2,$file,$filec)
 {
 $result = $conn->query("INSERT INTO $table VALUES ('$email','$password','$fname','$lname','$specialist','$bmdc','$bg','$gender','$DateofBirth','$phone','$address','$nid','$file2','$file','$filec')");

return $result;
 }
 function ShowAll($conn,$table)
 {
$result = $conn->query("SELECT * FROM $table");
 return $result;
 }

 function Updatemgr($conn,$table,$email,$password,$fname,$lname,$bg,$gender,$DateofBirth,$phone,$address,$nid,$file2,$file,$filec)
 {
     $sql = "UPDATE $table SET password='$password', fname='$fname',lname='$lname',bg='$bg',gender='$gender',DateofBirth='$DateofBirth',phone='$phone',address='$address',nid='$nid',file2='$file2',file='$file',filec='$filec' WHERE email='$email'";

    if ($conn->query($sql) === TRUE) {
        $result= TRUE;
    } else {
        $result= FALSE ;
    }
    return  $result;
 }


 function Updatedoctor($conn,$table,$email,$password,$specialist,$bmdc,$fname,$lname,$bg,$gender,$DateofBirth,$phone,$address,$nid,$file2,$file,$file1)
 {
     $sql = "UPDATE $table SET password='$password', fname='$fname',lname='$lname',specialist='$specialist',bmdc='$bmdc',bg='$bg',gender='$gender',DateofBirth='$DateofBirth',phone='$phone',address='$address',nid='$nid',file2='$file2',file='$file',file1='$1' WHERE email='$email'";

    if ($conn->query($sql) === TRUE) {
        $result= TRUE;
    } else {
        $result= FALSE ;
    }
    return  $result;
 }

 function Updatepatient($conn,$table,$email,$password,$fname,$lname,$pressure,$diabetes,$bg,$gender,$DateofBirth,$phone,$address,$file)
 {
     $sql = "UPDATE $table SET password='$password', fname='$fname',lname='$lname',pressure='$pressure',diabetes='$diabetes',bg='$bg',gender='$gender',DateofBirth='$DateofBirth',phone='$phone',address='$address',file='$file' WHERE email='$email'";

    if ($conn->query($sql) === TRUE) {
        $result= TRUE;
    } else {
        $result= FALSE ;
    }
    return  $result;
 }
function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>