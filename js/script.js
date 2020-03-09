 // event pada saat link di klik
 $('.page-scroll').click(function(event){
 	// ambil isi href
 	var tujuan = $(this).attr('href');
 	
 	// tangkap elemen bersangkutan
 	var elemenTujuan = $(tujuan);

 	// pindahkan scroll
 	$('body').animate({
 		scrollTop: elemenTujuan.offset().top - 50
 	}, 2000, 'swing' );

 	// console.log(elemenTujuan);

 	event.preventDefault();

 });