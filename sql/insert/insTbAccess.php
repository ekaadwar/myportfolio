<?php 
	include "../connPortfolio.php";

	//put id number from privasi table
	$sqlPrivasi = "SELECT * FROM privasi";

	$resPrivasi = $connPortfolio->query($sqlPrivasi);

	if($resPrivasi->num_rows >0){
		$privasi=$resPrivasi->fetch_assoc();
		$id = $privasi['id'];
		
		//insert some data to access table
		$sqlAccess = "INSERT access (id, username, password)
						VALUES ('$id', 'ekaadwar', 'ekaganteng')";

		if ($connPortfolio->query($sqlAccess) === TRUE) {
			echo "Data has been sent";
		}else{
			echo "Error : ".$connPortfolio->error;
		}
	}else{
		echo "0 result";
	}

		
 ?>