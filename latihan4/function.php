<?php
// ? cetak nama hari, tanggal - bullan - tahun
echo "tanggal saat ini";
echo "<br>";
echo date('l, j - F - Y'); 
echo "<br>";

// ? menampilkan detik yang sudah berlalu sejak 1 january 1970
echo "<br>";
echo "Jumlah detik sejak PHP di buat";
echo "<br>";
echo time();
echo "<br><br>";

// ? mktime = membuat detik sendiri 
// mktime( 0, 0, 0, 0, 0, 0 );
// ? format diatas adalah Jam, menit, detik, bulan, tanggal, tahun 
// ? Contoh : menghitung detik ulang tahun
echo "Hari Kelahiran saya dengan mktime";
echo "<br>";
echo date("l", mktime( 0, 0, 0, 8, 9, 1991 ));
echo "<br><br>";

// ? Strtotime = adalah format kebalikan dari mktime
echo "Hari Kelahiran saya dengan strtotime";
echo "<br>";
echo date("l", strtotime( " 9 august 1991 " ));
echo "<br><br>";

?>