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

   // ? Upload gambar 
   $gambar = upload();
   // ? cek apakah gambar berhasil di upload 
   if (!$gambar) {
      return false ;
      // ? return false untuk menghentikan function jika gagal
   }

    // ? query insert data
   // ? membuat variable untuk insert data kedalam table 
   $create = "INSERT INTO mahasiswa VALUES
               ('', '$nama', '$nis', '$email', '$jurusan', '$gambar')";

   mysqli_query($dbs, $create);

   return mysqli_affected_rows($dbs);
}

// ? membuat function upload 
function upload() {
   $namaFile = $_FILES ['gambar']['name'];
   $ukuranFile = $_FILES ['gambar']['size'];
   $error = $_FILES ['gambar']['error'];
   $tmpName = $_FILES ['gambar']['tmp_name'];
   
   //? Cek apakah tidak ada gambar yang di upload 
   if( $error === 4 ) {
      echo "<script>
            alert('Pilih gambar terlebih dahulu');
            </script>";
            return false;
   }

   //? Cek apakah yang di upload adalah gambar 
   $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
   $ekstensiGambar = explode('.', $namaFile);
   //? explode untuk memecah ekstensi file menjadi string
   $ekstensiGambar = strtolower(end($ekstensiGambar)) ;
   //? end untuk mengambil string yang paling akhir yaitu ekstensi filename
   if ( !in_array( $ekstensiGambar, $ekstensiGambarValid )) {
      echo "<script>
      alert('Yang anda upload bukan gambar !');
      </script>";
      return false;
   }

   //? Cek jika ukuran gambar terlalu besar
   if ( $ukuranFile > 1000000 ) {
      // ? 1000000 = 1 mb 
      echo "<script>
      alert('Ukuran file terlalu besar !');
      </script>";
      return false;
   }

   // ? Cek file yang di input memiliki nama yang sama dari file yang sebelumnya
      // ? Hal ini terjadi apabila ada 2 user / lebih mebggunakan nama file yang sama 
   $namaFileBaru = uniqid();
   // ? uniqid untuk membuat string uniq ( string tersebut adalah bilangan random )
   $namaFileBaru .= '.';
   $namaFileBaru .= $ekstensiGambar;

   //? Jika lolos pengecekan gambar siap di upload 
   move_uploaded_file($tmpName, 'img/' . $namaFileBaru);
   return $namaFileBaru;

}

// ? function hapus 
function hapus($id) {
   global $dbs;
   mysqli_query($dbs, "DELETE FROM mahasiswa WHERE id = $id");
   return mysqli_affected_rows($dbs);
}

// ? function ubah data
function ubah($data) {
   global $dbs;

      // ? ambil data dari tiap element form
      $id = $data["id"];
      $nama = htmlspecialchars($data["nama"]);
      $nis = htmlspecialchars($data["nis"]);
      $email = htmlspecialchars($data["email"]);
      $jurusan = htmlspecialchars($data["jurusan"]);
      //? Cek apakah user pilih gambar baru atau tidak 
      $gambarLama =  htmlspecialchars($data["gambarLama"]);
      if( $_FILES['gambar']['error'] === 4 ) {
         $gambar = $gambarLama;
      } else {
         $gambar = upload();   // ? query insert data
         // ? membuat variable untuk insert data kedalam table 
      }
      

      $update = "UPDATE mahasiswa SET
                  nama ='$nama',
                  nis = '$nis',
                  email ='$email',
                  jurusan ='$jurusan',
                  gambar ='$gambar'
                  WHERE id = $id ";
      mysqli_query($dbs, $update);
   
      return mysqli_affected_rows($dbs);
}

//? Function cari
function cari($keyword) {
   $query = "SELECT * FROM mahasiswa WHERE
               nama LIKE '%$keyword%' OR 
               nis LIKE '%$keyword%' OR
               email LIKE '%$keyword%' OR
               jurusan LIKE '%$keyword%'  
               ";

   return query($query);
}

//? function registrasi 
function registrasi($data) {
   global $dbs;

   $username = strtolower( stripslashes( htmlspecialchars ( $data ["username"] )));
   // ? stripslashes untuk menghilangkan karakter backslash ( \ )
   $password = mysqli_real_escape_string( $dbs, $data ["password"]);
   $password2 = mysqli_real_escape_string( $dbs, $data ["password2"]);
   //? untuk menggunakan mysqli_real_escape_string membutuhkan 2 parameter yaitu :
      //? koneksi databasenya, dan data yang dikirimkan

   //? Cek apakah username sudah terdaftar atau belum
   $result = mysqli_query( $dbs, "SELECT username FROM users WHERE username = '$username' ");
   if ( mysqli_fetch_assoc ($result)) {
      echo "<script>
            alert('Username sudah terdaftar !');
            </script>";
            return false;
   }

   //? Cek konfirmasi password 
   //? Apakah input konfirmasi password2 == password
   if ( $password !== $password2 ) {
      echo "<script>
            alert('Confirmation password not match !');
            </script>";
            return false;
   } //? jika password sama

   //? Buat enkripsi password 
   $password = password_hash( $password, PASSWORD_DEFAULT );
   //? password_hash = fungsi_hash milik php
   //? PASSWORD_DEFAULT type hashing default milik php

   //? Tambahkan user baru kedalam database 
   mysqli_query( $dbs, "INSERT INTO users VALUES ('', '$username', '$password')");
   return mysqli_affected_rows($dbs);
}
?>