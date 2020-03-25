<?php 
	include "connPortfolio.php";

	// inisialisasi tabel privasi
	$sql = "INSERT privasi (nama, tagline, alamat1, alamat2	, hp, email, fb, url_fb, ig, url_ig, github, linkedin, url_linkedin) VALUES ('Eka Fajhari Adwar', 'Physicist | Web Programmer | Graphic Designer', 'Jl. Pelita No. 13. Lubuk Sikaping. Pasaman', 'Sumatera Barat - Indonesia', '082169150233', 'ekafajhariadwar@gmail.com', 'Eka Fajhari Adwar', '#', '@ekaadwar', '#', 'https://github.com/ekaadwar', 'Eka Fajhari Adwar', '#')";

	if($connPortfolio->query($sql) === TRUE){
		echo "Data telah terkirim<br>";
	}else{
		echo "Data gagal terkirim : ". $connPortfolio->error. "<br>";
	}
 ?>