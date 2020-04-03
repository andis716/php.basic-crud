<?php 
require '../functions.php';
// Menghubungkan file functions php
$keyword = $_GET["keyword"];
// $_GET get keyword di ambil dari script js ajax request method

// query database 
$query = "SELECT * FROM mahasiswa WHERE 
            nama LIKE '%$keyword%' OR 
            nis LIKE '%$keyword%' OR
            email LIKE '%$keyword%' OR
            jurusan LIKE '%$keyword%' ";
$mahasiswa = query($query);
?>
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