 // event pada saat link di klik
 $('.page-scroll').on('click', function(e){
 	// ambil isi href
 	var tujuan = $(this).attr('href');
 	
 	// tangkap elemen bersangkutan
 	var elemenTujuan = $(tujuan);

 	// pindahkan scroll
 	$('body').scrollTop('700');

 	e.preventDefault();

 })