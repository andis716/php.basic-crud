<?php 
session_start();
require 'functions.php';
//? Cek apakah user sudah login 
if ( isset($_SESSION["login"])) {
   header("location: index.php");
   exit;
}

//? Cek apakah tombol submit sudah di tekan atau belum
if ( isset($_POST["login"])) {
   $username = $_POST["username"];
   $password = $_POST["password"];

   $result = mysqli_query($dbs, "SELECT * FROM users WHERE username = '$username' ");

   //? cek username di dalam tabel 
   if ( mysqli_num_rows($result) === 1 ) {
      // ? cek password
      $row = mysqli_fetch_assoc($result);
      if ( password_verify( $password, $row['password']) ) {
         //? password_verify untuk mencari string password 
         
         //? Set session untuk user yang berhasil login 
         $_SESSION['login'] = true;
         header("location: index.php");
         exit;
      }
   }
   //? jika username tidak ada
   $error = true;

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
   <?php if ( isset($error)) :?>
      <p class="mesege"> Username / Password salah </p> 
   <?php endif; ?>
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
            <li>
               <button  class="btn" type="submit" name="login"> Login </button>
            </li>
         </ul>
      </div>
   </form>
   
   </div>
   
</body>
</html>