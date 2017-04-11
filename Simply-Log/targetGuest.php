<?php 
	
	include "connect.php";

	$name = $_REQUEST['name'];
	$arrived = $_REQUEST['arrived'];

	//INSERT INTO msproduct (name, price, quantity) VALUES() 
	$query = "INSERT INTO peserta(name, arrived) 
			VALUES('" . $name . "'," . $arrived . ")";

	//echo $query;

	$con->query($query);
	header("location:welcomeGuest.php");

?>