<!DOCTYPE html>
<html>
<head>
<style>
	.lbluet {background-color:#7DA3A1; border-style:solid; width:100%; border-color:#324851; border-collapse: collapse; border-width: 1px; text-align: center; color: #324851}
</style>
<?php include 'connect.php'; ?>
	<title></title>
</head>
<body>

<div>
<table class="lbluet">
<tr>
	<th>ID</th>
	<th>Name</th>
	<th>Number</th>
	</tr>
<?php 
$sql="SELECT ID, Name, Rando FROM test";
$result=$conn->query($sql);

if ($result -> num_rows > 0) {
    while($rows = $result->fetch_assoc()) {
    	echo "<tr class=text>";
		echo "<td>".$rows["ID"]."</td>";
		echo "<td>".$rows["Name"]."</td>";
		echo "<td>".$rows["test"]."</td>";
		echo "</tr>";
	}
} else {
	echo "error loading Table";
	}?>
</table>
</div>

</body>
</html>