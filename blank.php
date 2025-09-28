<main class="app-main">

<h1>Orta Kısım</h1>
<?php
$page=$_GET['page'];
// switch($page)
//  {
//     case "Musteri":
//         require_once("Musteri/index.php");
//         break;
//     case "Hayvanlar":
//         require_once("Hayvanlar/index.php");
//         break;
//  }

 $allowed_pages = [
    'Musteri' => 'Musteri/index.php',
    'MusteriEkle' => 'Musteri/Add.php',
    'MusteriSave' => 'Musteri/Save.php',
    'MusteriDuzelt'=>'Musteri/Edit.php',
    'MusteriSil'=>'Musteri/Delete.php',
    'MusteriUpdate'=>'Musteri/Update.php',
    'Hayvan' => 'Hayvan/index.php',
    'HayvanEkle' => 'Hayvan/Add.php',
    'HayvanSave' => 'Hayvan/Save.php',
    'HayvanDuzelt'=>'Hayvan/Edit.php',
    'HayvanSil'=>'Hayvan/Delete.php',
    'HayvanUpdate'=>'Hayvan/Update.php',
];

//$page = $_GET['page'] ?? 'customer';

if (array_key_exists($page, $allowed_pages)) {
    include $allowed_pages[$page];
} else {
    echo "<div class='container mt-5'><h3>Geçersiz veya tanımsız sayfa!</h3></div>";
}
?>
</main>