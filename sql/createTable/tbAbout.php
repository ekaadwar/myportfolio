<?php 
	include "../connPortfolio.php";

	$tbName = "about";
	$sql = "CREATE TABLE $tbName (
								id INT(3) AUTO_INCREMENT PRIMARY KEY,
								indo1 TEXT NOT NULL,
								indo2 TEXT NOT NULL,
								indo3 TEXT NOT NULL,
								eng1 TEXT NOT NULL,
								eng2 TEXT NOT NULL,
								eng3 TEXT NOT NULL
								)";
	if($connPortfolio->query($sql) === TRUE){
		echo "Tabel $tbName berhasil dibuat.<br>";
	}else{
		echo "Tabel $tbName gagal dibuat : ". $connPortfolio->error. "<br>";
	}
 ?>