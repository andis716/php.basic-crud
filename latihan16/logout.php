<?php 
session_start();

$_SESSION = [];
//? Session yang di isi array kosong untuk memanipulasi session agar bernilai null
session_unset();
session_destroy();
//? session_unset & session_destroy = fungsi menghapus session milik php

//? kembali ke halaman login 
header("location: login.php");
?>