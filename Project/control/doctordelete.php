<?php  

$email="";
if(isset($_REQUEST['delete']))
{
    
        if(empty($_POST['email1']))
        {
           echo "Invalid email";
        }
        else 
        {    
        $email=$_POST["email1"];
        $connection=new hospital();
        $conobj=$connection->OpenCon();
        $Searchmanager=$connection->Searchuser($conobj,"doctor",$email);
        if ($Searchmanager->num_rows > 0) {
         $userQuery=$connection->Deleteuser($conobj,"doctor",$email);
          echo "Doctor deleted";
        }
        else
          {
            echo "This Doctor is not exist!";    
          }

$connection->CloseCon($conobj);
}
}
?>