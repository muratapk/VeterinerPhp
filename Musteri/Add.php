<div class="container mt-5">
  <h2>Owner Bilgi Formu</h2>
 
  <form action="index.php?page=MusteriSave" method="post">
    
    <!-- Name -->
    <div class="mb-3">
      <label for="name" class="form-label">İsim</label>
      <input type="text" class="form-control" id="name" name="name" maxlength="100" required>
    </div>

    <!-- Phone -->
    <div class="mb-3">
      <label for="phone" class="form-label">Telefon</label>
      <input type="text" class="form-control" id="phone" name="phone" maxlength="20">
    </div>

    <!-- Email -->
    <div class="mb-3">
      <label for="email" class="form-label">E-posta</label>
      <input type="email" class="form-control" id="email" name="email" maxlength="100">
    </div>

    <!-- Address -->
    <div class="mb-3">
      <label for="address" class="form-label">Adres</label>
      <textarea class="form-control" id="address" name="address" rows="3"></textarea>
    </div>

    <!-- Submit Button -->
    <button type="submit" class="btn btn-primary">Kaydet</button>
  </form>
</div>