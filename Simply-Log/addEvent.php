<?php 
	
	include "connect.php";

	$judul = $_REQUEST['judul'];
	$tanggal = $_REQUEST['tanggal'];
	$alamat = $_REQUEST['alamat'];
	$id_admin = $_REQUEST['id_admin']
	
	$query = "INSERT INTO event(judul, tanggal, alamat, id_admin) 
			VALUES('" . $judul . "'," . $tanggal . "," . $alamat . "," . $id_admin . ")";

	//echo $query;

	$con->query($query);
	header("location:index.php");

?>
