<?php   include "Registration Form.php" ; ?>
<?php   include "control/myaction.php" ; ?>
<?php 
$validateradio="";
$validatecheckbox="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $validatecheckbox="";
    if(isset($_REQUEST["Dancing"]))
    {
        $v1= $_REQUEST["Dancing"];
        $validatecheckbox=$validatecheckbox.$v1;
    }
    if(isset($_REQUEST["Singing"]))
    { 
        $v2= $_REQUEST["Singing"];
        $validatecheckbox=$validatecheckbox.",".$v2;
    }
    if(isset($_REQUEST["Reading"]))
    {
     $v3= $_REQUEST["Reading"];
     $validatecheckbox=$validatecheckbox.",".$v3;
    }


if(isset($_REQUEST["gender"]))
{
    $validateradio= $_REQUEST["gender"];
}



$target_file="File/".$_FILES["fileupload"]["name"];
if(move_uploaded_file($_FILES["fileupload"]["tmp_name"], $target_file)){

    echo "you have uploaded".$_FILES ["fileupload"]["name"];
    echo "<br>" .$_FILES["fileupload"]["type"];
    echo "<img src=".$target_file.">";

}else{
    echo "Please try to upload again!";
}


$formdata = array(
    'Name'=> $_POST["fname"],
    'Email'=> $_POST["email"],
    'Password'=>$_POST["password"],
    'Comment'=> $_POST["comment"],
    'Gender'=>"$validateradio",
    'Hobby'=>"$validatecheckbox",
    "File_Path"=>"$target_file"
 );
 $existingdata = file_get_contents('data.json');
 $tempJSONdata = json_decode($existingdata);
 $tempJSONdata[] =$formdata;
 $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
 if(file_put_contents("data.json", $jsondata)) {
      echo "Data successfully saved <br>";
  }
 else 
      echo "no data saved";

$data = file_get_contents("data.json");
$mydata = json_decode($data);
foreach($mydata as $myobject)
{
foreach($myobject as $key=>$value)
{
  echo "your ".$key." is ".$value."<br>";
} 
echo "<br>";
}
}

?>