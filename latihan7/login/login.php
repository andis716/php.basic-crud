<?php 
// ? Cek apakah tombol submit sudah dipencet atau belum
   if(isset($_POST["submit"])) {
      // cek user name & passwod
      if ($_POST["nama"] == "admin" && $_POST["password"] == "1234") {
         // jika benar redirect ke halaman admin
         header("location: admin.php");
         exit;
         // exit untuk keluar dari kondisi
      } else { 
         $error = true;
      } 
   }

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>
</head>
<body>
   <h3>Halaman Login</h3>
   <!-- // apakah error bernilai true  -->
   <?php if(isset($error)) :?>
      <p>Username / password salah</p>
   <?php endif; ?>

   <ul>
      <form action="admin.php" method="post">
         <li>
            <label for="nama">Username :</label>
            <input type="text" name="nama" id="nama">
         </li>
         <br>
         <li>
            <label for="password">Password :</label>
            <input type="password" name="password" id="password">
         </li>
         <li>
            <button type="submit" name="submit">Login</button>
         </li>
      </form>
   </ul>
</body>
</html>