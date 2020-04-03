<?php 
session_start();

// ? CEk apakah ada session login user 
if ( !isset($_SESSION["login"])) {
   header("location: login.php");
   exit;
}

require ('functions.php');

$mahasiswa = query("SELECT * FROM mahasiswa");
// ? tombol cari di tekan
if (isset($_POST["cari"])) {
   $mahasiswa = cari($_POST["keyword"]);
}
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
      <div style="text-align: center">
         <a href="tambah.php" class="ling">Tambah data mahasiswa</a>
         <form action="" method="post" class="search">
            <input type="text" name="keyword" size="40px" id="keyword"
            autofocus placeholder="keyword search..." autocomplete="off">
            <button type="submit" name="cari" id="tombol-cari">Search</button>
         </form>
      </div>
      <div id="container">
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
                  <a href="ubah.php?id=<?= $row["id"]; ?>"> Update </a>
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
      </div>
      <div>
         <a href="logout.php" class="ling">Logout</a>
      </div>
   </div>



   <script src="js/script.js"></script>
   </body>
</html>