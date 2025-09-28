<?php
require_once("Ayar/Config.php");
$sql="Select owner_id,name from owners";
$sorgu=mysqli_query($conn,$sql);

?>

<div class="container">
  <div class="form-container">
    <h3 class="mb-4 text-center">Evcil Hayvan Kayıt Formu</h3>
    <form action="index.php?page=HayvanSave" method="POST">
      
     
      <div class="mb-3">
        <label for="owner_id" class="form-label">Sahip ID</label>
        <select name="owner_id" class="form-control">
        <option value="">Seçim Yapınız</option>
         <?php
            while($row=$sorgu->fetch_assoc())
            {
              echo "<option value='$row[owner_id]'>$row[name]</option>";
            }

         ?>
        </select>
        
      </div>

      <div class="mb-3">
        <label for="name" class="form-label">İsim</label>
        <input type="text" class="form-control" id="name" name="name" maxlength="100">
      </div>

      <div class="mb-3">
        <label for="species" class="form-label">Tür</label>
        <input type="text" class="form-control" id="species" name="species" maxlength="50">
      </div>

      <div class="mb-3">
        <label for="breed" class="form-label">Irk</label>
        <input type="text" class="form-control" id="breed" name="breed" maxlength="100">
      </div>

      <div class="mb-3">
        <label class="form-label">Cinsiyet</label>
        <div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="gender_male" value="Erkek">
            <label class="form-check-label" for="gender_male">Erkek</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="gender_female" value="Dişi">
            <label class="form-check-label" for="gender_female">Dişi</label>
          </div>
        </div>
      </div>

      <div class="mb-3">
        <label for="birth_date" class="form-label">Doğum Tarihi</label>
        <input type="date" class="form-control" id="birth_date" name="birth_date">
      </div>

      <div class="mb-3">
        <label for="microchip_number" class="form-label">Mikroçip Numarası</label>
        <input type="text" class="form-control" id="microchip_number" name="microchip_number" maxlength="50">
      </div>

      <!-- created_at otomatik atanacağı için forma eklenmedi -->

      <div class="d-grid gap-2">
        <button type="submit" class="btn btn-primary">Kaydet</button>
      </div>
    </form>
  </div>
</div>
