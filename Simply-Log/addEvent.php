<?php 
	
	include "connect.php";

	$judul = $_REQUEST['judul'];
	$tanggal = $_REQUEST['tanggal'];
	$alamat = $_REQUEST['alamat'];

	//INSERT INTO msproduct (name, price, quantity) VALUES() 
	$query = "INSERT INTO event(judul, tanggal, alamat) 
			VALUES('" . $judul . "'," . $tanggal . "," . $alamat . ")";

	//echo $query;

	$con->query($query);
	header("location:index.php");

?>