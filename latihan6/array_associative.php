<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> Array Associative </title>
</head>
<body>
   <h3> Array Asociative </h3>
   <ul>Definisi Array aaociative 
      <li> Definisi sama dengan array numerik </li>
      <li> Keynya adalah string yang kita buat sendiri </li>
   </ul>
   <br>
   <!-- Contoh array Associative -->
   <?php 
      $siswa = [   
         [
            "nama" => "Andi Sanjaya",
            "nis" => "097876566",
            "alamat" => "Bogor"
         ], 
         [
            "nama" => "herudin",
            "nis" => "987865656",
            "alamat" => "Jakarta"
         ],
         [
            "nama" => "Zainudin",
            "nis" => "976656566",
            "alamat" => "Bandung"
         ],
      ]
   ?>
   <h4>Daftar siswa</h4>
   
      <?php foreach ( $siswa as $sw ) : ?>
   <ul>
      <li> Nama : <?= $sw["nama"]; ?> </li>
      <li> Nis : <?= $sw["nis"]; ?> </li>
      <li> Alamat : <?= $sw["alamat"]; ?> </li>
   </ul>
      <?php endforeach; ?> 

   
</body>
</html>