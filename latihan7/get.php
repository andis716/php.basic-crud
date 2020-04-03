<?php 
// Cek apakah variable get sudah dibuat atau belum
   if( !isset($_GET["nama"])
      || !isset($_GET["nis"])
      || !isset($_GET["alamat"])
      || !isset($_GET["gambar"])
      ) { // jika belum ada redirect to
         header("Location : get_index.php");
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Get</title>
</head>


<body>
   <h1> Daftar Mahasiswa </h1>
      <ul>
         <li><img src="img/<?= $_GET["gambar"] ;?>" width="100px" height="100px"></li>
         <li><?= $_GET["nama"];?></li>
         <li><?= $_GET["nis"];?></li>
         <li><?= $_GET["alamat"];?></li>
      </ul>

      <br>
      <a href="get_index.php">kembali ke halaman index</a>
</body>
</html>