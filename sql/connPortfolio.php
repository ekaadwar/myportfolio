<?php 
	$connPortfolio = new mysqli("localhost","root", "", "portfolio");
	if($connPortfolio->connect_error){
		die("Connection Failed : ". $conn_Portfolio->connect_error). "<br>";
	}
 ?>