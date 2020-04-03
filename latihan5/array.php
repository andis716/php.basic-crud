<?php 

// Todo        ---Array---
// ? Variable  biasa
$nama = "Andi";
echo $nama;
echo "<br><br>";
   // ? Array adalah Sebuah variable yang dapat menampung banyak nilai
   // ? Element pada array boleh memiliki tipe data yang berbeda
   // ? keynya adalah index yang dimulai dari 0
   // ? elementnya adalah pasangan key dan value
   $kumpulanNama = ["andi", "rudi", "beni", "yusuf", "arif"];
   echo "Menampilkan Array dengan var_dump";
   echo "<br>";
   var_dump( $kumpulanNama );

   // ? Menapilkan Array dengan for
   echo "<br><br>";
   echo "Menampilkan Array dengan for";
for ( $i = 0 ; $i < count($kumpulanNama); $i++ ) {
   echo "<br>";
   echo $kumpulanNama[$i];
}
echo "<br><br>";

   // ? Menampilkan array dengan foreach 
   echo "Menampilkan array dengan foreach";
foreach ( $kumpulanNama as $knama ) {
   echo "<br>";
   echo $knama;
}


   // ? Menampilkan Array dengan foreach 
foreach( $kumpulanNama as $knama ) 

?>