<?php
require_once __DIR__ . '/vendor/autoload.php';
require ('functions.php');

$mahasiswa = query("SELECT * FROM mahasiswa");
$html = '<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Halaman Admin</title>
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <style>
      @media print {
      .ling, .tombol-cari, .action, .input {
      display: none;
      }
   }
   </style>
</head>
<body>
<h2 class="d-mahasiswa">Daftar Mahasiswa</h2>
<div class="container table-siswa">
   <div id="container">
      <table class="table" border="1" cellpadding="5" cellspacing="0">
         <tr class="h-table">
            <th>No.</th>
            <th>Foto</th>
            <th>Nama</th>
            <th>Nis</th>
            <th>Email</th>
            <th>Jurusan</th>
         </tr>';
         $i = 1;
         foreach($mahasiswa as $row) {
            $html .='<tr>
            <td>'.$i++.'</td>
            <td><img src="img/'. $row["gambar"] .'" alt="png" width="30" height="30"></td>
            <td>'.$row["nama"].'</td>
            <td>'.$row["nis"].'</td>
            <td>'.$row["email"].'</td>
            <td>'.$row["jurusan"].'</td>
         </tr>';
         }
$html .='</table>
      </div>
   </div>
</body>
</html>';
$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output('Daftar Mahasiswa.pdf', \Mpdf\Output\Destination::INLINE);


?>
