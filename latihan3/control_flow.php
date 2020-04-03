<?php 
   // ? Pengulangan : 
   // ? For 
   // ? While 
   // ? Do While 
   // ? ForEach : Pengulangan khusus untuk Array
   // for ( $i = 0 ; $i < 5 ; $i++ ) {
   //    echo "Hello Word <br>";
   // }
   
   // echo "<br><br>";
   // $i = 0;
   // while ( $i < 5 ) {
   //    echo "Hello World <br>";
   //    $i++;
   // }
   
   // echo "<br><br>";
   // $a = 0;
   // do {
   //    echo "Hello World <br>";
   //    $a++;
   // } while ( $a < 5 )
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> PHP basic </title>
   <style>
   .warna {
      background-color: greenyellow;
   }
   </style>
</head>

<body>
   <header>
      <h1> Membuat tabel dengan looping php </h1>
   </header>
   <!-- ? Struktur Looping menggunakan php di dalam HTML -->
   <table border="1" cellpadding=" 10" cellspacing="0">
      <?php for( $i = 1 ; $i <= 3 ; $i++ ) : ?>
            <?php if ( $i % 2 == 1 ) : ?>
               <tr class="warna">
            <?php else : ?>
               <tr>
            <?php endif ; ?>
         <?php for ( $j=1 ; $j <= 5 ; $j++ ) : ?>
         <td><?= "$i, $j" ; ?> </td>
         <?php endfor ; ?>
      </tr>
      <?php endfor ; ?>
   </table>




</body>

</html>