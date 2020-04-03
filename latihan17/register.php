<?php 
require 'functions.php';
//? Cek Apakah tombol registrasi sudah di tekan
if ( isset($_POST["register"])) {
   // ? jika berhasil
   if ( registrasi( $_POST ) > 0 ) {
      echo "<script>
            alert ('Registrasi Berhasil');
            </script>";
   }
   // ? jika gagal
} else {
   echo "<script>
   alert ('Registrasi Gagal');
   </script>";
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Registrasi</title>
   <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<h2 class="d-mahasiswa">Update data mahasiswa</h2>
   <div class="container form-list">
   <form action="" method="post" class="form-tambah" enctype="multipart/form-data">
      <div class="u-list">
         <ul class="use-list-tambah">
            <li>
               <label for="username">Nama : </label>
                  <input type="text" name="username" id="username" required>
            </li>
            <li>
               <label for="password">Password : </label>
                  <input type="text" name="password" id="password" required>
            </li>
            <p>confirm your password</p>
            <li>
               <label for="password2">Password : </label>
                  <input type="text" name="password2" id="password2" required>
            </li>
            <li>
               <button  class="btn" type="submit" name="register"> Register </button>
            </li>
         </ul>
      </div>
   </form>
   
   </div>
   
</body>
</html>