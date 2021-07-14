<?php
include "..\model\db.php";
$connection=new db();
$conobj=$connection->OpenCon();

$showproduct=$connection->ShowAll($conobj,"product");

if ($showproduct->num_rows > 0) {

    while($row = $showproduct->fetch_assoc()) {

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
              echo "<img src='".$pimage."'>"."<br>";

    }
}

?>
<h3><a href="pageone.php">Back</a></h3>