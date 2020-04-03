//  Smbil elemen element yang di butuhkan
let keyword = document.getElementById('keyword');
let tombolCari = document.getElementById('tombol-cari');
let container = document.getElementById('container');
// tambahkan event ketika keyword di tulis
keyword.addEventListener('keyup', function(){
   // membuat object ajax 
   let ajax = new XMLHttpRequest();
   // cek kesiapan ajax dengan function
   ajax.onreadystatechange = function() {
      if ( ajax.readyState == 4 && ajax.status == 200 ) {
         // 4 adalah state antara 0 s/d 4
         // status adalah status browser 0 s/d 200
         container.innerHTML = ajax.responseText;
         // container diambil dari variable container
         // ajax.responseText = apapun text di dalam container HTML
      }
   }
   // eksekusi ajax
   ajax.open('GET','ajax/mahasiswa.php?keyword=' + keyword.value, true )
   // parameter pertama method GET / POST ( request method )
   // parameter kedua asal sumber ( source )
   // parameter ketiga syncronous = false // asyncronous = true
   // keyword di ambil dari variable keyword
   // value = apapun yang di inputkan kolom pencarian
   ajax.send();
});