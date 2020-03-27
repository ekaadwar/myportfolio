<?php 
	include "../connPortfolio.php";

	//create access table
	$tbName = "access";
	$sqlAccess = "CREATE TABLE $tbName (
										id INT(3) PRIMARY KEY, 
										username VARCHAR(100) NOT NULL, 
										password VARCHAR(100) NOT NULL, 
										time TIMESTAMP NOT NULL)";
	if($connPortfolio->query($sqlAccess)===TRUE){
		echo "Table $tbName creating successfully";
	}else{
		echo "some error on creating table $tbName : ".$connPortfolio->error;
	}
 ?>