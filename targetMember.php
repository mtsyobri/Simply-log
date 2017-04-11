<?php 
	
	include "connect.php";

	$id_member = $_REQUEST['id_member'];
	$arrived = $_REQUEST['arrived'];

	
	$query = "INSERT INTO attendance_member(id_member, arrived) 
			VALUES('" . $id_member . "'," . $arrived . ")";

	//echo $query;

	$con->query($query);
	header("location:welcomeMember.php");

?>