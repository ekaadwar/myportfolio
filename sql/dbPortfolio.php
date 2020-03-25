<?php 
	$serverName = "localhost";
	$userName = "root";
	$password = "";

	// create connection
	$connect = new mysqli($serverName, $userName, $password);

	$dbName = "portfolio";
	$sql = "CREATE DATABASE $dbName";

	if($connect->query($sql)=== TRUE){
		echo "Database $dbName created successfully.";
	}else{
		echo "Error creating database $dbName : ". $connect->error;
	}
 ?>