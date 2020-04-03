<?php 
//? Koneksi ke database
$dbs = mysqli_connect("localhost", "root", "", "phpbasic");

function query($ambil) {
   global $dbs;
   $result = mysqli_query($dbs, $ambil);
   $rows = []; //? tempat kosong
   while ( $row = mysqli_fetch_assoc($result)) {
      $rows[] = $row;
   }
   return $rows;
}
?>