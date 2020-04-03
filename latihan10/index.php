<?php 
require 'functions.php';

$mahasiswa = query("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Halaman Admin</title>
   <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
   <h2 class="d-mahasiswa">Daftar Mahasiswa</h2>
   <div class="container table-siswa">
   <table class="table" border="1" cellpadding="5" cellspacing="0">
      <tr class="h-table">
         <th>No.</th>
         <th>Action</th>
         <th>Foto</th>
         <th>Nama</th>
         <th>Nis</th>
         <th>Email</th>
         <th>Jurusan</th>
      </tr>
      <!-- // ? Looping no urut angka -->
      <?php $i = 1 ; ?>
         <!-- // ? Looping isi table mahasiswa dengan fetch_assoc -->
      <?php foreach( $mahasiswa as $row ) : ?>
         <!-- // ? membuat variable row untuk fetch_assoc -->
      <tr>
         <td><?= $i ?></td>
         <td>
            <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Apakah anda yakin ?')"> Delete </a> |
            <a href=""> Update </a>
         </td>
         <!-- // ? mengambil semua row dari fetch_assoc -->
         <td>
            <img src="img/<?= $row["gambar"]; ?>" alt="png" width="30" height="30">
         </td>
         <td><?= $row["nama"]; ?></td>
         <td><?= $row["nis"]; ?></td>
         <td><?= $row["email"]; ?></td>
         <td><?= $row["jurusan"]; ?></td>
      </tr>
      <!-- // ? increment no urut angka -->
      <?php $i++ ;?>
         <!-- // ? tutup looping fetch_assoc dari table mahasiswa -->
      <?php endforeach; ?>

   </table>
   <button type="button" class="btn" name="button" href="tambah.php">
         Tambah data mahasiswa
   </button>
   </div>

   
</body>
</html>