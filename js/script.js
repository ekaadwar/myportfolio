 // event pada saat link di klik
 $('.page-scroll').on('click',function(event){
 	// ambil isi href
 	var tujuan = $(this).attr('href');
 	
 	// tangkap elemen bersangkutan
 	var elemenTujuan = $(tujuan);

 	// pindahkan scroll
 	$('html, body').animate({
 		scrollTop: elemenTujuan.offset().top - 50
 	}, 800, 'easeInOutExpo' );

 	// console.log(elemenTujuan);

 	event.preventDefault();

 });