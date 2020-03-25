<?php 
	$conn_Portfolio = new mysqli("localhost","root", "", "portfolio");
	if($conn_Portfolio->connect_error){
		die("Connection Failed : ". $conn_Portfolio->connect_error). "<br>";
	}
	echo "Connected successfully. <br>";
 ?>