<?php
require_once("Ayar/Config.php");
    $pet_id = $_POST['pet_id'] ?? null;
    $owner_id = $_POST['owner_id'] ?? null;
    $name = $_POST['name'] ?? null;
    $species = $_POST['species'] ?? null;
    $breed = $_POST['breed'] ?? null;
    $gender = $_POST['gender'] ?? null;
    $birth_date = $_POST['birth_date'] ?? null;
    $microchip_number = $_POST['microchip_number'] ?? null;

$sql="Update pets set owner_id='$owner_id', name='$name',species='$species',breed='$breed',gender='$gender',birth_date='$birth_date', microchip_number='$microchip_number' where pet_id='$pet_id'";
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