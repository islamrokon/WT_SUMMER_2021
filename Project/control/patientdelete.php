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
        $Searchmanager=$connection->Searchuser($conobj,"patient",$email);
        if ($Searchmanager->num_rows > 0) {
         $userQuery=$connection->Deleteuser($conobj,"patient",$email);
          echo "Patient deleted";
        }
        else
          {
            echo "This Patient is not exist!";    
          }

$connection->CloseCon($conobj);
}
}
?>