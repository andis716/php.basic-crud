<?php 
//? Koneksi ke database
$dbs = mysqli_connect("localhost", "root", "", "phpbasic");

function query($ambil) {
   global $dbs;
   $result = mysqli_query($dbs, $ambil);
   $rows = []; //? tempat kosong
   while ( $row = mysqli_fetch_assoc($result)) {
      $rows[] = $row;
   }
   return $rows;
}

//? function tambah data 
function tambah($data) {
   global $dbs;
    // ? ambil data dari tiap element form
   $nama = htmlspecialchars($data["nama"]);
   $nis = htmlspecialchars($data["nis"]);
   $email = htmlspecialchars($data["email"]);
   $jurusan = htmlspecialchars($data["jurusan"]);
   $gambar = htmlspecialchars($data["gambar"]);

    // ? query insert data
   // ? membuat variable untuk insert data kedalam table 
   $create = "INSERT INTO mahasiswa VALUES
               ('', '$nama', '$nis', '$email', '$jurusan', '$gambar')";

   mysqli_query($dbs, $create);

   return mysqli_affected_rows($dbs);
}

// ? function hapus 
function hapus($id) {
   global $dbs;
   mysqli_query($dbs, "DELETE FROM mahasiswa WHERE id = $id");
   return mysqli_affected_rows($dbs);
}
?>