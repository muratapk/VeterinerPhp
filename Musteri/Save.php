<?php
require_once("Ayar/Config.php");
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$address=$_POST['address'];
$sql="insert into owners (name,phone,email,address) values ('$name','$phone','$email','$address')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>