<?php 
session_start();

$_SESSION = [];
//? Session yang di isi array kosong untuk memanipulasi session agar bernilai null
session_unset();
session_destroy();
//? session_unset & session_destroy = fungsi menghapus session milik php

//? Hapus cookie
setcookie('id', '', time() - 3600);
setcookie('key', '', time() - 3600);
//? Waktu 3600 / 1 jam = adalah waktu yang disarankan oleh dokumentasi php

//? kembali ke halaman login 
header("location: login.php");
?>