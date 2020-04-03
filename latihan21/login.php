<?php 
session_start();
require 'functions.php';

//? Cek apakah user punya cookie 
if ( isset($_COOKIE["id"]) && isset($_COOKIE["key"])) {
   //? Cek apakah user yang memiliki cookie sama atau berbeda
   $id = $_COOKIE['id'];
   $key = $_COOKIE['key'];
   
   //? Ambil username berdasarkan id
   $result = mysqli_query( $dbs, "SELECT username FROM users WHERE id = '$id' ");
   $row = mysqli_fetch_assoc( $result );

   //? cek cookie username 
   if ( $key === hash('sha256', $row["username"])) {
      //? jika kondisi benar set session
      $_SESSION['login'] = true;
      //? buat keadaan session menjadi true 
   }
}

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

         // ? Cek remember me untuk cookie
         // ? Apakah user menggunakan cookie
         if ( isset($_POST["remember"])) {
            //? buat cookie 
            setcookie('id', $row['id'], time() + 60 );
            //? parameter pertama dibuat dengan inisialisasi cookie dengan nama id 
            //? parameter kedua diambil dari row id
            //? parameter ketiga time ( waktu ) satuan detik
            setcookie('key',hash('sha256' ,$row["username"]));
            //? parameter pertama dibuat dengan inisialisasi cookie dengan nama key
            //? parameter kedua di ambil dari parameter row username
         }


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
               <input type="checkbox" name="remember" id="remember">
               <label for="remember">Remember me </label>
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