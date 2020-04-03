// ? ajax jquery untuk live search
$('document').ready( function(){

   // ? Event ketika keyword di tulis 
   $('#keyword').on('keyup', function(){
      $('#container').load('ajax/mahasiswa.php?keyword=' + $('#keyword').val());
   });
});
