<?php 
	$serverName = "localhost";
	$userName = "root";
	$password = "";

	// create connection
	$connect = new mysqli($serverName, $userName, $password);

	// check connection
	if($connect->connect_error){
		die("Connection failed : ". $connect_error). "<br>";
	}
	echo "Connected successfully<br>";

	//sql to create db
	$dbName = "portfolio";
	$sql = "CREATE DATABASE $dbName";

	if($connect->query($sql)=== TRUE){
		echo "Database $dbName created successfully.";
	}else{
		echo "Error creating database $dbName : ". $connect->error;
	}

 ?>