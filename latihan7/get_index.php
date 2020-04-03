<?php 
      $mahasiswa = [   
         [
            "nama" => "Andi Sanjaya",
            "nis" => "097876566",
            "alamat" => "Bogor",
            "gambar" => "profile1.png"
         ], 
         [
            "nama" => "Nissa Sabyan",
            "nis" => "987865656",
            "alamat" => "Jakarta",
            "gambar" => "profile2.png"
         ],
         [
            "nama" => "Zainudin",
            "nis" => "976656566",
            "alamat" => "Bandung",
            "gambar" => "profile1.png"
         ],
      ]
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
   <?php foreach( $mahasiswa as $mhs ) :?>
         <li><a href="get.php?nama=<?= $mhs["nama"];?>&nis=<?= $mhs["nis"];?>&alamat=<?= $mhs["alamat"];?>&gambar=<?=$mhs["gambar"];?>"><?= $mhs["nama"];?></a></li>
   <?php endforeach ; ?>
</body>
</html>