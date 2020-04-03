<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> Array Multidimensi </title>
   <style>
      .kotak {
         height: 30px;
         width: 30px;
         background-color: limegreen;
         text-align: center;
         line-height: 30px;
         margin: 2px;
         float: left;
         transition: 1s;
      }
      .kotak:hover {
         transform: rotate(360deg);
         border-radius: 20px;

      }
   </style>
</head>
<body>
<?php 
$angka = [ 
[ 1, 2, 3 ],
[ 4, 5, 6 ],
[ 7, 8, 9 ]
];
?>
<?php foreach ( $angka as $a ) : ?>
   <?php foreach ($a as $i ) : ?>
      <div class="kotak"> <?= $i ; ?>
      </div>
   <?php endforeach ; ?>
<?php endforeach ; ?>
</body>
</html>