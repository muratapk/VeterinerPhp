<?php
require_once("Ayar/Config.php");
$Id=$_GET['Id'];
$sql="Delete from pets Where pet_id='$Id'";
$sorgu=mysqli_query($conn,$sql);
if($sorgu==true)
{
    echo "Kayıt Silindi";
}
else
{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>