<?php 
// ? Variable Scope / Lingkup variable 
$x =  10;
function tampilX() {
   global $x;
   // ! Keyword global untuk mengidentifikasi variable yang ada di luar function
   // ! Agar x dapat di eksekusi di dalam function. 
   echo $x;
}
tampilX();

?>