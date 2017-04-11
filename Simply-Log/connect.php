<?php 
	
	$servername = "localhost";
	$username = "pma"; //root
	$password = "";
	$database = "attendance";

	try {
		$con = new PDO("mysql:host=$servername;dbname=$database",
			$username, $password);
		echo "Success!";
	}catch (Exception $e) {
		echo "Failure, " . $e->getMessage();
	}

?>