<?php
require_once("Ayar/Config.php");
$sql="Select * from pets";
$sorgu=mysqli_query($conn,$sql);

?>
<div class="container">
  <h3 class="mb-4 text-center">Evcil Hayvanlar Tablosu</h3>
  <a href="index.php?page=HayvanEkle" class="btn btn-sm btn-success">Yeni Kayıt</a>
  <div class="table-responsive">
    <table class="table table-bordered table-hover align-middle">
      <thead class="table-primary">
        <tr>
          <th>Pet ID</th>
          <th>Sahip ID</th>
          <th>İsim</th>
          <th>Tür</th>
          <th>Irk</th>
          <th>Cinsiyet</th>
          <th>Doğum Tarihi</th>
          <th>Mikroçip No</th>
          <th>Oluşturulma</th>
          <th>İşlemler</th>
        </tr>
      </thead>
      <tbody>
        <!-- Örnek veri satırı -->
        <?php
           while($row=$sorgu->fetch_assoc())
           {
            ?>
             <tr>
          <td>1</td>
          <td><?php echo $row['owner_id'];?></td>
          <td><?php echo $row['name'];?></td>
          <td><?php echo $row['species'];?></td>
          <td><?php echo $row['breed'];?></td>
          <td><?php echo $row['gender'];?></td>
          <td><?php echo $row['birth_date'];?></td>
          <td><?php echo $row['microchip_number'];?></td>
          <td><?php echo $row['created_at'];?></td>
          <td>
            <a href="index.php?page=HayvanDuzelt&Id=<?php echo $row['pet_id'];?>" class="btn btn-sm btn-warning">Düzenle</a>
            <a href="index.php?page=HayvanSil&Id=<?php echo $row['pet_id'];?>" class="btn btn-sm btn-danger">Sil</a>
          </td>
        </tr>

            

      <?php
           }
        ?>
        
        <!-- Daha fazla veri satırı buraya eklenecek -->
      </tbody>
    </table>
  </div>
</div>