<?php
require_once("Ayar/Config.php");
$Id=$_POST['Id'];
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$address=$_POST['address'];
$sql="Update owners set name='$name',phone='$phone',email='$email',address='$address' where owner_id='$Id'";
$sorgu=mysqli_query($conn,$sql);
if($sorgu==true)
{
    echo "Kaydınız Güncellendi";
}
else
{
    echo "Error".$sql."Hata". mysqli_error($conn);
}

?>