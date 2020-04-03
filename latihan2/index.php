<?php 
   // var_dump("Andi Sanjaya");
   // ? var_dump digunakan untuk melakukan print dengan 
   // ? tujuan untuk mengecek tipe data dan nilai pada type data tersebut
   
   // echo '<br>';
   // ? print tag HTML di dalam PHP
   // echo "Jum'at";
   // ? Tanda kutip 2 mempunyai level di atas kutip 1 
   
   $variable = "Bogor";
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Belajar PHP Dasar</title>
</head>

<body>
   <h1> Hallo nama saya,
      <?php echo "Andi"; ?>
   </h1>
   <!-- // ? Cara penulisan pertama PHP di dalam <HTML> -->
   <p> Saya tinggal di kota, <?php echo $variable; ?></p>

</html>