<?php 
session_start();

// ? CEk apakah ada session login user 
if ( !isset($_SESSION['login'])) {
   header("location: login.php");
   exit;
}


require "functions.php";
// ? Cek apakah tombol submit sudah dipencet atau belum
if (isset($_POST["submit"])) {

   //? cek apakah data berhasil ditambahkan atau tidak
   if ( tambah ( $_POST ) > 0 ) {
      echo "<script>
               alert('Data berhasil ditambahkan !');
               document.location.href = 'index.php';
            </script>";
   } else {
      echo "<script>
               alert('Data gagal ditambahkan !');
               document.location.href = 'index.php';
            </script>";
   }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Tambah data</title>
   <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
   <h2 class="d-mahasiswa">Tambah data mahasiswa</h2>
   <div class="container form-list">
   <form action="" method="post" class="form-tambah" enctype="multipart/form-data">
      <div class="u-list">
         <ul class="use-list-tambah">
            <li>
               <label for="nama">Nama : </label>
                  <input type="text" name="nama" id="nama" required>
            </li>
            <li>
               <label for="nis">Nis : </label>
                  <input type="text" name="nis" id="nis" required>
            </li>
            <li>
               <label for="email">Email : </label>
                  <input type="text" name="email" id="email" required>
            </li>
            <li>
               <label for="jurusan">Jurusan : </label>
                  <input type="text" name="jurusan" id="jurusan" required>
            </li>
            <li>
               <label for="gambar">Foto : </label>
                  <input type="file" name="gambar" id="gambar" required>
            </li>
            <li>
               <button class="btn" type="submit" name="submit"> Create </button>
            </li>
         </ul>
      </div>
   </form>
   
   </div>

</body>
</html>