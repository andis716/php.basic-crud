<?php 
session_start();

// ? CEk apakah ada session login user 
if ( !isset($_SESSION['login'])) {
   header("location: login.php");
   exit;
}
require "functions.php";

//? ambil data di url
$id = $_GET["id"];
// ? query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];
// ? menambahkan [0] untuk mengambil index 0 yaitu id pada table mahasiswa

// ? Cek apakah tombol submit sudah dipencet atau belum
if (isset($_POST["submit"])) {

   //? cek apakah data berhasil diubah atau tidak
   if ( ubah ( $_POST ) > 0 ) {
      echo "<script>
               alert('Data berhasil diupdate !');
               document.location.href = 'index.php';
            </script>";
   } else {
      echo "<script>
               alert('Data gagal diupdate !');
               document.location.href = 'index.php';
            </script>";
   }
}

?>
<!-- Untuk form update perlu di tambahkan atribut value pada element input -->
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Update data</title>
   <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
   <h2 class="d-mahasiswa">Update data mahasiswa</h2>
   <div class="container form-list">
   <form action="" method="post" class="form-tambah" enctype="multipart/form-data">
   <input type="hidden" name="id" value="<?= $mhs["id"];?>">
   <input type="hidden" name="gambarLama" value="<?= $mhs["id"];?>">
      <div class="u-list">
         <ul class="use-list-tambah">
            <li>
               <label for="nama">Nama : </label>
                  <input type="text" name="nama" id="nama" required value="<?= $mhs["nama"] ;?>">
            </li>
            <li>
               <label for="nis">Nis : </label>
                  <input type="text" name="nis" id="nis" required value="<?= $mhs["nis"] ;?>">
            </li>
            <li>
               <label for="email">Email : </label>
                  <input type="text" name="email" id="email" required value="<?= $mhs["email"] ;?>">
            </li>
            <li>
               <label for="jurusan">Jurusan : </label>
                  <input type="text" name="jurusan" id="jurusan" required value="<?= $mhs["jurusan"] ;?>">
            </li>
            <li>
               <label for="gambar">Foto : </label> 
               <img class="edit-gambar" src="img/<?= $mhs["gambar"] ; ?>" alt="img"
               width="120px" height="120px" border="1">
                  <input type="file" name="gambar" id="gambar">
            </li>
            <li>
               <button  class="btn" type="submit" name="submit"> Update </button>
            </li>
         </ul>
      </div>
   </form>
   
   </div>

</body>
</html>