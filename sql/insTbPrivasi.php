<?php 
	include "connPortfolio.php";

	// $sql = "INSERT privasi (nama, tagline, alamat1, alamat2	, hp, email, fb, url_fb, ig, url_ig, github, linkedin, url_linkedin) VALUES ('Eka Fajhari Adwar', 'Physicist | Web Programmer | Graphic Designer', 'Jl. Pelita No. 13. Lubuk Sikaping. Pasaman', 'Sumatera Barat - Indonesia', '082169150233', 'ekafajhariadwar@gmail.com', 'Eka Fajhari Adwar', '#', '@ekaadwar', '#', 'https://github.com/ekaadwar', 'Eka Fajhari Adwar', '#')";

	$sql = "INSERT privasi (nama, tagline, alamat1, alamat2, hp, email, fb, url_fb, ig, url_ig, github, linkedin, url_linkedin) VALUES ('1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13')";

	if($connPortfolio->query($sql) === TRUE){
		echo "Data telah terkirim<br>";
	}else{
		echo "Data gagal terkirim : ". $connPortfolio->error. "<br>";
	}
 ?>