<?php 
	include "../connPortfolio.php";

	$tbName = "thumbnail";

	$sqlThumb = "CREATE TABLE $tbName (
										id INT(3) AUTO_INCREMENT PRIMARY KEY NOT NULL,
										category ENUM('Web Develompment', 'Graphic Design') NOT NULL,
										namePicture VARCHAR(100) NOT NULL
										)";

	if($connPortfolio->query($sqlThumb)===TRUE){
		echo "Table $tbName created successfully.";
	}else{
		echo "Error creating table : ". $connPortfolio->error;
	}
 ?>