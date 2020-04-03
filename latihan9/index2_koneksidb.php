<?php 
//? Koneksi ke database
$dbs = mysqli_connect("localhost", "root", "", "phpbasic");

//? Ambil data dari table Mahasiswa
$result =mysqli_query( $dbs, "SELECT * FROM mahasiswa");
// ? cek isi dari koneksi database dengan var_dump
// var_dump($result);
// ? 4 Cara mengambil data (fetch) mahasiswa dari Object result :
   // ? mysqli_fetch_row() // mengembalikan array numeric
   // ? mysqli_fetch_assoc() // mengembalikan array associative
   // ? mysqli_fetch_array() // mengembalikan keduanya
   // ? mysqli_fetch_object() // 
   

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Halaman Admin</title>
</head>
<body>
   <h2>Daftar Mahasiswa</h2>

   <table border="1" cellpadding="5" cellspacing="0">
      <tr>
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
      <?php while ( $row = mysqli_fetch_assoc($result)) : ?>
         <!-- // ? membuat variable row untuk fetch_assoc -->
      <tr>
         <td><?= $i ?></td>
         <td>
            <a href=""> Create </a> |
            <a href=""> Delete </a> |
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
      <?php endwhile; ?>

   </table>
   
</body>
</html>