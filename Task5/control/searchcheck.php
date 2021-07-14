<?php 
include "..\model\db.php";
$connection=new db();
$error="";
if(isset($_REQUEST['search']))
{
    if(empty($_POST['pname']))
    {
        $error="Invalid product name.";
    }
    else 
    {
        $pname=$_POST['pname'];
        $conobj=$connection->OpenCon();

        $SearchProduct=$connection->Searchproduct($conobj,"product",$pname);

        if ($SearchProduct->num_rows > 0) {
        
            while($row = $SearchProduct->fetch_assoc()) {


                $pid=$row["P_id"];
                $pname=$row["P_Name"];
                $pcate=$row["P_Category"];
                $pdesc=$row["P_Desc"];
                $pprice=$row["P_Price"];
                $pimage=$row['P_Picture'];
            
              echo "Product id : ".$pid."<br>";
              echo "Product Name : ".$pname."<br>";
              echo "Product Description : ".$pcate."<br>";
              echo "Product Category : ".$pdesc."<br>";
              echo "Product price : ".$pprice."<br>";
              echo "<img src='".$pimage."'>";



        
            }
    }
}
}






?>