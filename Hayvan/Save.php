<?php
require_once("Ayar/Config.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formdan gelen verileri al
    $pet_id = $_POST['pet_id'] ?? null;
    $owner_id = $_POST['owner_id'] ?? null;
    $name = $_POST['name'] ?? null;
    $species = $_POST['species'] ?? null;
    $breed = $_POST['breed'] ?? null;
    $gender = $_POST['gender'] ?? null;
    $birth_date = $_POST['birth_date'] ?? null;
    $microchip_number = $_POST['microchip_number'] ?? null;
$sql="insert into pets (owner_id,name,species,breed,gender,birth_date,microchip_number) values ('$owner_id','$name','$species','$breed','$gender','$birth_date','$microchip_number')";
}
if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>