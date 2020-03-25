<?php 
	include "connPortfolio.php";

	$dbName = "privasi";
	$sql = "CREATE TABLE $dbName (
								id INT (3) AUTO_INCREMENT PRIMARY KEY,
								nama VARCHAR(100) NOT NULL,
								tagline VARCHAR(100) NOT NULL,
								alamat1 TEXT NOT NULL,
								alamat2 TEXT NOT NULL, 
								hp VARCHAR(100) NOT NULL , 
								email VARCHAR(100) NOT NULL, 
								fb VARCHAR(100) NOT NULL, 
								url_fb VARCHAR(100) NOT NULL, 
								ig VARCHAR(100) NOT NULL, 
								url_ig VARCHAR(100) NOT NULL, 
								github VARCHAR(100) NOT NULL, 
								linkedin VARCHAR(100) NOT NULL,
								url_linkedin VARCHAR(100) NOT NULL
								)";

	if($conn_Portfolio->query($sql)===true){
		echo "Tabel $dbName berhasil dibuat.<br>";
	}else{
		die("Tabel $dbName gagal dibuat : ". $conn_Portfolio->error."<br>");
	}
 ?>