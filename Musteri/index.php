<?php
require_once("Ayar/Config.php");
$sql="Select * from owners";
$sorgu=mysqli_query($conn,$sql);

?>
<div class="container mt-5">
  <h2>Sahipler (Owners) Tablosu</h2>
 <a href="index.php?page=MusteriEkle" class="btn btn-success">Yeni Kayıt</a>
  <table class="table table-bordered table-striped table-hover">
    <thead class="table-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">İsim</th>
        <th scope="col">Telefon</th>
        <th scope="col">E-posta</th>
        <th scope="col">Adres</th>
        <th scope="col">Oluşturulma Tarihi</th>
        <th scope="col">İşlemler</th>
      </tr>
    </thead>
    <tbody>
      <!-- Örnek veri satırı -->
       <?php
if($sorgu->num_rows>0)
{
  while($row=$sorgu->fetch_assoc())
  {
    ?>
     <tr>
        <th scope="row">1</th>
        <td><?php echo $row['name'];?></td>
        <td><?php echo $row['phone'];?></td>
        <td><?php echo $row['email'];?></td>
        <td><?php echo $row['address'];?></td>
        <td><?php echo $row['created_at'];?></td>
        <td>
          <a href="index.php?page=MusteriDuzelt&Id=<?php echo $row['owner_id'];?>" class="btn btn-sm btn-primary">Düzenle</a>
          <a href="index.php?page=MusteriSil&Id=<?php echo $row['owner_id'];?>" class="btn btn-sm btn-danger">Sil</a>
        </td>
      </tr>

 <?php
    }
  }
  ?>
     

      <!-- Yeni satırlar dinamik olarak buraya eklenebilir -->
    </tbody>
  </table>
</div>