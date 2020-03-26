<?php 
	include "connPortfolio.php";

	$dbName = "contact";
	$sql = "CREATE TABLE contact (
								id INT(3) NOT NULL AUTO_INCREMENT PRIMARY KEY,
								nama VARCHAR(100) NOT NULL,
								email VARCHAR(100) NOT NULL,
								hp VARCHAR(100) NOT NULL,
								kategori ENUM('Web Programming', 'Graphic Design') NOT NULL,
								pesan TEXT NOT NULL,
								waktu TIMESTAMP NOT NULL
								)";
	if($connPortfolio->query($sql)===TRUE){
		echo "Tabel $dbName berhasil dibuat<br>";
	}else{
		die("Tabel $dbName gagal dibuat : ". $connPortfolio->error. "<br>");
	}
 ?>