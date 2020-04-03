<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> Post </title>
</head>
<body>
   <!-- cek kondisi -->
   <!-- ? Apakah tombol submit sudah di pencet -->
   <?php if ( isset($_POST["nama"])) : ?>
   <h3>Selamat datang <?= $_POST["nama"];?></h3>
   <?php endif ; ?>
</body>
</html>